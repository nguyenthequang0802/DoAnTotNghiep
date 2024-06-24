<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MomoPayment extends Model
{
    use HasFactory;
    protected $table = 'momo_payments';
    protected $fillable = [
        'partnerCode',
        'orderId',
        'requestId',
        'amount',
        'orderInfo',
        'orderType',
        'transId',
        'payType',
        'signature',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
