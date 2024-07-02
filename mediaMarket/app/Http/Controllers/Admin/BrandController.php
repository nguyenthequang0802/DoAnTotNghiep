<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function fillData($item,$input){
        $item['name'] = $input['name'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['icon_path'] = $input['icon'];
        $item['country'] = $input['country'];
        $item->save();
    }

    public function index(){
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brand.index', ['brands' => $brands]);
    }
    public function create(){
        return view('admin.brand.create');
    }
    public function store(BrandRequest $request){
        $input = $request->all();
        $item = new Brand();
        $this->fillData($item, $input);
        return redirect()->route('admin.brand.index')->with('ok', 'Thêm mới thành công!');
    }

    public function edit($id){
        $item = Brand::find($id);
        return view('admin.brand.edit', ['item' => $item]);
    }
    public function update(BrandRequest $request,$id){
        $input = $request->all();
        $item = Brand::find($id);
        $this->fillData($item, $input);
        return redirect()->route('admin.brand.index')->with('ok', 'Cập nhật thành công!');
    }
    public function destroy($id){
        $item = Brand::find($id);
        try {
            $item->delete();
            return redirect()->route('admin.brand.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.brand.index')->with('error', 'Xóa thất bại!');
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
            $results = Brand::where('name', 'like', $query. '%')->get();
        } else {
            $results = Brand::orderBy('id', 'desc')->get();
        }
        return response()->json($results, 200);
    }
}
