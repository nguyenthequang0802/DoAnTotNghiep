<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getAllBill(){
        $orders = Order::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->get();
//        echo "<pre>";
//        print_r($orders);
//        echo "</pre>";
//        exit();
        return view('pages.user.history_bill',[
            'orders' => $orders,
        ]);
    }

    public function getDetailBill($order_code){
        $order_products = OrderDetail::where('order_code', '=',$order_code)->get();
        $order = Order::where('order_code', '=', $order_code)->first();
        $shipping = $order->shipping;
//        echo "<pre>";
//        print_r($shipping);
//        echo "</pre>";
//        exit();
        return view('pages.user.detail_bill', [
            'order_products' => $order_products,
            'shipping' => $shipping
        ]);
    }
}
