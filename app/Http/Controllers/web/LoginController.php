<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showLoginForm(){
        return view('web.auth.login');
    }
    function login(Request $request){
        if (Auth::guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_active' => 1
        ])) {
            return redirect()->route('home');
        }
        if (Auth::guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_active' => 0
        ])) {
            return redirect()->back()->with('error','Bạn không có quyền truy cập');
        }
        else{
            return redirect()->back()->with('error','Sai email hoặc mật khẩu');
        }
    }

    function logout()
    {
        // return view('admin.auth.log');
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
