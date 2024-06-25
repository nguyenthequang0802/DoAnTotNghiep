<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//    public function show_product_hot(){
//        $sale_products = Product::where('promotion', '<>', 0)->where('quantity', '>', '0')->take(5)->get();
//        return view('pages.user.index', ['sale_products' => $sale_products]);
//    }
    public function show_product_store($category_slug, Request $request){
        $category = Category::where('slug', '=', $category_slug)->first();

        if ($category){
            $descedantCategoryIds = $category->allChildren();
            $descedantCategoryIds->push($category->id);
            $products = Product::query()->whereIn('category_id', $descedantCategoryIds);
        }
        $brands = $products->with('brand')->get()->pluck('brand')->unique('id');

        if($request->has('name')) $products->orderBy('name', $request->name);
        if ($request->has('price')) $products->orderBy('price', $request->price);
        $brand = Brand::where('slug', '=', $request->brand)->first();
        if ($request->has('brand')) $products->where('brand_id', $brand->id);

        return view('pages.user.store', [
            'category' => $category,
            'products' => $products->paginate(12),
            'brands' => $brands,
            'query' => $request->query(),
        ]);
    }
    public function show_product_detail($product_slug){
        $product = Product::where('slug', $product_slug)->first();
        //Sản phẩm cùng danh mục khác màu
        $list_colors = Product::where('category_id', $product->category_id)->get();
        //Sản phẩm có cùng danh mục
        $category = Category::find($product->category_id);
        $parentCategory = $category->parentCategory;

        if ($parentCategory){
            $relatedCategoryIds = Category::where('parent_id', $parentCategory->id)->pluck('id');
            $relatedCategoryIds->push($parentCategory->id);
        } else{
            $relatedCategoryIds = [];
        }

        $related_products = Product::whereIn('category_id', $relatedCategoryIds)->where('id', '!=', $product->id)->get();

        return view('pages.user.detailProduct', ['product' => $product, 'list_colors' => $list_colors, 'related_products'=>$related_products]);
    }
}
