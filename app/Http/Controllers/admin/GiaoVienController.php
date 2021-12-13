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
    function giaovien(Request $req){
        //$giaoviens = GiaoVien2::getAll();
        $keyword = $req->input('keyword','');
        $giaoviens = GiaoVien2::getAllSearch($keyword);
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
    function phancong(Request $req){
        //$phancongs = PhanCong::getAll();
        $keyword = $req->input('keyword','');
        $phancongs = PhanCong::getAllSearch($keyword);
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
        $starttime = $req->input('starttime');
        $endtime = $req->input('endtime');
        $enddate = $req->input('enddate');
        $t2 = $req->input('t2');
        $t3 = $req->input('t3');
        $t4 = $req->input('t4');
        $t5 = $req->input('t5');
        $t6 = $req->input('t6');
        $t7 = $req->input('t7');
        $cn = $req->input('cn');
        if(!empty($t2)){
            $t2 = '2';
        }else{
            $t2 = '';
        }
        if(!empty($t3) && empty($t2)){
            $t3 = '3';
        }
        elseif(!empty($t3) && !empty($t2)){
            $t3 = ', 3';
        }
        else{
            $t3 = '';
        }
        if(!empty($t4) && empty($t2) && empty($t3)){
            $t4 = '4';
        }
        elseif(!empty($t4) && [!empty($t2) || !empty($t3)]){
            $t4 = ', 4';
        }
        else{
            $t4 = '';
        }
        if(!empty($t5) && empty($t2) && empty($t3) && empty($t4)){
            $t5 = '5';
        }
        elseif(!empty($t5) && [!empty($t2) || !empty($t3) || !empty($t4)]){
            $t5 = ', 5';
        }
        else{
            $t5 = '';
        }
        if(!empty($t6) && empty($t2) && empty($t3) && empty($t4) && empty($t5)){
            $t6 = '6';
        }
        elseif(!empty($t6) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5)]){
            $t6 = ', 6';
        }
        else{
            $t6 = '';
        }
        if(!empty($t7) && empty($t2) && empty($t3) && empty($t4) && empty($t5) && empty($t6)){
            $t7 = '7';
        }
        elseif(!empty($t7) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5) || !empty($t6)]){
            $t7 = ', 7';
        }
        else{
            $t7 = '';
        }
        if(!empty($cn) && empty($t2) && empty($t3) && empty($t4) && empty($t5) && empty($t6) && empty($t7)){
            $cn = 'CN';
        }
        elseif(!empty($cn) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5) || !empty($t6) || !empty($t7)]){
            $cn = ', CN';
        }
        else{
            $cn = '';
        }
        $ca_day = $t2.$t3.$t4.$t5.$t6.$t7.$cn;
        // Check giảng viên đã dạy lớp nào chưa
        $edit = DB::table('phancongs')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->where('id_giaovien', $id_giaovien)
            ->select('phancongs.*')
            ->get();
        // Có rồi thì update
        if($edit != null && count($edit) > 0){
            DB::table('phancongs')
                ->where('id_giaovien', $id_giaovien)
                ->update(['id_lophoc'=>$id_lop,'id_monhoc'=>$id_mon,'ca_day'=>$ca_day,'starttime'=>$starttime,'endtime'=>$endtime,'enddate'=>$enddate]);
            return redirect("admin/giaovien/phancong");
        }
        // Check lớp + môn đã có giảng viên nào dạy chưa
        $edit2 = DB::table('phancongs')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->where('id_lophoc', $id_lop)
            ->where('id_monhoc', $id_mon)
            ->select('phancongs.*')
            ->get();
        // Có rồi thì thay giảng viên luôn :))
        if($edit2 != null && count($edit2) > 0){
            DB::table('phancongs')
                ->where('id_lophoc', $id_lop)
                ->where('id_monhoc', $id_mon)
                ->update(['id_giaovien'=>$id_giaovien,'ca_day'=>$ca_day,'starttime'=>$starttime,'endtime'=>$endtime,'enddate'=>$enddate]);
            return redirect("admin/giaovien/phancong");
        }
        // Thêm bản ghi mới
        $rs = PhanCong::save($id_giaovien,$id_lop,$id_mon,$ca_day,$starttime,$endtime,$enddate);
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
        $check2 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%2%')
            ->get();
        if($check2 != null && count($check2) > 0 ){
            $t2 = true;
        }
        else{
            $t2 = false;
        }
        $check3 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%3%')
            ->get();
        if($check3 != null && count($check3) > 0 ){
            $t3 = true;
        }
        else{
            $t3 = false;
        }
        $check4 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%4%')
            ->get();
        if($check4 != null && count($check4) > 0 ){
            $t4 = true;
        }
        else{
            $t4 = false;
        }
        $check5 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%5%')
            ->get();
        if($check5 != null && count($check5) > 0 ){
            $t5 = true;
        }
        else{
            $t5 = false;
        }
        $check6 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%6%')
            ->get();
        if($check6 != null && count($check6) > 0 ){
            $t6 = true;
        }
        else{
            $t6 = false;
        }
        $check7 = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%7%')
            ->get();
        if($check7 != null && count($check7) > 0 ){
            $t7 = true;
        }
        else{
            $t7 = false;
        }
        $checkcn = DB::table('phancongs')
            ->select('phancongs.*')
            ->where('id_giaovien', $id_giaovien)
            ->where('ca_day', 'LIKE', '%cn%')
            ->get();
        if($checkcn != null && count($checkcn) > 0 ){
            $cn = true;
        }
        else{
            $cn = false;
        }
        return view('admin.giaovien.editpc',['phancong'=>$phancong,
        'giaoviens'=>$giaoviens,'lops'=>$lops,'mons'=>$mons,'t2'=>$t2,
        't3'=>$t3,'t4'=>$t4,'t5'=>$t5,'t6'=>$t6,'t7'=>$t7,'cn'=>$cn]);
    }
    function updatepc(Request $req,$id_giaovien){
        $id_lophoc = $req->input('id_lophoc');
        $id_monhoc = $req->input('id_monhoc');
        $starttime = $req->input('starttime');
        $endtime = $req->input('endtime');
        $enddate = $req->input('enddate');
        $t2 = $req->input('t2');
        $t3 = $req->input('t3');
        $t4 = $req->input('t4');
        $t5 = $req->input('t5');
        $t6 = $req->input('t6');
        $t7 = $req->input('t7');
        $cn = $req->input('cn');
        if(!empty($t2)){
            $t2 = '2';
        }else{
            $t2 = '';
        }
        if(!empty($t3) && empty($t2)){
            $t3 = '3';
        }
        elseif(!empty($t3) && !empty($t2)){
            $t3 = ', 3';
        }
        else{
            $t3 = '';
        }
        if(!empty($t4) && empty($t2) && empty($t3)){
            $t4 = '4';
        }
        elseif(!empty($t4) && [!empty($t2) || !empty($t3)]){
            $t4 = ', 4';
        }
        else{
            $t4 = '';
        }
        if(!empty($t5) && empty($t2) && empty($t3) && empty($t4)){
            $t5 = '5';
        }
        elseif(!empty($t5) && [!empty($t2) || !empty($t3) || !empty($t4)]){
            $t5 = ', 5';
        }
        else{
            $t5 = '';
        }
        if(!empty($t6) && empty($t2) && empty($t3) && empty($t4) && empty($t5)){
            $t6 = '6';
        }
        elseif(!empty($t6) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5)]){
            $t6 = ', 6';
        }
        else{
            $t6 = '';
        }
        if(!empty($t7) && empty($t2) && empty($t3) && empty($t4) && empty($t5) && empty($t6)){
            $t7 = '7';
        }
        elseif(!empty($t7) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5) || !empty($t6)]){
            $t7 = ', 7';
        }
        else{
            $t7 = '';
        }
        if(!empty($cn) && empty($t2) && empty($t3) && empty($t4) && empty($t5) && empty($t6) && empty($t7)){
            $cn = 'CN';
        }
        elseif(!empty($cn) && [!empty($t2) || !empty($t3) || !empty($t4) || !empty($t5) || !empty($t6) || !empty($t7)]){
            $cn = ', CN';
        }
        else{
            $cn = '';
        }
        $ca_day = $t2.$t3.$t4.$t5.$t6.$t7.$cn;
        $rs = PhanCong::update($id_giaovien,$id_lophoc,$id_monhoc,$ca_day,$starttime,$endtime,$enddate);
        if($rs == true){
            return redirect("admin/giaovien/phancong");
        }
        else{
            return redirect()->back()->with('error','Không có thay đổi nào cả');
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
