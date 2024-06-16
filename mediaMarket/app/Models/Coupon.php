<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    protected $fillable = [
        'name',
        'code',
        'description',
        'value',
        'start_date',
        'end_date',
        'limit_quantity',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
