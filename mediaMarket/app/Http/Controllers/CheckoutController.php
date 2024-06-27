<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
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

   public function execPostRequest($url, $data)
   {
       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'Content-Type: application/json',
               'Content-Length: ' . strlen($data))
       );
       curl_setopt($ch, CURLOPT_TIMEOUT, 5);
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
       //execute post
       $result = curl_exec($ch);
       //close connection
       curl_close($ch);
       return $result;
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

       $coupon = Coupon::where('code', '=', $data['order_coupon'])->first();
       $coupon->limit_quantity = $coupon->limit_quantity - 1;
       $coupon->save();

       $checkout_code = substr(md5(microtime()),rand(0,26),6);
       if ($data['paymentMethod'] == 'cod'){
           $order = new Order();
           $order['order_code'] = $checkout_code;
           $order['user_id'] = Auth::user()->id;
           $order['shipping_id'] = $shipping_id;
           $order['order_status'] = 0;
           $order['order_total'] = (int)$data['order_total_price'];
           $order['order_code_coupon'] = $data['order_coupon'];
           $order['order_code_value'] = (int)$data['order_coupon_value'];
           $order['order_payment_method'] = $data['paymentMethod'];
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
       elseif ($data['paymentMethod'] == 'payUrl') {
               $order = new Order();
               $order['order_code'] = $checkout_code;
               $order['user_id'] = Auth::user()->id;
               $order['shipping_id'] = $shipping_id;
               $order['order_status'] = 0;
               $order['order_total'] = (int)$data['order_total_price'];
               $order['order_code_coupon'] = $data['order_coupon'];
               $order['order_code_value'] = (int)$data['order_coupon_value'];
               $order['order_payment_method'] = $data['paymentMethod'];
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

               $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
               $partnerCode = 'MOMOBKUN20180529';
               $accessKey = 'klm05TvNBzhg7h7j';
               $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

               $orderInfo = "Thanh toán qua MoMo";
               $amount = '10000';
               $orderId = $checkout_code;
               $redirectUrl = "http://media.th/cam-on";
               $ipnUrl = "http://media.th/cam-on";
               $extraData = "";

               $partnerCode = $partnerCode;
               $accessKey = $accessKey;
               $serectkey = $secretKey;
               $orderId = $orderId; // Mã đơn hàng
               $orderInfo = $orderInfo;
               $amount = $amount;
               $ipnUrl = $ipnUrl;
               $redirectUrl = $redirectUrl;
               $extraData = $extraData;

               $requestId = time() . "";
               $requestType = "payWithATM"; //thanh toán với ATM
//               $requestType = "captureWallet"; //thanh toán với QRcode
//           $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
               //before sign HMAC SHA256 signature
               $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
               $signature = hash_hmac("sha256", $rawHash, $serectkey);
               $data = array('partnerCode' => $partnerCode,
                   'partnerName' => "Test",
                   "storeId" => "MomoTestStore",
                   'requestId' => $requestId,
                   'amount' => $amount,
                   'orderId' => $orderId,
                   'orderInfo' => $orderInfo,
                   'redirectUrl' => $redirectUrl,
                   'ipnUrl' => $ipnUrl,
                   'lang' => 'vi',
                   'extraData' => $extraData,
                   'requestType' => $requestType,
                   'signature' => $signature);
               $result = $this->execPostRequest($endpoint, json_encode($data));
               $jsonResult = json_decode($result, true);  // decode json

               //Just a example, please check more in there

//           header('Location: ' . $jsonResult['payUrl']);
               return response()->json(['redirect' => $jsonResult['payUrl']]);


       }
       elseif ($data['paymentMethod'] == 'redirect'){
           $order = new Order();
           $order['order_code'] = $checkout_code;
           $order['user_id'] = Auth::user()->id;
           $order['shipping_id'] = $shipping_id;
           $order['order_status'] = 0;
           $order['order_total'] = (int)$data['order_total_price'];
           $order['order_code_coupon'] = $data['order_coupon'];
           $order['order_code_value'] = (int)$data['order_coupon_value'];
           $order['order_payment_method'] = $data['paymentMethod'];
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

           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
           date_default_timezone_set('Asia/Ho_Chi_Minh');

           $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
           $vnp_Returnurl = "http://media.th/cam-on";
           $vnp_TmnCode = "CGXZLS0Z";//Mã website tại VNPAY
           $vnp_HashSecret = "XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN"; //Chuỗi bí mật

           $vnp_TxnRef = $checkout_code; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Noi dung thanh toan';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = '10000' * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            //Add Params of 2.0.1 Version
//            $vnp_ExpireDate = $_POST['txtexpire'];
            //Billing
//            $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
//            $vnp_Bill_Email = $_POST['txt_billing_email'];
//            $fullName = trim($_POST['txt_billing_fullname']);
//            if (isset($fullName) && trim($fullName) != '') {
//                $name = explode(' ', $fullName);
//                $vnp_Bill_FirstName = array_shift($name);
//                $vnp_Bill_LastName = array_pop($name);
//            }
//            $vnp_Bill_Address=$_POST['txt_inv_addr1'];
//            $vnp_Bill_City=$_POST['txt_bill_city'];
//            $vnp_Bill_Country=$_POST['txt_bill_country'];
//            $vnp_Bill_State=$_POST['txt_bill_state'];
//            // Invoice
//            $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
//            $vnp_Inv_Email=$_POST['txt_inv_email'];
//            $vnp_Inv_Customer=$_POST['txt_inv_customer'];
//            $vnp_Inv_Address=$_POST['txt_inv_addr1'];
//            $vnp_Inv_Company=$_POST['txt_inv_company'];
//            $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
//            $vnp_Inv_Type=$_POST['cbo_inv_type'];
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef

//                "vnp_ExpireDate"=>$vnp_ExpireDate,
//                "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
//                "vnp_Bill_Email"=>$vnp_Bill_Email,
//                "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
//                "vnp_Bill_LastName"=>$vnp_Bill_LastName,
//                "vnp_Bill_Address"=>$vnp_Bill_Address,
//                "vnp_Bill_City"=>$vnp_Bill_City,
//                "vnp_Bill_Country"=>$vnp_Bill_Country,
//                "vnp_Inv_Phone"=>$vnp_Inv_Phone,
//                "vnp_Inv_Email"=>$vnp_Inv_Email,
//                "vnp_Inv_Customer"=>$vnp_Inv_Customer,
//                "vnp_Inv_Address"=>$vnp_Inv_Address,
//                "vnp_Inv_Company"=>$vnp_Inv_Company,
//                "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
//                "vnp_Inv_Type"=>$vnp_Inv_Type
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
//            $returnData = array('code' => '00'
//                , 'message' => 'success'
//                , 'data' => $vnp_Url
//            );
//            if (isset($_POST['redirect'])) {
//                header('Location: ' . $vnp_Url);
//                die();
//            } else {
//                echo json_encode($returnData);
//            }
           return response()->json(['redirect' => $vnp_Url]);
       }
   }
}
