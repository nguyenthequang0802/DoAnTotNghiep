<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.customer.index', ['customers' => $customers]);
    }
    public function edit($id){
        $item = User::find($id);
        return view('admin.customer.edit',['item' => $item]);
    }
    public function update(Request $request, $id){
        $input = $request->all();
        $item = User::find($id);
        $item['name'] = $input['name'];
        $item['phone_number'] = $input['phone_number'];
        $item['email'] = $input['email'];
        $item->save();
        return redirect()->route('admin.customer.index')->with('ok', 'Cập nhật thành công!');
    }
    public function destroy($id){
        $item = User::find($id);
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
            $results = User::where('name', 'like', $query. '%')->get();
        } else {
            $results = User::orderBy('id', 'desc')->get();
        }
        return response()->json($results, 200);
    }
}
