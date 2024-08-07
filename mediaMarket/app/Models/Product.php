<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'info_product',
        'color',
        'price',
        'quantity',
        'status',
        'description',
        'promotion',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public function category(){
        return $this->belongsTo( Category::class, 'category_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function images(){
        return $this->hasMany(ProductImage::class,'product_id');
    }
    public function posts(){
        return $this->hasMany(Post::class, 'product_id');
    }
    public function order_detail(){
        return $this->hasOne(OrderDetail::class, 'product_id');
    }
}

