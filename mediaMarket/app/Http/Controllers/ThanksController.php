<?php

namespace App\Http\Controllers;

use App\Models\MomoPayment;
use App\Models\VnpayPayment;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index(){
        if (isset($_GET['partnerCode'])){
            $data_momo = new MomoPayment();
            $data_momo['partnerCode'] = $_GET['partnerCode'];
            $data_momo['orderId'] = $_GET['orderId'];
            $data_momo['requestId'] = $_GET['requestId'];
            $data_momo['amount'] = $_GET['amount'];
            $data_momo['orderInfo'] = $_GET['orderInfo'];
            $data_momo['orderType'] = $_GET['orderType'];
            $data_momo['transId'] = $_GET['transId'];
            $data_momo['payType'] = $_GET['payType'];
            $data_momo['signature'] = $_GET['signature'];
            $data_momo->save();
        }
        if (isset($_GET['vnp_Amount'])){
            $data_vnp = new VnpayPayment();
            $data_vnp['vnp_TxnRef'] = $_GET['vnp_TxnRef'];
            $data_vnp['vnp_Amount'] = $_GET['vnp_Amount'];
            $data_vnp['vnp_BankCode'] = $_GET['vnp_BankCode'];
            $data_vnp['vnp_BankTranNo'] = $_GET['vnp_BankTranNo'];
            $data_vnp['vnp_CardType'] = $_GET['vnp_CardType'];
            $data_vnp['vnp_OrderInfo'] = $_GET['vnp_OrderInfo'];
            $data_vnp['vnp_PayDate'] = $_GET['vnp_PayDate'];
            $data_vnp['vnp_ResponseCode'] = $_GET['vnp_ResponseCode'];
            $data_vnp['vnp_TmnCode'] = $_GET['vnp_TmnCode'];
            $data_vnp['vnp_TransactionNo'] = $_GET['vnp_TransactionNo'];
            $data_vnp['vnp_TransactionStatus'] = $_GET['vnp_TransactionStatus'];
            $data_vnp['vnp_SecureHash'] = $_GET['vnp_SecureHash'];
            $data_vnp->save();
        }
        return view('pages.user.thanks');
    }
}
