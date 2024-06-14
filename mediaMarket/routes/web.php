<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('pages.user.listProduct');
//});

Route::group(['prefix' => '/'], function () {
    Route::get('/',[ProductController::class, 'show_product_hot'])->name('user.index');
    Route::get('/show-product/{category_id}', [ProductController::class, 'show_product_store'])->name('user.store');
    Route::get('/detail-product/{product_id}', [ProductController::class, 'show_product_detail'])->name('user.product_detail');
    Route::get('/cart', function () {
        return view('pages.user.cart');
    });
    Route::get('/check-out', function () {
        return view('pages.user.check-out');
    });
});

//Route::group(['prefix' => '/admin'], function () {
//    Route::get('/', function () {
//        return view('auth.login');
//    });
//
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
