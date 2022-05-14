<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Head_category;
use App\Models\Image;
use App\Models\Product;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;
use Illuminate\Support\Str;

set_time_limit(1800);

class ScrapeController extends Controller
{
    public function show() {
        $shops = [
            'babycorner' => 'The Baby\'s Corner',
            'mimibaby' => 'Mimi Baby',
        ];

        $headCategories = Head_category::all();
        $babycornerCategories = Category::where('shop_id', 1)->get();
        $mimibabyCategories = Category::where('shop_id', 2)->get();

        return view('admin.scrape-form', compact('shops', 'headCategories', 'babycornerCategories', 'mimibabyCategories'));
    }

    public function scrapeCategories(Request $r) {
        switch ($r->shop) {
            case 'babycorner':
                $this->scrapeBabycornerCategories($r->url, $r->headCategory);
                break;
            case 'mimibaby':
                $this->scrapeMimibabyCategories($r->url, $r->headCategory);
                break;
        }
        return redirect()->back();
    }

    public function scrapeArticles(Request $r) {
        switch ($r->shop) {
            case 'babycorner':
                return $this->scrapeBabycornerArticles($r->url, $r->category);
                break;
            case 'mimibaby':
                return $this->scrapeMimibabyArticles($r->url, $r->category);
                break;
        }
    }

    public function scrapeBabycornerCategories($url, $headCategory) {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $categories = $crawler->filter('.facet')
            ->each(function($node) {

                if ($node->filter('.hdr')->text() === 'categorie') {
                    $category = $node->filter('.cnt ul li label .facet-item')
                        ->each(function($node2) {
                            $cat = new stdClass();
                            $cat->name = $node2->text();
                            $cat->url = ('https://www.thebabyscorner.be' . $node2->attr('href'));

                            return $cat;
                        });
                    return $category;
                }
            });

        $categories = array_values(array_filter($categories))[0];

        foreach ($categories as $scrapeCategory) {
            $exists = Category::where('url', $scrapeCategory->url)->count();
            if ($exists > 0) continue;

            $categoryEntity = new Category();
            $categoryEntity->name = $scrapeCategory->name;
            $categoryEntity->url = $scrapeCategory->url;
            $categoryEntity->shop_id = 1;
            $categoryEntity->head_category_id = $headCategory;
            $categoryEntity->save();
        }
    }

    public function scrapeMimibabyCategories($url, $headCategory) {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $categories = $crawler->filter('.cms-element-sidebar-filter .filter-select-category ul li a')
            ->each(function($node) {
                $cat = new stdClass();
                $cat->name = $node->text();
                $cat->url = $node->attr('href');

                return $cat;
            });

        foreach ($categories as $scrapeCategory) {
            $exists = Category::where('url', $scrapeCategory->url)->count();
            if ($exists > 0) continue;

            $categoryEntity = new Category();
            $categoryEntity->name = $scrapeCategory->name;
            $categoryEntity->url = $scrapeCategory->url;
            $categoryEntity->shop_id = 2;
            $categoryEntity->head_category_id = $headCategory;
            $categoryEntity->save();
        }
    }

    public function scrapeBabycornerArticles($url, $category) {
        $client = new Client();
        $countCrawler = $client->request('GET', $url);

        $articleCount = $countCrawler->filter('.counter-inside')->text();
        $count = (int)substr($articleCount, 0, strpos($articleCount, ' '));

        $articlesCrawler = $client->request('GET', $url . '?count=' . $count);

        $articles = $articlesCrawler->filter('.l-products-item')
            ->each(function($node) {
                $art = new stdClass();
                $art->name = $node->filter('.product-info .product-description h3 a')->text();
                $art->price = ltrim($node->filter('.product-info .product-action .prices .lbl-price')->text(), '€ ');
                $art->url = ('https://www.thebabyscorner.be' . $node->filter('.product-info .product-description h3 a')->attr('href'));
                $art->image = ('https://www.thebabyscorner.be' . $node->filter('.product-img a .thumbnail img')->first()->attr('data-src'));
                $art->description = $this->getDesciptionBabycorner($art->url);

                return $art;
            });

            foreach ($articles as $article) {
                $this->storeArticle($article, $category, 1);
            }

        return view('admin.scrape-result', compact('articles'));
    }

    public function getDesciptionBabycorner($url) {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $description = $crawler->filter('.product-bottom-info #description .description');

        if ($description->count() <= 0) return null;
        $description = $crawler->filter('.product-bottom-info #description .description')->text();

        return $description;
    }


    public function scrapeMimibabyArticles($url, $category) {
        $client = new Client();

        $articles = [];

        for ($i=1; $i <= 10; $i++) {
            $crawler = $client->request('GET', $url . '?order=name-asc&p=' . $i);
            if(!$crawler) break;
            $articles = array_merge($articles, $this->scrapemimibabydata($crawler));
        }

        foreach ($articles as $article) {
            $this->storeArticle($article, $category, 2);
        }

        return view('admin.scrape-result', compact('articles'));
    }

    public function scrapemimibabydata($crawler) {
        $articles = $crawler->filter('.product-box .card-body')
            ->each(function($node) {
                $art = new stdClass();
                $art->name = $node->filter('.product-info .product-name')->text();
                $art->price = ltrim($node->filter('.product-info .product-price-info .product-price')->text(), '€ ');
                $art->url = $node->filter('.product-info .product-name')->attr('href');
                $art->image = $node->filter('.product-image-wrapper .product-image-link img')->first()->attr('src');
                $art->description = $this->getDesciptionmimibaby($art->url);

                return $art;
            });

        return $articles;
    }


    public function getDesciptionmimibaby($url) {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $description = $crawler->filter('.product-detail-tabs-content .product-detail-description-text');

        if ($description->count() <= 0) return null;
        $description = $crawler->filter('.product-detail-tabs-content .product-detail-description-text')->text();

        return $description;
    }

    public function storeArticle($article, $category, $shop_id) {
            $productEntity = new Product();
            $productEntity->shop_id = $shop_id;
            $productEntity->category_id = $category;
            $productEntity->name = $article->name;
            $productEntity->description = $article->description;
            $productEntity->price = $article->price;
            $productEntity->url = $article->url;
            $productEntity->save();

            $this->storeImage($article->image, $productEntity->id);
    }

    public function storeImage($image, $product_id) {
            // make random file name, with day-prefix
            $randomName = date('d') . '-' . Str::random(10) . '.jpg';

            // path magic
            $imagePath = 'uploads/' . date('Y/m/');
            $fullPath = $imagePath . $randomName;

            $imageSystem = Storage::disk('public');
            $imageSystem->putFileAs($imagePath, $image, $randomName);

            $imageEntity = new Image();
            $imageEntity->path = $fullPath;
            $imageEntity->alt = $randomName;
            $imageEntity->product_id = $product_id;
            $imageEntity->save();
    }
}
