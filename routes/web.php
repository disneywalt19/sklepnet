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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\ProductsController::class, 'index'])->name('index');

// Route::get('/index', [App\Http\Controllers\ProductsController::class, 'searchByPrice'])->name('index');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/index/{id}', [App\Http\Controllers\ProductsController::class, 'categoryProducts'])->name('index.id');

// Route::get('/index?from={from}&to={to}', [App\Http\Controllers\ProductsController::class, 'searchByPricee'])->name('index.searchByPricee');

Route::group([
    'prefix' => 'products',
    'as'     => 'products.',
],function() {
    Route::get('/{product}', [App\Http\Controllers\ProductsController::class, 'show'])->name('show');
    Route::post('/{product}/add-to-cart', [App\Http\Controllers\ProductsController::class, 'add_to_cart'])->name('add_to_cart');
});

// Route::group([
//     'prefix' => 'cart',
//     'as'     => 'cart.',
// ],function() {
//     Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
//     Route::get('/{product}/delete', [App\Http\Controllers\CartController::class, 'delete'])->name('delete');
// });

// Route::get('/show/{product}', [App\Http\Controllers\ProductsController::class, 'show'])->name('show');



Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/{product}/delete', [App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete');
Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');

// Route::group([
//     'prefix' => 'orders',
//     'as'     => 'orders',
// ],function() {
    
// });
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'account',
    'as'     => 'account.',
],function() {
Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
});