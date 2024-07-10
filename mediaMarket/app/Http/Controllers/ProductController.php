<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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
        $banners = Banner::orderBy('id', 'desc')->where('status', '=', 1)->get();


        if ($category){
            $descedantCategoryIds = $category->allChildren();
            $descedantCategoryIds->push($category->id);
            $products = Product::query()->whereIn('category_id', $descedantCategoryIds);
        }
        $brands = $products->with('brand')->get()->pluck('brand')->unique('id');
        $maxPrice = ceil($products->max('price') /1000000) * 1000000;
        $minPrice = floor($products->min('price') /1000000) * 1000000;

        if ($request->has('min_price') && $request->has('max_price')){
            $products->whereBetween('price', [(int)$request->min_price, (int)$request->max_price]);
        }
        if($request->has('name')) $products->orderBy('name', $request->name);
        if ($request->has('price')) $products->orderBy('price', $request->price);
        $brand = Brand::where('slug', '=', $request->brand)->first();
        if ($request->has('brand')) $products->where('brand_id', $brand->id);

        return view('pages.user.store', [
            'category' => $category,
            'banners' => $banners,
            'products' => $products->paginate(12),
            'brands' => $brands,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,
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

        $related_products = Product::whereIn('category_id', $relatedCategoryIds)->where('id', '!=', $product->id)->take(5)->get();

        return view('pages.user.detailProduct', ['product' => $product, 'list_colors' => $list_colors, 'related_products'=>$related_products]);
    }
    public function search_product(Request $request){
        $input_search = $request->input('search-header');

        if ($input_search != ""){
            $query = "";
//            for ($i=0; $i<strlen($input_search); $i++){
//                $query = $query.'%'.$input_search[$i];
//            }
            $query = '%' . str_replace(' ', '%', $input_search) . '%';

            $results = Product::where('name', 'like', $query.'%')->with('images')->get();
            $results->transform(function($product) {
                $firstImage = $product->images->first(); // Get the first image
                $product->first_image_path = $firstImage ? $firstImage->path_image : null; // Add only the path_image
                unset($product->images); // Optionally remove the images collection if you don't need it
                return $product;
            });
        }

        return response()->json($results, 200);
    }
}
