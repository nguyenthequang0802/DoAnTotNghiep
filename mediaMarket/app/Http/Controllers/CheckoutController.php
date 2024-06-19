<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
   public function show_checkout(){
       return view('pages.user.check-out');
   }
   public function confirm_checkout(Request $request){
       $data= $request->all();
       $shipping = new Shipping();
       $shipping['shipping_name'] = $data['shipping_name'];
       $shipping['shipping_phone'] = $data['shipping_phone'];
       $shipping['shipping_address'] = $data['shipping_address'];
       $shipping['shipping_note'] = $data['shipping_note'];
       $shipping->save();
       $shipping_id = $shipping['id'];

       $checkout_code = substr(md5(microtime()),rand(0,26),6);
       $order = new Order();
       $order['order_code'] = $checkout_code;
       $order['user_id'] = Auth::user()->id;
       $order['shipping_id'] = $shipping_id;
       $order['order_status'] = 1;
       $order['order_total'] = (int)$data['order_total_price'];
       $order['order_code_coupon'] = $data['order_coupon'];
       $order['order_code_value'] = (int)$data['order_coupon_value'];
       $order['order_payment_method'] = (int)$data['paymentMethod'];
       $order->save();

       if (Session::get('cart')){
           foreach (Session::get('cart') as $key => $cart){
               $order_detail = new OrderDetail();
               $order_detail['order_code'] = $checkout_code;
               $order_detail['product_id'] = $cart['product_id'];
               $order_detail['product_name'] = $cart['product_name'];
               $order_detail['product_price'] = $cart['product_price'];
               $order_detail['product_promotion'] = $cart['product_promotion'];
               $order_detail['product_order_quantity'] = $cart['product_quantity'];
               $order_detail->save();
           }
       }
       Session::forget('cart');
       Session::forget('coupon');
   }
}
