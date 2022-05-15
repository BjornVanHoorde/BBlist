<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Head_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category) {
        $title = ucfirst($category);
        $headCategoryId = Head_category::where('name', $category)->first()->id;
        $categories = Category::where('head_category_id', $headCategoryId)->get();
        $headCategories = '';


        return view('users.categories', compact('categories', 'title', 'headCategories'));
    }
}
