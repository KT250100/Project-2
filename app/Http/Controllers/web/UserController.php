<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        //  Lấy dữ liệu từ model -> mới trả về view
        return view('web.home');
    }
}
