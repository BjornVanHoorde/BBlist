<?php

use App\Http\Controllers\Admin\ScrapeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuestController;
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
Route::middleware(['auth'])->group(function () {
    //dashboard
    Route::get('/', function () {return redirect(route('dashboard'));});
    Route::get('/dashboard', [ListController::class, 'show'])->name('dashboard');

    //categories
    Route::get('/categories', [Head_categoryController::class, 'show'])->name('headCategories');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories');

    //list
    Route::get('/lists/{slug}', [ListController::class, 'details'])->name('list');
    Route::delete('/list/delete', [ListController::class, 'delete'])->name('list.delete');
    Route::get('/list/{slug}/product/{product}', [ProductController::class, 'listProduct'])->name('product.list');
    Route::delete('/list/product/delete/', [ProductController::class, 'listProductDelete'])->name('product.list.delete');

    //new list
    Route::get('/list_new', [ListController::class, 'new'])->name('list.new');
    Route::post('/list_new', [ListController::class, 'create'])->name('list.create');

    //edit list
    Route::get('/list_edit/{list}', [ListController::class, 'edit'])->name('list.edit');
    Route::post('/list_edit/{list}', [ListController::class, 'change'])->name('list.change');

    //edit profile
    Route::get('/profile_edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile_edit', [UserController::class, 'change'])->name('profile.change');

    //shop
    Route::get('/shop/{category}', [ProductController::class, 'show'])->name('shop');
    Route::get('/shop/product/{product}', [ProductController::class, 'detail'])->name('product.shop');
    Route::post('/shop/product/add', [ListController::class, 'store'])->name('product.add');
});


//
//GUESTS
//
Route::middleware(['guest'])->group(function () {
    //authetication
    Route::get('/register', function () {
        return view('register');
    })->name('auth.register');

    Route::get('/login', function () {
        return view('login');
    })->name('auth.login');


    //guests
    Route::get('/list/{slug}', [GuestController::class, 'loginShow'])->name('list.login');
    Route::post('/list/{slug}', [GuestController::class, 'login'])->name('guest.login');

    Route::get('/guest/list/{slug}', [GuestController::class, 'list'])->name('guests.list');

    Route::get('/guest/list/{slug}/product/{product}', [GuestController::class, 'product'])->name('guest.product.list');

    Route::get('guest/list/{slug}/message', [GuestController::class, 'message'])->name('guest.message');
});


//
//ADMIN
//
Route::get('/scraper', [ScrapeController::class, 'show'])->name('scraper');
Route::post('/scrape/categories', [ScrapeController::class, 'scrapeCategories'])->name('scrape.categories');
Route::post('/scrape/articles', [ScrapeController::class, 'scrapeArticles'])->name('scrape.articles');


require __DIR__.'/auth.php';
