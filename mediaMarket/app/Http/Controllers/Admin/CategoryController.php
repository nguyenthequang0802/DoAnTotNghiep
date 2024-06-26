<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    private function getCategories($model_type){
        return Category::where('model_type','=', $model_type)->where('parent_id', '=', null)->with('subCategory')->get();
    }
    private function fillData($item, $input, $model_type){
        $item['parent_id'] = isset($input['parent_cate']) && is_numeric($input['parent_cate']) ? (int) $input['parent_cate'] : null;
        $item['name'] = $input['name'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['icon_path'] = $input['icon'] ?? "";
        $item['model_type'] = $model_type;
        $item['description'] = $input['description'];
        $item['status'] = $input['status'];
        $item->save();
    }
    public function index($model_type) {
        $categories = Category::orderBy('id', 'desc')->where('model_type','=', $model_type)->where('parent_id', '=', null)->with('subCategory')->paginate(15);
        return view('admin.category.index', [
            'categories'=>$categories,
            'model_type'=>$model_type]);
    }
    public function create($model_type){
        return view('admin.category.create', ['categories' => $this->getCategories($model_type), 'model_type' => $model_type]);
    }
    public function store(Request $request, $model_type){
        $input = $request->all();
        $category = new Category();
        $this->fillData($category, $input, $model_type);
        return redirect()->route('admin.category.index', $model_type)->with('ok', 'Thêm mới thành công!');
    }
    public function edit($model_type, $id){
        $item = Category::find($id);
        if (!$item) return redirect()->back();
        return view('admin.category.edit',[
            'item' => $item,
            'categories' => $this->getCategories($model_type),
            'model_type' => $model_type,
        ]);
    }
    public function update($model_type, $id, Request $request)
    {
        $item = Category::find($id);
        if (!$item) return redirect()->back();

        $input = $request->all();
        $this->fillData($item, $input, $model_type);

        return redirect()->route("admin.category.index", $model_type)->with('ok', 'Cập nhật thành công!');
    }
    public function deleteChild($id){
        $item = Category::find($id);
        if ($item){
            if ($item->subCategory){
                foreach ($item->subCategory as $child){
                    $this->deleteChild($child->id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($model_type, $id){
        try {
            $this->deleteChild($id);
            return redirect()->route("admin.category.index", $model_type)->with('ok', 'Xóa thành công!');
        } catch (\Exception $e) {
            return redirect()->route("admin.category.index", $model_type)->with('error', 'Xóa thất bại!');
        }
    }

    public function search(Request $request, $model_type){
        $input = $request->input('simple-search');
        if ($input != ""){
            $query = "";
            $query = '%' . str_replace(' ', '%', $input) . '%';
            $results = Category::where('name', 'like', $query. '%')->where('model_type','=', $model_type)->get();
        } else {
            $results = [];
        }
        return response()->json($results, 200);
    }
}
