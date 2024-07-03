<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => 'bail|required|max:50',
            'country' => 'bail|required|max:30',
            'icon' => 'bail|required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên nhãn nhãn hiệu không được để trống.',
            'name.max' => 'Tên nhãn hiệu quá độ dài cho phép.',
            'country.required' => 'Mô tả không được để trống.',
            'country.max' => 'Mô tả quá độ dài cho phép.',
            'icon.required' => 'Đường dẫn file không được để trống.',
//            'path.mimes' => 'Đường dẫn file phải đúng định dạng file ảnh.',
        ];
    }
}
