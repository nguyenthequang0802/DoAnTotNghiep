<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProductExport;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getProductCategories(){
        return Category::where('model_type','=', 'product')->where('parent_id', '=', null)->with('subCategory')->get();;
    }
    private function getBrand(){
        return Brand::all();
    }
    private function fillData($item, $input, $is_create){
        $price = filter_var($input['price'], FILTER_SANITIZE_NUMBER_INT);
        $item['name'] = $input['name'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['description'] = $input['description'];
        $item['brand_id'] = $input['brand'];
        $item['category_id'] = $input['category'];
        $item['color'] = $input['color'];
        $item['quantity'] = $input['qty'];
        $item['price'] = $price;
        $item['promotion'] = $input['promotion'];
        $item['status'] = $input['status'];
        $item['info_product'] = isset($input['info_product']) ? $input['info_product'] : '';
        if($is_create){
            $item['quantity_sold'] = 0;
        }
        $item->save();
    }
    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.index', ['products'=>$products]);
    }
    public function create(){
        return view('admin.product.create', [
            'brands'=>$this->getBrand(),
            'categories'=>$this->getProductCategories(),
        ]);
    }
    public function store(Request $request){
        $input = $request->all();
//        echo '<pre>';
//        print_r($input);
//        echo '</pre>';
//        exit;
        $item = new Product();
        $this->fillData($item, $input, true);
        return redirect()->route('admin.product.index')->with('ok', 'Thêm mới sản phẩm thành công!');
    }
    public function edit($id){
        $item = Product::find($id);
        return view('admin.product.edit', [
            'brands'=>$this->getBrand(),
            'categories'=>$this->getProductCategories(),
            'item'=>$item
        ]);
    }
    public function update(Request $request,$id){
        $input = $request->all();
        $item = Product::find($id);
        $this->fillData($item, $input, false);
        return redirect()->route('admin.product.index')->with('ok', 'Cập nhật sản phẩm thành công!');
    }
    public function destroy($id){
        $item = Product::find($id);
        try {
            $item->delete();
            return redirect()->route('admin.product.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e){
            return redirect()->route('admin.product.index')->with('error', 'Xóa thất bại!');
        }
    }
    public function search(Request $request){
        $input = $request->input('simple-search');
        if ($input != ""){
            $query = "";
//            for ($i=0; $i<strlen($input); $i++){
//                $query = $query.'%'.$input[$i];
//            }
            $query = '%' . str_replace(' ', '%', $input) . '%';

            $products = Product::where('name', 'like', $query . '%')
                ->with(['images', 'brand'])
                ->get();
            $results = $products->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'preview_image' => $product->images->isNotEmpty() ? $product->images->first()->path_image : null,
                    'brand_name' => $product->brand->name,
                    'color' => $product->color,
                    'quantity' => $product->quantity,
                    'status' => $product->status,
                    'promotion' => $product->promotion,
                    'price' => $product->price
                ];
            });
        } else {
            $products = Product::orderBy('id', 'DESC')
                ->with(['images', 'brand'])
                ->get();
            $results = $products->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'preview_image' => $product->images->isNotEmpty() ? $product->images->first()->path_image : null,
                    'brand_name' => $product->brand->name,
                    'color' => $product->color,
                    'quantity' => $product->quantity,
                    'status' => $product->status,
                    'promotion' => $product->promotion,
                    'price' => $product->price
                ];
            });
        }
        return response()->json($results, 200);
    }
    public function export_csv(Request $request){
        return Excel::download(new ProductExport, 'product.xlsx');
    }
}
