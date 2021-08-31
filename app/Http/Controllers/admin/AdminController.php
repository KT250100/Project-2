<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin2;
use Illuminate\Http\Request;
use App\Models\Nganh;
use App\Models\Khoa;
use App\Models\Mon;
use App\Models\Lop;
use App\Models\SinhVien;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Admin
    function __construct(){
        $this->middleware('auth.admin');
    }
    function index(){
        return view('admin.index');
    }
    function edit(){
        return view('admin.edit');
    }
    function update(Request $req,$id){
        $pass = $req->input('password');
        $repass = $req->input('repass');
        $password = Hash::make($pass);
        $rs = Admin2::update($id,$password);
        if($rs == true && $pass == $repass){
            return redirect("admin/");
        }
        else{
            return redirect()->back()->with('error','Mật khẩu không trùng khớp');
        }
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
    function createmon(){
        $nganhs = Nganh::getAll();
        return view('admin.mon.themmon',['nganhs'=>$nganhs]);
    }
    function storemon(Request $req){
        $name = $req->input('name');
        $id_nganh = $req->input('id_nganh');
        $rs = Mon::save($name,$id_nganh);
        if($rs == true){
            return redirect("admin/mon/mon");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editmon($id){
        $mon = Mon::get($id)[0];
        $nganhs = Nganh::getAll();
        return view('admin.mon.editmon',['mon'=>$mon,'nganhs'=>$nganhs]);
    }
    function updatemon(Request $req,$id){
        $name = $req->input('name');
        $id_nganh = $req->input('id_nganh');
        $rs = Mon::update($id,$name,$id_nganh);
        if($rs == true){
            return redirect("admin/mon/mon");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroymon($id){
        $rs = Mon::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/mon/mon");
        }
    }

    // Lớp học
    function lop(){
        $lops = Lop::getAll();
        return view('admin.lop.lop',['lops'=>$lops]);
    }
    function createlop(){
        $nganhs = Nganh::getAll();
        $khoas = Khoa::getAll();
        return view('admin.lop.themlop',['nganhs'=>$nganhs],['khoas'=>$khoas]);
    }
    function storelop(Request $req){
        $name = $req->input('name');
        $id_nganh = $req->input('id_nganh');
        $id_khoa = $req->input('id_khoa');
        $rs = Lop::save($name,$id_nganh,$id_khoa);
        if($rs == true){
            return redirect("admin/lop/lop");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editlop($id){
        $lop = Lop::get($id)[0];
        $nganhs = Nganh::getAll();
        $khoas = Khoa::getAll();
        return view('admin.lop.editlop',['lop'=>$lop,'nganhs'=>$nganhs,'khoas'=>$khoas]);
    }
    function updatelop(Request $req,$id){
        $name = $req->input('name');
        $id_nganh = $req->input('id_nganh');
        $id_khoa = $req->input('id_khoa');
        $rs = Lop::update($id,$name,$id_nganh,$id_khoa);
        if($rs == true){
            return redirect("admin/lop/lop");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroylop($id){
        $rs = Lop::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/lop/lop");
        }
    }

    // Sinh viên
    function sinhvien(){
        $sinhviens = SinhVien::getAll();
        return view('admin.sinhvien.sinhvien',['sinhviens'=>$sinhviens]);
    }
    function createsv(){
        $lops = Lop::getAll();
        return view('admin.sinhvien.themsv',['lops'=>$lops]);
    }
    function storesv(Request $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $address = $req->input('address');
        $birthday = $req->input('birthday');
        $id_lophoc = $req->input('id_lophoc');
        $rs = SinhVien::save($name,$phone,$email,$address,$birthday,$id_lophoc);
        if($rs == true){
            return redirect("admin/sinhvien/sinhvien");
        }
        else{
            return "Thêm thất bại";
        }
    }
    function editsv($id){
        $sinhvien = SinhVien::get($id)[0];
        $lops = Lop::getAll();
        return view('admin.sinhvien.editsv',['sinhvien'=>$sinhvien,'lops'=>$lops]);
    }
    function updatesv(Request $req,$id){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $address = $req->input('address');
        $birthday = $req->input('birthday');
        $id_lophoc = $req->input('id_lophoc');
        $rs = SinhVien::update($id,$name,$phone,$email,$address,$birthday,$id_lophoc);
        if($rs == true){
            return redirect("admin/sinhvien/sinhvien");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroysv($id){
        $rs = SinhVien::delete($id);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/sinhvien/sinhvien");
        }
    }
}
