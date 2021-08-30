<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiaoVien2;
use Illuminate\Support\Facades\Hash;

class GiaoVienController extends Controller
{
    function giaovien(){
        $giaoviens = GiaoVien2::getAll();
        return view('admin.giaovien.giaovien',['giaoviens'=>$giaoviens]);
    }
    function creategv(){
        return view('admin.giaovien.themgv');
    }
    function storegv(Request $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $pass = $req->input('password');
        $password = Hash::make($pass);
        $address = $req->input('address');
        $birthday = $req->input('birthday');
        $is_active = ('1');
        $rs = GiaoVien2::save($name,$phone,$email,$password,$address,$birthday,$is_active);
        if($rs == true){
            return redirect("admin/giaovien/giaovien");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editgv($id){
        $giaovien = GiaoVien2::get($id)[0];
        return view('admin.giaovien.editgv',['giaovien'=>$giaovien]);
    }
    function updategv(Request $req,$id){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $pass = $req->input('password');
        $password = Hash::make($pass);
        $address = $req->input('address');
        $birthday = $req->input('birthday');
        $is_active = $req->input('is_active');
        $rs = GiaoVien2::update($id,$name,$phone,$email,$password,$address,$birthday,$is_active);
        if($rs == true){
            return redirect("admin/giaovien/giaovien");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroygv($id){
        $rs = GiaoVien2::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/giaovien/giaovien");
        }
    }
}
