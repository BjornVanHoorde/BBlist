<?php

namespace App\Http\Controllers;

use App\Models\Head_category;
use Illuminate\Http\Request;

class Head_categoryController extends Controller
{
    public function show() {
        $title = 'Categories';
        $headCategories = Head_category::all();
        $categories = '';

        return view('users.categories', compact('headCategories', 'title', 'categories'));
    }
}
