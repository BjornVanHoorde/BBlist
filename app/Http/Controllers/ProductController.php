<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Head_category;
use App\Models\Lists;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($category) {
        $title = ucfirst($category);
        $categoryId = Category::where('pathname', $category)->first()->id;
        $headCategoryId = Category::where('pathname', $category)->first()->head_category_id;
        $headCategory = Head_category::where('id', $headCategoryId)->first()->name;
        $products = Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->where('category_id', $categoryId)
        ->orderBy('name', 'ASC')
        ->get();

        return view('users.shop', compact('title', 'products', 'headCategory'));
    }

    public function detail($productId) {
        $title = 'Product details';
        $product = Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->where('products.id', $productId)
        ->first();

        $lists = Lists::where('user_id', Auth::id())->orderBy('name', 'ASC')->get();

        return view('users.productDetail_shop', compact('title', 'product', 'lists'));
    }
}
