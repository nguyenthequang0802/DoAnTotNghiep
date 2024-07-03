<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    protected $fillable =[
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'shipping_note',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public function order(){
        return $this->hasOne(Order::class, 'shipping_id');
    }
}
