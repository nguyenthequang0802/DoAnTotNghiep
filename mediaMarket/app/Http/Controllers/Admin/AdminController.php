<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $number_products = Product::count();
        $number_cutomers = User::count();
//        $number_brands = Brand::count();
        $total_income = Order::whereYear('created_at',$currentYear)->whereMonth('created_at', $currentMonth)->where('order_status', '=', 1)->sum('order_total');
        $number_orders = Order::count();
        $best_sell = Product::orderBy('quantity_sold', 'desc')->take(5)->get();
        return view('admin.dashboard', [
            'number_products' => $number_products,
            'number_cutomers' => $number_cutomers,
            'total_income' => $total_income,
            'number_orders' => $number_orders,
            'best_sell' => $best_sell,
        ]);
    }
}
