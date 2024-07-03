<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showIndex()
    {
        $sale_products = Product::where('promotion', '<>', 0)->where('quantity', '>', '0')->take(5)->get();

        $category_phone = Category::where('slug', 'dien-thoai')->first();
        if ($category_phone){
            $descedantCategoryIds = $category_phone->allChildren();
            $descedantCategoryIds->push($category_phone->id);
            $phones = Product::orderBy('id', 'desc')->whereIn('category_id', $descedantCategoryIds)->take(5)->get();
        }
        $category_laptop = Category::where('slug', 'laptop')->first();
        if ($category_laptop){
            $descedantCategoryIds = $category_laptop->allChildren();
            $descedantCategoryIds->push($category_laptop->id);
            $laptops = Product::orderBy('id', 'desc')->whereIn('category_id', $descedantCategoryIds)->take(5)->get();
        }

        $posts = Post::orderBy('id', 'desc')->take(4)->get();
        $banners = Banner::orderBy('id', 'desc')->where('status', '=', 1)->get();

        return view('pages.user.index', [
            'sale_products'=> $sale_products,
            'phones' => $phones,
            'laptops' => $laptops,
            'posts' => $posts,
            'banners' => $banners
        ]);
    }
}
