<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Debug thông tin username và password trước khi đăng nhập
        Log::info('Login Attempt: ', $credentials);

        // Lấy người dùng từ database dựa trên username
        $user = \App\Models\User::where('username', $credentials['username'])->first();

        if ($user) {
            Log::info('User Found: ', ['username' => $user->username]);

            // Kiểm tra xem mật khẩu có đúng với mật khẩu hash trong database không
            if (Hash::check($credentials['password'], $user->password)) {
                Log::info('Password Matches');

                if (Auth::attempt($credentials)) {
                    if (Auth::user()->role === 'admin') {
                        return redirect()->intended('admin');
                    } else {
                        Auth::logout();
                        return back()->withErrors([
                            'role' => 'You do not have access to the admin area.',
                        ]);
                    }
                }
            } else {
                Log::error('Password does not match.');
                return back()->withErrors([
                    'password' => 'The provided password does not match our records.',
                ]);
            }
        } else {
            Log::error('User not found.');
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}