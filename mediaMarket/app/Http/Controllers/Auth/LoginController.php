<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
    public function showLoginForm()
    {
        return view('pages.user.login-checkout');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login_email' => ['required', 'email'],
            'login_password' => ['required'],
        ]);

//        if (Auth::guard('web')->attempt($credentials)) {
//            return redirect()->intended('/check-out');
//        }
        $user = User::whereRaw('BINARY `email` = ?', [$credentials['login_email']])->first();

        if ($user) {
            if (Hash::check($credentials['login_password'], $user->password)) {
                Auth::login($user);
                return redirect()->intended('/check-out');
            } else {
                return back()->withErrors([
                    'password' => 'Mật khẩu không đúng, mời bạn nhập lại mật khẩu.',
                ])->withInput($request->only('email', 'remember'));
            }
        }
        return back()->withErrors([
            'email' => 'Tài khoản không tồn tại.',
        ])->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
}
