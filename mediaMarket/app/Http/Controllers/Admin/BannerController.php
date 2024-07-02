<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    private function fillData($item,$input){
        $item['name'] = $input['name'];
        $item['description'] = $input['description'];
        $item['path'] = $input['path'];
        $item['status'] = $input['status'];
        $item->save();
    }
    public function index(){
        $banners = Banner::orderBy('id', 'desc')->paginate(10);
        return view('admin.banner.index', ['banners' => $banners]);
    }
    public function create(){
        return view('admin.banner.create');
    }
    public function store(BannerRequest $request){
        $input = $request->all();
        $item = new Banner();
        $this->fillData($item, $input);
        return redirect()->route('admin.banner.index')->with('ok', 'Thêm mới thành công!');
    }

    public function edit($id){
        $item = Banner::find($id);
        return view('admin.banner.edit', ['item' => $item]);
    }
    public function update(BannerRequest $request,$id){
        $input = $request->all();
        $item = Banner::find($id);
        $this->fillData($item, $input);
        return redirect()->route('admin.banner.index')->with('ok', 'Cập nhật thành công!');
    }
    public function destroy($id){
        $item = Banner::find($id);
        try {
            $item->delete();
            return redirect()->route('admin.banner.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.banner.index')->with('error', 'Xóa thất bại!');
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
            $results = Banner::where('name', 'like', $query. '%')->get();
        } else {
            $results = Banner::orderBy('id', 'desc')->get();
        }
        return response()->json($results, 200);
    }
}
