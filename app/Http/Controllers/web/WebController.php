<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DiemDanh;
use App\Models\GiaoVien2;
use App\Models\SinhVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    function __construct(){
        $this->middleware('auth.web');
    }
    function index(){
        return view('web.home');
    }
    function edit(){
        return view('web.edit');
    }
    function update(Request $req,$id){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $address = $req->input('address');
        $birthday = $req->input('birthday');
        $rs = GiaoVien2::updateacc($id,$name,$phone,$email,$address,$birthday);
        if($rs == true){
            return redirect("/");
        }
        else{
            return redirect()->back()->with('error','Không có thay đổi nào cả');
        }
    }
    function editpass(){
        return view('web.editpass');
    }
    function updatepass(Request $req,$id){
        $pass = $req->input('password');
        $repass = $req->input('repass');
        $password = Hash::make($pass);
        $rs = GiaoVien2::updatepass($id,$password);
        if($rs == true && $pass == $repass){
            return redirect("/");
        }
        else{
            return redirect()->back()->with('error','Mật khẩu mới không trùng khớp');
        }
    }
    function diemdanh(){
        // Kiểm tra đang dùng tài khoản giáo viên nào -> lọc ra lớp đc phân công
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $day = $mydate->format('N'); // 1 -> thứ 2, 7 -> CN
        if($day == 1){
            $frametime = 2;
        }
        if($day == 2){
            $frametime = 3;
        }
        if($day == 3){
            $frametime = 4;
        }
        if($day == 4){
            $frametime = 5;
        }
        if($day == 5){
            $frametime = 6;
        }
        if($day == 6){
            $frametime = 7;
        }
        else{
            $frametime = 'CN';
        }
        $index = DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','monhocs.name as mon','khoahocs.name as khoa')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('id_giaovien', Auth::user()->id)
            ->where('ca_day', 'LIKE', '%'.$frametime.'%')
            ->get();
        return view('web.diemdanh',['index'=>$index]);
    }
    public function createdd(){
        // Sinh viên trong lớp nào thì chỉ hiện lớp ấy
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $sv = DB::table('sinhviens')
            ->select('sinhviens.id','sinhviens.name')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('phancongs', 'phancongs.id_lophoc', '=', 'lophocs.id')
            ->where('id_giaovien', Auth::user()->id)
            ->get();
        $phancong = DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','monhocs.name as mon','khoahocs.name as khoa','giao_viens.name as gv')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('id_giaovien', Auth::user()->id)
            ->get();
        // Nếu trong ngày đã điểm danh -> điểm danh lại = edit
        $edit = DB::table('diemdanhs')
            ->select('diemdanhs.*', 'sinhviens.name as name', 'sinhviens.id as id')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->where('diemdanhs.ngaydiemdanh', '>=', $currentDate)
            ->where('diemdanhs.id_giaovien', Auth::user()->id)
            ->get();
        return view('web.createdd')->with([
                'index'=>1,
                'phancong'=>$phancong,
                'sv'=>$sv,
                'edit'=>$edit
            ]);
    }
    public function storedd(Request $req){
        $id_monhoc = $req->input('id_monhoc');
        $id_giaovien = Auth::user()->id;
        $id_sinhvien = $req->id_sinhvien;
        $status = $req->input('status');
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $currentTime = $mydate->format('Y-m-d H:i:s');
        $currentDate = $mydate->format('Y-m-d');
        $note = $req->input('note');
        // Check xem hôm nay đã điểm danh chưa
        $edit = DB::table('diemdanhs')
            ->select('diemdanhs.*', 'sinhviens.name as name', 'sinhviens.id as id')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->where('diemdanhs.ngaydiemdanh', '>=', $currentDate)
            ->where('diemdanhs.id_giaovien', Auth::user()->id)
            ->get();
        // Điểm danh rồi thì update
        if($edit != null && count($edit) > 0 ){
            for($i = 0; $i < count($id_sinhvien); $i++){
                $data = [
                    'id_monhoc'    => $id_monhoc,
                    'id_giaovien'  => $id_giaovien,
                    'id_sinhvien'  => $id_sinhvien[$i],
                    'status'       => $status[$i],
                    'ngaydiemdanh' => $currentTime,
                    'note'         => $note[$i]
                ];
                DB::table('diemdanhs')
                    ->where('ngaydiemdanh', '>=', $currentDate)
                    ->where('id_sinhvien', $id_sinhvien[$i])
                    ->update($data);
            }
            return redirect("/diemdanh");
        }
        // Chưa điểm danh thì thêm bản ghi mới
        else{
            for($i = 0; $i < count($id_sinhvien); $i++){
                $data = [
                    'id_monhoc'    => $id_monhoc,
                    'id_giaovien'  => $id_giaovien,
                    'id_sinhvien'  => $id_sinhvien[$i],
                    'status'       => $status[$i],
                    'ngaydiemdanh' => $currentTime,
                    'note'         => $note[$i]
                ];
                DB::table('diemdanhs')
                    ->insert($data);
            }
            return redirect("/diemdanh");
        }
    }
}
