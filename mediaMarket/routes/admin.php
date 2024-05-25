<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
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
        Route::get('/', [HomeController::class, 'index'])->name('admin.homepage');
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
        });
        Route::group(['prefix' => 'brand'], function () {
            Route::get('/', [BrandController::class, 'index'])->name("admin.brand.index");
            Route::get('/add', [BrandController::class, 'create'])->name("admin.brand.add");
            Route::post('/add', [BrandController::class, 'store'])->name("admin.brand.store");
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name("admin.brand.edit");
            Route::post('/edit/{id}', [BrandController::class, 'update'])->name("admin.brand.update");
            Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name("admin.brand.destroy");
        });
    });
});
