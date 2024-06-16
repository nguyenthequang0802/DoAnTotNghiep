<?php

use App\Http\Controllers\CartController;
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
    Route::post('/them-gio-hang', [CartController::class, 'add_to_cart'])->name('user.add_to_cart');
    Route::get('/cart', [CartController::class, 'show_cart'])->name('user.showCart');
    Route::get('/delete_cart_product/{session_id}', [CartController::class, 'delete_cart_product'])->name('user.delete_cart_product');
    Route::get('/delete_all_cart', [CartController::class, 'delete_cart_all'])->name('user.delete_cart_all');
    Route::post('/update-cart', [CartController::class, 'update_cart'])->name('user.update-cart');

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
