<?php

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
    Route::get('/', function () {
        return view('pages.user.index');
    });
    Route::get('/store', function () {
        return view('pages.user.store');
    });
    Route::get('/detail-product', function () {
        return view('pages.user.detailProduct');
    });
    Route::get('/cart', function () {
        return view('pages.user.cart');
    });
});
