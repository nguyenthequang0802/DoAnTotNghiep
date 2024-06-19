<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable =[
        'order_code',
        'product_id',
        'product_name',
        'product_price',
        'product_promotion',
        'product_order_quantity',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public function order(){
        return $this->belongsTo(Order::class, 'order_code');
    }
}
