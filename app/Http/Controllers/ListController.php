<?php

namespace App\Http\Controllers;

use App\Models\List_product;
use App\Models\Lists;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use stdClass;

class ListController extends Controller
{
    public function new() {
        $title = 'New list';
        return view('users.list_new', compact('title'));
    }

    public function show() {
        $title = 'Home';
        $lists = Lists::where('user_id', Auth::id())->orderBY('name', 'ASC')->get();

        return view('users.dashboard', compact('title', 'lists'));
    }

    public function details($slug) {
        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;
        $products = Product::select('products.*', 'images.alt', 'images.path', 'list_products.contributor_object', Product::raw('shops.name as shopName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->join("list_products", "list_products.product_id", "=", "products.id")
        ->where('list_id', $list->id)
        ->orderBy('products.name', 'ASC')
        ->get();

        $amounts = $this->getAmounts($products);

        return view('users.list', compact('title', 'list', 'products', 'amounts'));
    }

    public function create(Request $r) {
        $r->validate([
            'nameOfChild' => 'required|max:255',
            'genderOfChild' => 'required|in:boy,girl,neutral',
            'description' => 'required',
            'photoChild' => 'image|required|max:2000|mimes:png,jpg,gif,jpeg',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password',
        ]);

        $listEntity = new Lists();
        $listEntity->name = $r->nameOfChild;
        $listEntity->gender = $r->genderOfChild;
        $listEntity->description = $r->description;
        $listEntity->password = Hash::make($r->password);
        $listEntity->slug = Str::random(6);
        $listEntity->image = $this->storeImage($r->photoChild);
        $listEntity->user_id = Auth::id();
        $listEntity->save();

        return redirect()->route('dashboard');
    }

    public function store(Request $r) {
        $r->validate([
            'product' => 'required|exists:products,id',
            'lists' => 'required',
        ]);

        $lists = Lists::where('user_id', Auth::id())->whereIn('name',$r->lists)->get();

        foreach ($lists as $list) {
            $listEnitity = new List_product();
            $listEnitity->list_id = $list->id;
            $listEnitity->product_id = $r->product;
            $listEnitity->contributor_object = null;
            $listEnitity->save();
        }

        return redirect()->back()->with('status', __('Product sucessfully added') );
    }

    public function edit($slug) {
        $list = Lists::where('slug', $slug)->first();
        $title = $list->name;

        return view('users.list_edit', compact('title', 'list'));
    }

    public function change(Request $r, $slug) {
        $r->validate([
            'nameOfChild' => 'required|max:255',
            'genderOfChild' => 'required|in:boy,girl,neutral',
            'description' => 'required',
            'photoChild' => 'image|required|max:2000|mimes:png,jpg,gif,jpeg',
        ]);

        $listEntity = Lists::where('slug', $slug)->first();
        $listEntity->name = $r->nameOfChild;
        $listEntity->gender = $r->genderOfChild;
        $listEntity->description = $r->description;
        $listEntity->image = $this->storeImage($r->photoChild);
        $listEntity->save();

        return redirect()->route('list', $slug);
    }

    public function delete(Request $r) {
        $r->validate([
            'list' => 'required|exists:lists,id',
        ]);


        $list = Lists::findOrFail($r->list);
        $list_products = List_product::where('list_id', $r->list)->get();

        foreach ($list_products as $product) {
            $product->delete();
        }

        $list->delete();

        return redirect()->route('dashboard')->with('status', __('Successfully deleted list'));
    }

    private function storeImage($image) {
        // get extension
        $ext = $image->getClientOriginalExtension();

        // make random file name, with day-prefix
        $randomName = date('d') . '-' . Str::random(10) . '.' . $ext;

        // path magic
        $filePath = 'uploads/' . date('Y/m/');
        $fullPath = $filePath . $randomName;

        // upload files in symbolic public folder (make accessable)
        /** @var Illuminate\Filesystem\FilesystemAdapter */
        $fileSystem = Storage::disk('public');
        $fileSystem->putFileAs($filePath, $image, $randomName);

        return $fullPath;
    }

    private function getAmounts($products) {
        $totalAmount = count($products);
        $boughtAmount = 0;
        $totalCost = 0.00;
        $boughtCost = 0.00;

        foreach ($products as $product) {
            $totalCost = (float)$totalCost + (float)str_replace(',', '.', str_replace(' ', '',$product->price));

            if ($product->contributor_object !== null) {
                $boughtCost = (float)$boughtCost + (float)str_replace(',', '.', str_replace(' ', '',$product->price));
                $boughtAmount = $boughtAmount + 1;
            }
        }

        $amounts = new stdClass();
        $amounts->totalAmount = $totalAmount;
        $amounts->boughtAmount = $boughtAmount;
        $amounts->totalCost = $totalCost;
        $amounts->boughtCost = $boughtCost;

        return $amounts;
    }
}
