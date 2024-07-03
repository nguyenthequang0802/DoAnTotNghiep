<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    private function getMenus(){
        return Menu::where('parent_id', '=', null)->with('childs')->get();
    }

    private function fillData($item, $input){
        $item['name'] = $input['name'];
        $item['slug'] = $input['slug'] ?? str::slug($input['name']);
        $item['url'] = $input['url'];
        $item['parent_id'] = isset($input['parent_menu']) && is_numeric($input['parent_menu']) ? (int) $input['parent_menu'] : null;
        $item['icon_path'] = $input['icon'];
        $item->save();
    }

    public function index(){
        $menus = $this->getMenus();
        return view('admin.menu.index', ['menus' => $menus]);
    }

    public function create(){
        $menus = $this->getMenus();
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.menu.create', ['menus' => $menus, 'categories'=>$categories, 'brands' => $brands]);
    }
    public function store(Request $request){
        $input = $request->all();
        $item = new Menu();
        $this->fillData($item, $input);
        return redirect()->route('admin.menu.index');
    }
    public function edit($id){
        $menus = $this->getMenus();
        $item = Menu::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.menu.edit', ['menus' => $menus, 'item' => $item, 'categories'=>$categories, 'brands' => $brands]);
    }
    public function update(Request $request,$id){
        $input = $request->all();
        $item = Menu::find($id);
        $this->fillData($item, $input);
        return redirect()->route('admin.menu.index');
    }
    public function deleteChild($id){
        $item = Menu::find($id);
        if ($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChild($child->id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($id){
        try {
            $this->deleteChild($id);
            return  redirect()->route('admin.menu.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e) {
            return  redirect()->route('admin.menu.index')->with('error', 'Đã có lỗi xảy ra!');
        }

    }
}
