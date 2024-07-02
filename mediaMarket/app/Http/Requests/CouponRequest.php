<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:255',
            'description' => 'bail|required|max:255',
            'code' => 'bail|required|min:5|max:30',
            'value' => 'bail|required',
            'limit_quantity' => 'bail|required|numeric',
            'start' => 'bail|required|date',
            'end' => 'bail|required|date',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên phiếu mua hàng không được để trống.',
            'name.max' => 'Tên phiếu mua hàng quá độ dài cho phép.',
            'description.required' => 'Mô tả không được để trống.',
            'description.max' => 'Mô tả quá độ dài cho phép.',
            'code.required' => 'Mã code không được để trống.',
            'code.max' => 'Mã code quá độ dài cho phép.',
            'code.min' => 'Mã code phải trên 5 ký tự.',
            'limit_quantity.required' => 'Số lượng mã giới hạn không được để trống.',
            'limit_quantity.numeric' => 'Số lượng mã phải là thuộc kiểu số.',
            'value.required' => 'Giá trị phiếu mua hàng không được để trống.',
            'start.required' => 'Ngày bắt đầu không được để trống.',
            'start.date' => 'Ngày bắt đầu nhập không đúng định dạng.',
            'end.required' => 'Ngày kết thúc không được để trống.',
            'end.date' => 'Ngày kết thúc nhập không đúng định dạng.',
        ];
    }
}
