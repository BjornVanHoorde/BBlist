<?php

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
Route::get('/', function () {
    return redirect(route('dashboard'));
})->middleware(['auth']);
Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/categories', function () {
    return view('users.categories');
})->middleware(['auth'])->name('categories');

Route::get('/list_new', function () {
    return view('users.list_new');
})->middleware(['auth'])->name('list.new');

Route::get('/profile_edit', function () {
    return view('users.profile_edit');
})->middleware(['auth'])->name('profile.edit');

Route::get('/list_edit', function () {
    return view('users.list_edit');
})->middleware(['auth'])->name('list.edit');

Route::get('/shop', function () {
    return view('users.shop');
})->middleware(['auth'])->name('shop');

Route::get('/productdetailshop', function () {
    return view('users.productDetail_shop');
})->middleware(['auth'])->name('product.shop');

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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
