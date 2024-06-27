<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $number_products = Product::count();
        $number_cutomers = User::count();
        $number_brands = Brand::count();
        $number_orders = Order::count();
        $best_sell = Product::orderBy('quantity_sold', 'desc')->take(5)->get();
        return view('admin.dashboard', [
            'number_products' => $number_products,
            'number_cutomers' => $number_cutomers,
            'number_brands' => $number_brands,
            'number_orders' => $number_orders,
            'best_sell' => $best_sell,
        ]);
    }
}
