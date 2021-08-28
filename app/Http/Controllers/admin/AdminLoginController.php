<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    function showLoginForm(){
        return view('admin.auth.login');
    }
    function login(Request $request){
        if (Auth::guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            //'is_active' => 1
        ])) {
            return redirect()->route('admin.home');
        }
        /*if (Auth::guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_active' => 0
        ])) {
            return redirect()->back()->with('error','Bạn không có quyền truy cập');
        }
        */
        else{
            return redirect()->back()->with('error','Sai email hoặc mật khẩu');
        }
    }
    function logout()
    {
        // return view('admin.auth.log');
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
