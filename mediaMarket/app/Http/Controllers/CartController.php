<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();

class CartController extends Controller
{
    public function show_cart(){
        return view('pages.user.cart');
    }
    public function add_to_cart(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart', []);

        // Flag to check if product is available in cart
        $is_avaiable = false;

        // Check if cart is not empty
        if ($cart) {
            foreach ($cart as $key => $value) {
                // If product already exists in cart, update the quantity
                if ($value['product_id'] == $data['cart_product_id']) {
                    $cart[$key]['product_quantity'] += $data['cart_product_quantity'];
                    $is_avaiable = true;
                    break;
                }
            }
        }

        // If product does not exist in cart, add new product
        if (!$is_avaiable) {
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_color' => $data['cart_product_color'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_price' => $data['cart_product_price'],
                'product_promotion' => $data['cart_product_promotion'],
            );
        }

        // Update the cart session
        Session::put('cart', $cart);
        Session::save();
    }

    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true){
            foreach ($data['cart_qty'] as $key => $qty){
                foreach ($cart as $session => $val){
                    if ($val['session_id'] == $key){
                        $cart[$session]['product_quantity'] = $qty;
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('ok', 'Cập nhật số lượng giỏ hàng thành công!');
        } else {
            return redirect()->back()->with('error', 'Cập nhật số lượng giỏ hàng thất bại!');
        }
    }

    public function delete_cart_product($session_id){
        $cart = Session::get('cart');
        if ($cart == true){
            foreach ($cart as $key => $val){
                if ($val['session_id'] == $session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('ok', 'Xóa sản phẩm thành công!');
        } else{
            return redirect()->back()->with('error', 'Xóa sản phẩm thất!');
        }
    }

    public function delete_cart_all(){
        $cart = Session::get('cart');
        if($cart == true){
            Session::forget('cart');
            return redirect()->back()->with('ok', 'Xóa giỏ hàng thành công!');
        } else{
            return redirect()->back()->with('error', 'Xóa giỏ hàng thất bại!');
        }
    }
}
