<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $viewPath = 'admin.auth.';

    public function login(Request $request)
    {
        if (Auth::viaRemember() || Auth::guard('admin')->check())
            return redirect()->route('admin.dashboard');

        if ($request->isMethod('POST')) {
            $this->validateLogin($request);

            if (!isAdminActive($request->email))
                return redirect()->route('admin.login')->with('error', 'User not active');

            $credentials = $request->only(['email','password']);

            $remember = $request->get('remember') === '1' ? true : false;

            if (!Auth::guard('admin')->attempt($credentials, $remember)) 
                return redirect()->route('admin.login')->with('error', 'Credentials not matced in our records!');

            return redirect()->route('admin.dashboard');
        }

        return view( $this->viewPath . 'login' );
    }

    public function forgotPassword()
    {
         return view( $this->viewPath . 'forgot-password' );
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check() && Auth::guard('admin')->logout()) {
            $request->session()->invalidate();
 
            $request->session()->regenerateToken();
        }

        return redirect()->route('admin.login');
    }

    private function validateLogin(Request $request) : void
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                'exists:admins,email'
            ],
            'password' => [
                'required',
                'string'
            ]
        ]); 
    }
}
