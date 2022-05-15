<?php

use App\Http\Controllers\Admin\ScrapeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Head_categoryController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// USERS
Route::get('/', function () {return redirect(route('dashboard'));})->middleware(['auth']);
Route::get('/dashboard', [ListController::class, 'show'])->middleware(['auth'])->name('dashboard');

Route::get('/categories', [Head_categoryController::class, 'show'])->middleware(['auth'])->name('headCategories');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->middleware(['auth'])->name('categories');

Route::get('/list_new', [ListController::class, 'new'])->middleware(['auth'])->name('list.new');
Route::post('/list_new', [ListController::class, 'create'])->middleware(['auth'])->name('list.create');

Route::get('/profile_edit', function () {
    return view('users.profile_edit');
})->middleware(['auth'])->name('profile.edit');

Route::get('/list_edit', function () {
    return view('users.list_edit');
})->middleware(['auth'])->name('list.edit');

Route::get('/shop/{category}', [ProductController::class, 'show'])->middleware(['auth'])->name('shop');
Route::get('/shop/product/{product}', [ProductController::class, 'detail'])->middleware(['auth'])->name('product.shop');

Route::get('/productdetaillist', function () {
    return view('users.productDetail_list');
})->middleware(['auth'])->name('product.list');

Route::get('/list', function () {
    return view('users.list');
})->middleware(['auth'])->name('list');



//AUTHENTICATION
Route::get('/register', function () {
    return view('register');
})->name('auth.register');

Route::get('/login', function () {
    return view('login');
})->name('auth.login');


//GUESTS
Route::get('/listlogin', function () {
    return view('guests.list-login');
})->name('list.login');

Route::get('/list', function () {
    return view('guests.list');
})->name('list');

Route::get('/productdetaillist', function () {
    return view('guests.productDetail_list');
})->name('product.list');

Route::get('/message', function () {
    return view('guests.message');
})->name('message');


//ADMIN
Route::get('/scraper', [ScrapeController::class, 'show'])->name('scraper');
Route::post('/scrape/categories', [ScrapeController::class, 'scrapeCategories'])->name('scrape.categories');
Route::post('/scrape/articles', [ScrapeController::class, 'scrapeArticles'])->name('scrape.articles');


require __DIR__.'/auth.php';
