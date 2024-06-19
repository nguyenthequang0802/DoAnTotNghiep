<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable =[
        'order_code',
        'user_id',
        'shipping_id',
        'order_total',
        'order_code_coupon',
        'order_code_value',
        'order_status',
        'order_payment_method',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public function shipping(){
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }
    public function oderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_code');
    }
}
