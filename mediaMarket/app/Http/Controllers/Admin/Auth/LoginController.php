<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected string $redirectTo = RouteServiceProvider::ADMIN_HOME;

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

//        if (Auth::guard('admin')->attempt($credentials)) {
//            return redirect()->intended('/admin');
//        }
//
//        return back()->withInput($request->only('email', 'remember'));
        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin || $admin->email !== $credentials['email']) {
            return back()->withErrors([
                'email' => 'Tài khoản không tồn tại.',
            ])->withInput($request->only('email', 'remember'));
        }
        if (Hash::check($credentials['password'], $admin->password)) {
            // Đăng nhập người dùng
            Auth::guard('admin')->login($admin);

            return redirect()->intended('/admin');
        }

        // Nếu mật khẩu không đúng, trả về với lỗi
        return back()->withErrors([
            'password' => 'Mật khẩu không đúng, vui lòng kiểm tra lại mật khẩu.',
        ])->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.form');
    }
}
