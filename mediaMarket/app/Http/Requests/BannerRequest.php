<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'path' => 'bail|required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên banner không được để trống.',
            'name.max' => 'Tên banner quá độ dài cho phép.',
            'description.required' => 'Mô tả không được để trống.',
            'description.max' => 'Mô tả quá độ dài cho phép.',
            'path.required' => 'Đường dẫn file không được để trống.',
//            'path.mimes' => 'Đường dẫn file phải đúng định dạng file ảnh.',
        ];
    }
}
