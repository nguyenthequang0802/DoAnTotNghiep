<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'model_type',
        'icon_path',
        'description',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public function parentCategory(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function subCategory(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function deleteChildren(){
        foreach ($this->subCategory() as $child){
            $child->deleteChildren();
            $child->delete();
        }
    }
}
