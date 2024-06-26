<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use Carbon\Carbon;
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
                'storage_product_qty'=> $data['storage_product_qty'],
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
           $message = '';
           foreach ($data['cart_qty'] as $key => $qty){
               foreach ($cart as $session => $val){
                   if ($val['session_id'] == $key && $qty < $cart[$session]['storage_product_qty']){
                       $cart[$session]['product_quantity'] = $qty;
                       $message .= '<p>Sản phẩm '.$cart[$session]['product_name'].' đã được cập nhật số lượng!</p>';
                   } elseif ($qty > $cart[$session]['storage_product_qty']){
                       $message .= '<p class="text-red-800">Vui lòng kiểm tra lại số lượng sản phẩm '.$cart[$session]['product_name'].'!</p>';
                   }
               }
           }
           Session::put('cart', $cart);
           return redirect()->back()->with('ok', 'Cập nhật số lượng giỏ hàng thành công!')->with('message', $message);
       } else{
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
            Session::forget('coupon');
            return redirect()->back()->with('ok', 'Xóa giỏ hàng thành công!');
        } else{
            return redirect()->back()->with('error', 'Xóa giỏ hàng thất bại!');
        }
    }

    public function check_coupon(Request $request){
        $data = $request->all();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $coupon = Coupon::where('code', '=', $data['coupon_code'])->where('end_date', '>=', $today)->first();
        if ($coupon){
            $count_coupon = $coupon->count();
            if ($count_coupon > 0){
                $coupon_session = Session::get('coupon');
                if ($coupon_session == true){
                    $is_avaiable = 0;
                    if ($is_avaiable == 0){
                        $cou[] = array(
                            'coupon_code' => $coupon->code,
                            'coupon_value' => $coupon->value,
                        );
                        Session::put('coupon', $cou);
                    }
                } else{
                    $cou[] = array(
                        'coupon_code' => $coupon->code,
                        'coupon_value' => $coupon->value,
                    );
                    Session::put('coupon', $cou);
                }
                Session::save();
                return redirect()->back()->with('ok', 'Thêm mã giảm giá thành công!');
            }
        } else{
            return redirect()->back()->with('error', 'Mã giảm giá không đúng hoặc đã hết hạn, vui lòng kiểm tra lại!');
        }
    }
    public function unset_coupon(){
        $coupon = Session::get('coupon');
        if($coupon == true){
            Session::forget('coupon');
            return redirect()->back()->with('ok', 'Xóa mã giảm giá thành công!');
        } else{
            return redirect()->back()->with('error', 'Xóa mã giảm giá thất bại!');
        }
    }
}
