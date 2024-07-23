<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('admin')->group(function () {
    // Login Admin page
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('admin.register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('admin.register');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.auth.logout');
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', [MenuController::class, 'index'])->name("admin.menu.index");
            Route::get('/add', [MenuController::class, 'create'])->name("admin.menu.add");
            Route::post('/add', [MenuController::class, 'store'])->name("admin.menu.store");
            Route::get('/edit/{id}', [MenuController::class, 'edit'])->name("admin.menu.edit");
            Route::post('/edit/{id}', [MenuController::class, 'update'])->name("admin.menu.update");
            Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name("admin.menu.destroy");
        });
        Route::group(['prefix' => 'category'], function () {
            Route::get('/{model_type}', [CategoryController::class, 'index'])->name("admin.category.index");
            Route::get('/{model_type}/add', [CategoryController::class, 'create'])->name("admin.category.add");
            Route::post('/{model_type}/add', [CategoryController::class, 'store'])->name("admin.category.store");
            Route::get('/{model_type}/edit/{id}', [CategoryController::class, 'edit'])->name("admin.category.edit");
            Route::post('/{model_type}/edit/{id}', [CategoryController::class, 'update'])->name("admin.category.update");
            Route::get('/{model_type}/delete/{id}', [CategoryController::class, 'destroy'])->name("admin.category.destroy");
            Route::post('/{model_type}/search', [CategoryController::class, 'search'])->name("admin.category.search");

        });
        Route::group(['prefix' => 'brand'], function () {
            Route::get('/', [BrandController::class, 'index'])->name("admin.brand.index");
            Route::get('/add', [BrandController::class, 'create'])->name("admin.brand.add");
            Route::post('/add', [BrandController::class, 'store'])->name("admin.brand.store");
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name("admin.brand.edit");
            Route::post('/edit/{id}', [BrandController::class, 'update'])->name("admin.brand.update");
            Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name("admin.brand.destroy");
            Route::post('/search', [BrandController::class, 'search'])->name("admin.brand.search");
        });
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', [BannerController::class, 'index'])->name("admin.banner.index");
            Route::get('/add', [BannerController::class, 'create'])->name("admin.banner.add");
            Route::post('/add', [BannerController::class, 'store'])->name("admin.banner.store");
            Route::get('/edit/{id}', [BannerController::class, 'edit'])->name("admin.banner.edit");
            Route::post('/edit/{id}', [BannerController::class, 'update'])->name("admin.banner.update");
            Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name("admin.banner.destroy");
            Route::post('/search', [BannerController::class, 'search'])->name("admin.banner.search");
        });
        Route::group(['prefix' => 'post'], function () {
            Route::get('/', [PostController::class, 'index'])->name("admin.post.index");
            Route::get('/add', [PostController::class, 'create'])->name("admin.post.add");
            Route::post('/add', [PostController::class, 'store'])->name("admin.post.store");
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name("admin.post.edit");
            Route::post('/edit/{id}', [PostController::class, 'update'])->name("admin.post.update");
            Route::get('/delete/{id}', [PostController::class, 'destroy'])->name("admin.post.destroy");
            Route::post('/search-post', [PostController::class, 'search'])->name("admin.post.search");
        });
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', [ProductController::class, 'index'])->name("admin.product.index");
            Route::get('/add', [ProductController::class, 'create'])->name("admin.product.add");
            Route::post('/add', [ProductController::class, 'store'])->name("admin.product.store");
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name("admin.product.edit");
            Route::post('/edit/{id}', [ProductController::class, 'update'])->name("admin.product.update");
            Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name("admin.product.destroy");
            Route::group(['prefix' => 'upload-file'], function () {
                Route::get('/{product_id}', [ProductImageController::class, 'index'])->name("admin.product.upload.index");
                Route::post('/{product_id}', [ProductImageController::class, 'store'])->name("admin.product.upload.store");
                Route::get('/{image_id}/delete', [ProductImageController::class, 'destroy'])->name("admin.product.upload.destroy");
            });
            Route::post('/search-product', [ProductController::class, 'search'])->name("admin.product.search");
            Route::post('/export-csv', [ProductController::class, 'export_csv'])->name("admin.product.export_csv");
        });
        Route::group(['prefix' => 'coupon'], function () {
            Route::get('/', [CouponController::class, 'index'])->name("admin.coupon.index");
            Route::get('/add', [CouponController::class, 'create'])->name("admin.coupon.add");
            Route::post('/add', [CouponController::class, 'store'])->name("admin.coupon.store");
            Route::get('/edit/{id}', [CouponController::class, 'edit'])->name("admin.coupon.edit");
            Route::post('/edit/{id}', [CouponController::class, 'update'])->name("admin.coupon.update");
            Route::get('/delete/{id}', [CouponController::class, 'destroy'])->name("admin.coupon.destroy");
            Route::post('/search-coupon', [CouponController::class, 'search'])->name("admin.coupon.search");
            Route::post('/search-coupon', [CouponController::class, 'search'])->name("admin.coupon.search");
            Route::get('/send-mail/{id}', [CouponController::class, 'send_coupon'])->name("admin.coupon.send_coupon");
        });
        Route::group(['prefix' => 'order'], function () {
            Route::get('/', [OrderController::class, 'index'])->name("admin.order.index");
//            Route::get('/add', [OrderController::class, 'create'])->name("admin.order.add");
//            Route::post('/add', [OrderController::class, 'store'])->name("admin.order.store");
            Route::get('/show/{order_code}', [OrderController::class, 'show'])->name("admin.order.show");
            Route::post('/update-order-status', [OrderController::class, 'update_order_status'])->name("admin.order.update_status");
            Route::post('/update-orderitem-qty', [OrderController::class, 'update_order_qty'])->name("admin.order.update_qty");
            Route::get('/print-order/{checkout_code}', [OrderController::class, 'print_order'])->name("admin.order.print_order");
            Route::post('/search', [OrderController::class, 'search'])->name("admin.order.search");
            Route::post('/export-csv', [OrderController::class, 'export_csv'])->name("admin.order.export_csv");
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', [CustomerController::class, 'index'])->name("admin.customer.index");
            Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name("admin.customer.edit");
            Route::post('/edit/{id}', [CustomerController::class, 'update'])->name("admin.customer.update");
            Route::get('/delete/{id}', [CustomerController::class, 'destroy'])->name("admin.customer.destroy");
            Route::post('/search-customer', [CustomerController::class, 'search'])->name("admin.customer.search");
        });
    });
});
