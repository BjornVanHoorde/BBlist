<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category) {
        $title = ucfirst($category);
        $categoryId = Category::where('pathname', $category)->first()->id;
        $products = Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->where('category_id', $categoryId)
        ->orderBy('name', 'ASC')
        ->get();

        return view('users.shop', compact('title', 'products'));
    }

    public function detail($productId) {
        $title = 'Product details';
        $product = Product::select('products.*', 'images.alt', 'images.path', Product::raw('shops.name as shopName'))
        ->join("images", "images.product_id", "=", "products.id")
        ->join("shops", "shops.id", "=", "products.shop_id")
        ->where('products.id', $productId)
        ->first();

        return view('users.productDetail_shop', compact('title', 'product'));
    }
}
