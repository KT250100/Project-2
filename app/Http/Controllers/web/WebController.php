<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DiemDanh;
use App\Models\SinhVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    function __construct(){
        $this->middleware('auth.web');
    }
    function index(){
        return view('web.home');
    }
    function diemdanh(){
        // Kiểm tra đang dùng tài khoản giáo viên nào -> lọc ra lớp đc phân công
        $index = DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','monhocs.name as mon','khoahocs.name as khoa')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('id_giaovien', Auth::user()->id)
            ->get();
        return view('web.diemdanh',['index'=>$index]);
    }
    public function createdd(){
        // Sinh viên trong lớp nào thì chỉ hiện lớp ấy
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
        return view('web.createdd')->with([
                'index'=>1,
                'phancong'=>$phancong,
                'sv'=>$sv
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
        $note = $req->input('note');
        for($i = 0; $i < count($id_sinhvien); $i++){
            $data = [
                'id_monhoc'    => $id_monhoc,
                'id_giaovien'  => $id_giaovien,
                'id_sinhvien'  => $id_sinhvien[$i],
                'status'       => $status[$i],
                'ngaydiemdanh' => $currentTime,
                'note'         => $note[$i]
            ];
            DB::table('diemdanhs')->insert($data);
        }
        return redirect("/diemdanh");
    }
}
