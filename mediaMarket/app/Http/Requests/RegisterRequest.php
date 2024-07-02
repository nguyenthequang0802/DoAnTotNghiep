<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'register_name' => 'bail|required|max:255',
            'register_phone' => 'bail|required|min:10',
            'register_email' => 'bail|required|email|unique:users,email',
            'register_password' => 'bail|required|min:8|max:16',
            'confirm-password' => 'bail|required|same:register_password',
        ];
    }
    public function messages(){
        return [
            'register_name.required' => 'Tên khách hàng không được để trống.',
            'register_name.max' => 'Tên khách hàng quá độ dài cho phép.',
            'register_phone.required' => 'Số điện thoại không được để trống.',
            'register_phone.min' => 'Số điện thoại không đúng độ dài quy định.',
            'register_email.required' => 'Email không được để trống.',
            'register_email.email' => 'Email không đúng định dạng.',
            'register_email.unique' => 'Email đã tồn tại.',
            'register_password.required' => 'Mật khẩu không được để trống.',
            'register_password.min' => 'Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất 16 ký tự.',
            'register_password.max' => 'Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất 16 ký tự.',
            'confirm-password.required' => 'Xác nhận lại mật khẩu.',
            'confirm-password.same' => 'Không trùng khớp với mật khẩu nhập.',
        ];
    }
}
