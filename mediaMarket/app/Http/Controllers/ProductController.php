<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product_hot(){
        $sale_products = Product::where('promotion', '<>', 0)->where('quantity', '>', '0')->take(5)->get();
        return view('pages.user.index', ['sale_products' => $sale_products]);
    }
    public function show_product_store($category_id){
//        $products = Product::where('category_id', $category_id)->where('quantity', '>', '0')->get();
        $category = Category::where('id', $category_id)->first();
//        echo $category;
        if ($category){
            $descedantCategoryIds = $category->allChildren();
            $descedantCategoryIds->push($category->id);
            $products = Product::whereIn('category_id', $descedantCategoryIds)->get();
        }
        return view('pages.user.store', ['products' => $products]);
    }
    public function show_product_detail($product_id){
        $product = Product::find($product_id);
        //Sản phẩm cùng danh mục khác màu
        $list_colors = Product::where('category_id', $product->category_id)->get();
        //Sản phẩm có cùng danh mục
        $category_product = Category::find($product->category_id);
        $pro_category = $category_product->parentCategory;
        $descedantCategoryIds = $pro_category->allChildren();
        $descedantCategoryIds->push($pro_category->id);
        $related_products = Product::whereIn('category_id', $descedantCategoryIds)->get();

        return view('pages.user.detailProduct', ['product' => $product, 'list_colors' => $list_colors, 'related_products'=>$related_products]);
    }
}
