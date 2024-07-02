<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'bail|required',
            'description' => 'bail|required',
            'icon' => 'bail|required',
            'content' => 'bail|required',
            'category_id' => 'bail|required',
            'seo_title' => 'bail|required',
            'seo_keywords' => 'bail|required',
            'seo_description' => 'bail|required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Tiêu đề bài viết không được để trống.',
            'description.required' => 'Mô tả bài viết không được để trống.',
            'icon.required' => 'Ảnh preview bài viết không được để trống.',
            'content.required' => 'Nội dung bài viết không được để trống.',
            'category_id.required' => 'Danh mục bài viết không được để trống.',
            'seo_title.required' => 'Dữ liệu nhập không được để trống.',
            'seo_keywords.required' => 'Dữ liệu nhập không được để trống.',
            'seo_description.required' => 'Dữ liệu nhập không được để trống.',
        ];
    }
}
