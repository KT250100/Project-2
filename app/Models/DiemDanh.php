<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiemDanh
{
    static function getAllSearch($keyword,$keyword2){
        if(empty($keyword) && empty($keyword2)){
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','monhocs.name as mon','lophocs.name as lop','khoahocs.name as khoa','monhocs.id as id_mon','lophocs.id as id_lop')
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('lophocs', 'lophocs.id', '=', 'diemdanhs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('diemdanhs.id_giaovien', '=', Auth::user()->id)
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->orderByDesc('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null){
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','monhocs.name as mon','lophocs.name as lop','khoahocs.name as khoa','monhocs.id as id_mon','lophocs.id as id_lop',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('lophocs', 'lophocs.id', '=', 'diemdanhs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('diemdanhs.id_giaovien', '=', Auth::user()->id)
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->orWhere('monhocs.name', 'LIKE', '%'.$keyword2.'%')
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->orderByDesc('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2)){
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','monhocs.name as mon','lophocs.name as lop','khoahocs.name as khoa','monhocs.id as id_mon','lophocs.id as id_lop',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('lophocs', 'lophocs.id', '=', 'diemdanhs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('diemdanhs.id_giaovien', '=', Auth::user()->id)
            ->where('diemdanhs.ngaydiemdanh', 'LIKE', '%'.$keyword.'%')
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->orderByDesc('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
        else{
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','monhocs.name as mon','lophocs.name as lop','khoahocs.name as khoa','monhocs.id as id_mon','lophocs.id as id_lop',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('lophocs', 'lophocs.id', '=', 'diemdanhs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('diemdanhs.id_giaovien', '=', Auth::user()->id)
            ->where([['diemdanhs.ngaydiemdanh', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->orWhere([['diemdanhs.ngaydiemdanh', 'LIKE', '%'.$keyword.'%'], ['monhocs.name', 'LIKE', '%'.$keyword2.'%']])
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->orderByDesc('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
    }
    static function ddhistory($id_mon,$id_lop,$keyword){
        if(empty($keyword)){
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','giao_viens.name as gv')
            ->join('giao_viens', 'giao_viens.id', '=', 'diemdanhs.id_giaovien')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->where('diemdanhs.id_monhoc', '=', $id_mon)
            ->where('sinhviens.id_lophoc', '=', $id_lop)
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->orderByDesc('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
        else{
            return DB::table('diemdanhs')
            ->select('diemdanhs.*','giao_viens.name as gv')
            ->join('giao_viens', 'giao_viens.id', '=', 'diemdanhs.id_giaovien')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->where('diemdanhs.id_monhoc', '=', $id_mon)
            ->where('sinhviens.id_lophoc', '=', $id_lop)
            ->where('diemdanhs.ngaydiemdanh', 'LIKE', '%'.$keyword.'%')
            ->groupBy('diemdanhs.ngaydiemdanh')
            ->paginate(7);
        }
    }
    static function dddetail($id_lop,$id_mon,$ngaydiemdanh){
        return DB::select("SELECT diemdanhs.*, sinhviens.name as 'sv', sinhviens.id as 'id' FROM diemdanhs
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE sinhviens.id_lophoc = '$id_lop' AND diemdanhs.id_monhoc = '$id_mon' AND diemdanhs.ngaydiemdanh = '$ngaydiemdanh'");
    }
    static function save($id_monhoc,$id_lophoc,$id_giaovien,$id_sinhvien,$status,$ngaydiemdanh,$note){
        return DB::insert("INSERT INTO diemdanhs VALUES('$id_monhoc','$id_lophoc','$id_giaovien','$id_sinhvien','$status','$ngaydiemdanh','$note')");
    }
    static function deletesv($id){
        return DB::delete("DELETE FROM diemdanhs WHERE id_sinhvien = '$id'");
    }
    static function deletelop($id){
        return DB::delete("DELETE FROM diemdanhs WHERE id_lophoc = '$id'");
    }
}
