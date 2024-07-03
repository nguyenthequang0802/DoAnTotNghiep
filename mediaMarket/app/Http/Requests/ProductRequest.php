<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'brand' => 'bail|required',
            'price' => 'bail|required',
            'category' => 'bail|required',
            'color' => 'bail|required',
            'qty' => 'bail|required|numeric',
            'promotion' => 'bail|required|numeric',
            'info_product' => 'bail|required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'name.max' => 'Tên sản phẩm quá độ dài cho phép.',
            'description.required' => 'Mô tả không được để trống.',
            'price.required' => 'Mô tả không được để trống.',
            'description.max' => 'Mô tả quá độ dài cho phép.',
            'brand.required' => 'Nhãn hiệu sản phẩm không được để trống.',
            'category.required' => 'Danh mục sản phẩm không được để trống.',
            'color.required' => 'Màu sắc sản phẩm không được để trống.',
            'qty.required' => 'Số lượng sản phẩm không được để trống.',
            'qty.numeric' => 'Số lượng sản phẩm nhập vào phải thuộc kiểu số.',
            'promotion.numeric' => 'Khuyến mãi sản phẩm nhập vào phải thuộc kiểu số.',
            'promotion.required' => 'Khuyến mãi sản phẩm không được để trống.',
            'info_product.required' => 'Thông số sản phẩm không được để trống.',
        ];
    }
}
