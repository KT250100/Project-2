<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function __construct(){
        $this->middleware('auth.web');
    }
    function index(){
        return view('web.home');
    }
}
