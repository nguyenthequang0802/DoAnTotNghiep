<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $coupons = Coupon::orderBy('id', 'desc')->paginate(10);
        return view('admin.coupon.index', ['coupons' => $coupons]);
    }
    public function create(){
        return view('admin.coupon.create');
    }
    public function store(Request $request){
        $input = $request->all();
        $coupon = new Coupon();
        $coupon['name'] = $input['name'];
        $coupon['description'] = $input['description'];
        $coupon['code'] = $input['code'];
        $coupon['value'] = filter_var($input['value'], FILTER_SANITIZE_NUMBER_INT);
        $coupon['limit_quantity'] = $input['limit_quantity'];
//        $coupon['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start'])->format('Y-m-d');
        $coupon['start_date'] = $input['start'];
//        $coupon['end_date'] = Carbon::createFromFormat('d/m/Y', $input['end'])->format('Y-m-d');
        $coupon['end_date'] = $input['end'];
        $coupon->save();
        return redirect()->route('admin.coupon.index')->with('ok', 'Thêm thành công phiếu mua hàng!');
    }
    public function edit($id){
        $item = Coupon::find($id);
        return view('admin.coupon.edit', ['item' => $item]);
    }
    public function update(Request $request, $id){
        $input = $request->all();
        $coupon = Coupon::find($id);
        $coupon['name'] = $input['name'];
        $coupon['description'] = $input['description'];
        $coupon['code'] = $input['code'];
        $coupon['value'] = filter_var($input['value'], FILTER_SANITIZE_NUMBER_INT);
        $coupon['limit_quantity'] = $input['limit_quantity'];
//        $coupon['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start'])->format('Y-m-d');
        $coupon['start_date'] = $input['start'];
//        $coupon['end_date'] = Carbon::createFromFormat('d/m/Y', $input['end'])->format('Y-m-d');
        $coupon['end_date'] = $input['end'];
        $coupon->save();
        return redirect()->route('admin.coupon.index')->with('ok', 'Cập nhật thành công phiếu mua hàng!');
    }
    public function destroy($id) {
        $item = Coupon::find($id);
        try {
            $item->delete();
            return redirect()->route('admin.coupon.index')->with('ok', 'Xóa thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.coupon.index')->with('error', 'Xóa thất bại!');
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
            $results = Coupon::where('name', 'like', $query. '%')->get();
        } else {
            $results = Coupon::orderBy('id', 'desc')->get();
        }
        return response()->json($results, 200);
    }
}
