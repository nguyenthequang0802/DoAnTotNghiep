<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('id', 'desc')->paginate(10);
        return view('admin.order.index', ['orders' => $orders]);
    }
    public function show($order_code){
        $order_details = OrderDetail::where('order_code', '=', $order_code)->get();
        $order = Order::where('order_code', '=', $order_code)->first();
        $customer = $order->user;
        $shipping = $order->shipping;
        $order_status = $order['order_status'];
        return view('admin.order.show_orderDetail', ['order_details' => $order_details, 'customer' => $customer, 'shipping' => $shipping, 'order_status' => $order_status]);
    }
    public function update_order_status(Request $request){
        $data = $request->all();
        $order = Order::find($data['order_id']);
        $order['order_status'] = $data['order_status'];
        $order->save();

        if ($order->order_status == 1){
            foreach ($data['order_product_id'] as $i => $product_id){
                $product = Product::find($product_id);
                $product_quantity = $product['quantity'];
                $product_sold = $product['quantity_sold'];
                foreach ($data['quantity'] as $j => $product_sell_qty){
                    if ($i == $j){
                        $product_remain = $product_quantity - $product_sell_qty;
                        $product['quantity'] = $product_remain;
                        $product['quantity_sold'] = $product_sold + $product_sell_qty;
                        $product->save();
                    }
                }
            }
        } elseif ($order->order_status != 1 && $order->order_status != 2){
            foreach ($data['order_product_id'] as $i => $product_id){
                $product = Product::find($product_id);
                $product_quantity = $product['quantity'];
                $product_sold = $product['quantity_sold'];
                foreach ($data['quantity'] as $j => $product_sell_qty){
                    if ($i == $j){
                        $product_remain = $product_quantity + $product_sell_qty;
                        $product['quantity'] = $product_remain;
                        $product['quantity_sold'] = $product_sold - $product_sell_qty;
                        $product->save();
                    }
                }
            }
        }
        return response()->json(['message' => 'Cập nhật trạng thái đơn hàng thành công!'], 200);
    }

    public function update_order_qty(Request $request){
        $data = $request->all();
        $order_detail = OrderDetail::where('product_id', $data['order_product_id'])->where('order_code',$data['order_code'])->first();
        $order_detail['product_order_quantity'] = $data['product_sell_quantity'];
        $order_detail->save();
        return response()->json(['message' => 'Cập nhật số lượng sản phẩm đơn hàng thành công!'], 200);

    }
    public function print_order($checkout_code){
        $order_details = OrderDetail::where('order_code', '=', $checkout_code)->get();
        $order = Order::where('order_code', '=', $checkout_code)->first();
        $customer = $order->user;
        $shipping = $order->shipping;

        $data = [
            'order_details' => $order_details,
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping
        ];
        $pdf = PDF::loadView('admin.order.orderPDF', $data);
        return $pdf->stream();
    }

    public function search(Request $request){
        $input = $request->input('simple-search');
        if ($input != ""){
            $query = "";
            for ($i=0; $i<strlen($input); $i++){
                $query = $query.'%'.$input[$i];
            }

            $orders = Order::where('order_code', 'like', $query . '%')
                ->with(['user', 'shipping'])
                ->get();
            $results = $orders->map(function($order) {
                return [
                    'order_id' => $order->id,
                    'order_code' => $order->order_code,
                    'user_name' => $order->user->name,
                    'shipping_name' => $order->shipping->shipping_name,
                    'order_status' => $order->order_status,
                    'order_payment_method' => $order->order_payment_method,
                    'coupon_value' => $order->order_code_value,
                    'total_price' => $order->order_total
                ];
            });
        } else {
            $orders = Order::orderBy('id', 'desc')
                ->with(['user', 'shipping'])
                ->paginate(10);
            $results = $orders->map(function($order) {
                return [
                    'order_id' => $order->id,
                    'order_code' => $order->order_code,
                    'user_name' => $order->user->name,
                    'shipping_name' => $order->shipping->shipping_name,
                    'order_status' => $order->order_status,
                    'order_payment_method' => $order->order_payment_method,
                    'coupon_value' => $order->order_code_value,
                    'total_price' => $order->order_total
                ];
            });
        }
        return response()->json($results, 200);
    }
}
