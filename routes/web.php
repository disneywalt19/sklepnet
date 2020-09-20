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
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
// Route::get('/search', [App\Http\Controllers\SearchController::class, 'searchByPrice'])->name('searchByPrice');