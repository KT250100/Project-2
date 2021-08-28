<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nganh;
use App\Models\Khoa;
use App\Models\Mon;

class AdminController extends Controller
{
    function __construct(){
        $this->middleware('auth.admin');
    }
    function index(){
        return view('admin.index');
    }

    // Đăng ký
    function register(){
        return view('admin.register');
    }

    // Ngành
    function nganh(){
        $nganhs = Nganh::getAll();
        return view('admin.nganh.nganh',['nganhs'=>$nganhs]);
    }
    function createnganh(){
        return view('admin.nganh.themnganh');
    }
    function storenganh(Request $req){
        $name = $req->input('name');
        $rs = Nganh::save($name);
        if($rs == true){
            return redirect("admin/nganh/nganh");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editnganh($id){
        $nganh = Nganh::get($id)[0];
        return view('admin.nganh.editnganh',['nganh'=>$nganh]);
    }
    function updatenganh(Request $req,$id){
        $name = $req->input('name');
        $rs = Nganh::update($id,$name);
        if($rs == true){
            return redirect("admin/nganh/nganh");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroynganh($id){
        $rs = Nganh::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/nganh/nganh");
        }
    }

    // Khóa
    function khoa(){
        $khoas = Khoa::getAll();
        return view('admin.khoa.khoa',['khoas'=>$khoas]);
    }
    function createkhoa(){
        return view('admin.khoa.themkhoa');
    }
    function storekhoa(Request $req){
        $name = $req->input('name');
        $rs = Khoa::save($name);
        if($rs == true){
            return redirect("admin/khoa/khoa");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editkhoa($id){
        $khoa = Khoa::get($id)[0];
        return view('admin.khoa.editkhoa',['khoa'=>$khoa]);
    }
    function updatekhoa(Request $req,$id){
        $name = $req->input('name');
        $rs = Khoa::update($id,$name);
        if($rs == true){
            return redirect("admin/khoa/khoa");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroykhoa($id){
        $rs = Khoa::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/khoa/khoa");
        }
    }

    // Môn học
    function mon(){
        $mons = Mon::getAll();
        return view('admin.mon.mon',['mons'=>$mons]);
    }
}
