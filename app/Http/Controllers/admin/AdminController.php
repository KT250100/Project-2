<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin2;
use App\Models\DiemDanh;
use Illuminate\Http\Request;
use App\Models\Nganh;
use App\Models\Khoa;
use App\Models\Mon;
use App\Models\Lop;
use App\Models\SinhVien;
use Illuminate\Support\Facades\DB;
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
            return redirect()->back()->with('error','Mật khẩu mới không trùng khớp');
        }
    }

    // Ngành
    function nganh(Request $req){
        //$nganhs = Nganh::getAll();
        $keyword = $req->input('keyword','');
        $nganhs = Nganh::getAllSearch($keyword);
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
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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
    function khoa(Request $req){
        //$khoas = Khoa::getAll();
        $keyword = $req->input('keyword','');
        $khoas = Khoa::getAllSearch($keyword);
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
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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
    function mon(Request $req){
        //$mons = Mon::getAll();
        $keyword = $req->input('keyword','');
        $mons = Mon::getAllSearch($keyword);
        return view('admin.mon.mon',['mons'=>$mons]);
    }
    function createmon(){
        $nganhs = Nganh::getAll();
        return view('admin.mon.themmon',['nganhs'=>$nganhs]);
    }
    function storemon(Request $req){
        $name = $req->input('name');
        $thoiluong = $req->input('thoiluong');
        $id_nganh = $req->input('id_nganh');
        // Check trong ngành đã có môn này chưa
        $check = DB::table('monhocs')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'monhocs.id_nganhhoc')
            ->where([['id_nganhhoc', $id_nganh],['monhocs.name', $name]])
            ->select('monhocs.*')
            ->get();
        // Có rồi thì error
        if($check != null && count($check) > 0){
            return redirect()->back()->with('error','Đã có môn này trong ngành');
        }
        else{
            $rs = Mon::save($name,$thoiluong,$id_nganh);
            if($rs == true){
                return redirect("admin/mon/mon");
            }
            else{
                return "Thêm thất bại";
            }
        }
    }
    function editmon($id){
        $mon = Mon::get($id)[0];
        $nganhs = Nganh::getAll();
        return view('admin.mon.editmon',['mon'=>$mon,'nganhs'=>$nganhs]);
    }
    function updatemon(Request $req,$id){
        $name = $req->input('name');
        $thoiluong = $req->input('thoiluong');
        $id_nganh = $req->input('id_nganh');
        $rs = Mon::update($id,$name,$thoiluong,$id_nganh);
        if($rs == true){
            return redirect("admin/mon/mon");
        }
        else{
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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
    function lop(Request $req){
        //$lops = Lop::getAll();
        $keyword = $req->input('keyword','');
        $lops = Lop::getAllSearch($keyword);
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
        // Check trong khóa đã có lớp này chưa
        $check = DB::table('lophocs')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['id_khoahoc', $id_khoa],['lophocs.name', $name]])
            ->select('lophocs.*')
            ->get();
        // Có rồi thì error
        if($check != null && count($check) > 0){
            return redirect()->back()->with('error','Đã có lớp này trong khóa');
        }
        else{
            $rs = Lop::save($name,$id_nganh,$id_khoa);
            if($rs == true){
                return redirect("admin/lop/lop");
            }
            else{
                return "Thêm thất bại";
            }
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
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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
    function sinhvien(Request $req){
        //$sinhviens = SinhVien::getAll();
        $keyword = $req->input('keyword','');
        $keyword2 = $req->input('keyword2','');
        $sinhviens = SinhVien::getAllSearch($keyword,$keyword2);
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
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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

    // Lịch sử điểm danh
    function view(Request $req){
        $keyword = $req->input('keyword','');
        $keyword2 = $req->input('keyword2','');
        $diemdanhs = DiemDanh::getAllSearch($keyword,$keyword2);
        return view('admin.ddhistory.view',['diemdanhs'=>$diemdanhs]);
    }
    function details($ngaydiemdanh){
        $ngaydd = DB::table('diemdanhs')
            ->select('diemdanhs.*', 'sinhviens.name as name')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->where('diemdanhs.ngaydiemdanh', '=', $ngaydiemdanh)
            ->get();
        return view('admin.ddhistory.details',['ngaydd'=>$ngaydd,'index'=>1]);
    }
}
