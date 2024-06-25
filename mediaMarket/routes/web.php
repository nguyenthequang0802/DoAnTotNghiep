<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThanksController;
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

Route::group(['prefix' => '/'], function () {
    Route::get('/',[HomeController::class, 'showIndex'])->name('user.index');
    Route::get('/san-pham/{category_slug}', [ProductController::class, 'show_product_store'])->name('user.store');
    Route::get('/chi-tiet/{product_slug}', [ProductController::class, 'show_product_detail'])->name('user.product_detail');

    Route::get('/tin-tuc/{category_slug}', [PostController::class, 'show_post'])->name('user.post');
    Route::get('/bai-viet/{post_slug}', [PostController::class, 'show_post_detail'])->name('user.post_detail');

    Route::post('/them-gio-hang', [CartController::class, 'add_to_cart'])->name('user.add_to_cart');
    Route::get('/gio-hang', [CartController::class, 'show_cart'])->name('user.showCart');
    Route::get('/delete_cart_product/{session_id}', [CartController::class, 'delete_cart_product'])->name('user.delete_cart_product');
    Route::get('/delete_all_cart', [CartController::class, 'delete_cart_all'])->name('user.delete_cart_all');
    Route::post('/update-cart', [CartController::class, 'update_cart'])->name('user.update-cart');
    Route::post('/gio-hang/ma-giam-gia', [CartController::class, 'check_coupon'])->name('user.check_coupon');
    Route::get('/gio-hang/xoa-ma-giam-gia', [CartController::class, 'unset_coupon'])->name('user.unset_coupon');

    Route::get('login-checkout', [LoginController::class, 'showLoginForm'])->name('user.form_login');
    Route::post('/login-checkout', [LoginController::class, 'login'])->name('user.login');
    Route::post('/register-checkout', [RegisterController::class, 'register'])->name('user.register');

    Route::controller(GoogleController::class)->group(function(){
        Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
    });


    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.logout');
        Route::post('/logout-form', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.auth.logout');
        Route::get('/check-out', [\App\Http\Controllers\CheckoutController::class,'show_checkout'])->name('user.check-out');
        Route::post('/confirm-checkout', [\App\Http\Controllers\CheckoutController::class,'confirm_checkout'])->name('user.confirm_checkout');
        Route::get('/cam-on', [ThanksController::class,'index'])->name('user.cam_on');
    });

});

Auth::routes();

