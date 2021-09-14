<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiaoVien2;
use App\Models\Lop;
use App\Models\Mon;
use App\Models\PhanCong;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GiaoVienController extends Controller
{
    // Giảng viên
    function giaovien(){
        //$giaoviens = GiaoVien2::getAll();
        $giaoviens = DB::table('giao_viens')
            ->select('giao_viens.*')
            ->orderByDesc('id')
            ->paginate(8);
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

    // Phân công
    function phancong(){
        //$phancongs = PhanCong::getAll();
        $phancongs = DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','khoahocs.name as khoa','monhocs.name as mon','giao_viens.name as giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->paginate(8);
        return view('admin.giaovien.phancong',['phancongs'=>$phancongs]);
    }
    function createpc(){
        $giaoviens = GiaoVien2::getAll();
        $lops = Lop::getAll();
        $mons = Mon::getAll();
        return view('admin.giaovien.pcgv',['giaoviens'=>$giaoviens,'lops'=>$lops,'mons'=>$mons]);
    }
    function storepc(Request $req){
        $id_giaovien = $req->input('id_giaovien');
        $id_lop = $req->input('id_lop');
        $id_mon = $req->input('id_mon');
        // Check giảng viên đã dạy lớp nào chưa
        $edit = DB::table('phancongs')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->where('id_giaovien', $req->input('id_giaovien'))
            ->select('phancongs.*')
            ->get();
        // Có rồi thì update
        if($edit != null && count($edit) > 0){
            DB::table('phancongs')
                ->where('id_giaovien', $req->input('id_giaovien'))
                ->update([
                'id_lophoc'=>$req->input('id_lop'),
                'id_monhoc'=>$req->input('id_mon')
                ]);
            return redirect("admin/giaovien/phancong");
        }
        // Check lớp + môn đã có giảng viên nào dạy chưa
        $edit2 = DB::table('phancongs')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->where('id_lophoc', $req->input('id_lop'))
            ->where('id_monhoc', $req->input('id_mon'))
            ->select('phancongs.*')
            ->get();
        // Có rồi thì thay giảng viên luôn :))
        if($edit2 != null && count($edit2) > 0){
            DB::table('phancongs')
                ->where('id_lophoc', $req->input('id_lop'))
                ->where('id_monhoc', $req->input('id_mon'))
                ->update([
                'id_giaovien'=>$req->input('id_giaovien')
                ]);
            return redirect("admin/giaovien/phancong");
        }
        // Thêm bản ghi mới
        $rs = PhanCong::save($id_giaovien,$id_lop,$id_mon);
        if($rs == true){
            return redirect("admin/giaovien/phancong");
        }
        else{
            return "Phân công thất bại";
        }
    }
    function editpc($id_giaovien){
        $phancong = PhanCong::get($id_giaovien)[0];
        $giaoviens = GiaoVien2::getAll();
        $lops = Lop::getAll();
        $mons = Mon::getAll();
        return view('admin.giaovien.editpc',['phancong'=>$phancong,'giaoviens'=>$giaoviens,'lops'=>$lops,'mons'=>$mons]);
    }
    function updatepc(Request $req,$id_giaovien){
        $id_lophoc = $req->input('id_lophoc');
        $id_monhoc = $req->input('id_monhoc');
        $rs = PhanCong::update($id_giaovien,$id_lophoc,$id_monhoc);
        if($rs == true){
            return redirect("admin/giaovien/phancong");
        }
        else{
            return "Cập nhật thất bại";
        }
    }
    function destroypc($id_giaovien){
        $rs = PhanCong::delete($id_giaovien);
        if($rs == 0){
            return "Xoá thất bại";
        }
        else{
            return redirect("admin/giaovien/phancong");
        }
    }
}
