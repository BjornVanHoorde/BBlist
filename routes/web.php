<?php

use App\Http\Controllers\Admin\ScrapeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Head_categoryController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//
// USERS
//

//dashboard
Route::get('/', function () {return redirect(route('dashboard'));})->middleware(['auth']);
Route::get('/dashboard', [ListController::class, 'show'])->middleware(['auth'])->name('dashboard');

//categories
Route::get('/categories', [Head_categoryController::class, 'show'])->middleware(['auth'])->name('headCategories');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->middleware(['auth'])->name('categories');

//list
Route::get('/list/{slug}', [ListController::class, 'details'])->middleware(['auth'])->name('list');
Route::delete('/list/delete', [ListController::class, 'delete'])->middleware(['auth'])->name('list.delete');
Route::get('/list/product/{product}', [ProductController::class, 'product'])->middleware(['auth'])->name('product.list');
Route::delete('/list/product/delete/{product}', [ProductController::class, 'productDelete'])->middleware(['auth'])->name('product.list.delete');

//new list
Route::get('/list_new', [ListController::class, 'new'])->middleware(['auth'])->name('list.new');
Route::post('/list_new', [ListController::class, 'create'])->middleware(['auth'])->name('list.create');

//edit list
Route::get('/list_edit/{list}', [ListController::class, 'edit'])->middleware(['auth'])->name('list.edit');
Route::post('/list_edit/{list}', [ListController::class, 'change'])->middleware(['auth'])->name('list.change');

//edit profile
Route::get('/profile_edit', [UserController::class, 'edit'])->middleware(['auth'])->name('profile.edit');
Route::post('/profile_edit', [UserController::class, 'change'])->middleware(['auth'])->name('profile.change');

//shop
Route::get('/shop/{category}', [ProductController::class, 'show'])->middleware(['auth'])->name('shop');
Route::get('/shop/product/{product}', [ProductController::class, 'detail'])->middleware(['auth'])->name('product.shop');
Route::post('/shop/product/add', [ListController::class, 'store'])->middleware(['auth'])->name('product.add');


//
//AUTHENTICATION
//
Route::get('/register', function () {
    return view('register');
})->name('auth.register');

Route::get('/login', function () {
    return view('login');
})->name('auth.login');

//
//GUESTS
//
Route::get('/listlogin', function () {
    return view('guests.list-login');
})->name('list.login');

Route::get('/list', function () {
    return view('guests.list');
})->name('guests.list');

Route::get('/productdetaillist', function () {
    return view('guests.productDetail_list');
})->name('product.list');

Route::get('/message', function () {
    return view('guests.message');
})->name('message');


//
//ADMIN
//
Route::get('/scraper', [ScrapeController::class, 'show'])->name('scraper');
Route::post('/scrape/categories', [ScrapeController::class, 'scrapeCategories'])->name('scrape.categories');
Route::post('/scrape/articles', [ScrapeController::class, 'scrapeArticles'])->name('scrape.articles');


require __DIR__.'/auth.php';
