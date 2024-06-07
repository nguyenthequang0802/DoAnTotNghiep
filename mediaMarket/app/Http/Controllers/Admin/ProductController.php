<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    private function fillData($item, $input){
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
        $item->save();
    }
    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate(20);
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
        $item = new Product();
        $this->fillData($item, $input);
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
        $this->fillData($item, $input);
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
}
