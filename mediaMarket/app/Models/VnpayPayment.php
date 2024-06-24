<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VnpayPayment extends Model
{
    use HasFactory;
    protected $table = 'vnpay_payments';
    protected $fillable = [
        'vnp_TxnRef',
        'vnp_Amount',
        'vnp_BankCode',
        'vnp_BankTranNo',
        'vnp_CardType',
        'vnp_OrderInfo',
        'vnp_PayDate',
        'vnp_ResponseCode',
        'vnp_TmnCode',
        'vnp_TransactionNo',
        'vnp_TransactionStatus',
        'vnp_SecureHash',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
