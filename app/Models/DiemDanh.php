<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class DiemDanh
{
    static function getAll(){
        return DB::select("SELECT phancongs.id_giaovien,phancongs.id_lophoc,phancongs.id_monhoc,
        giao_viens.name as 'giaovien',
        lophocs.name as 'lop',
        monhocs.name as 'mon',
        khoahocs.name as 'khoa'
        FROM phancongs
        INNER JOIN giao_viens ON phancongs.id_giaovien = giao_viens.id 
        INNER JOIN lophocs ON phancongs.id_lophoc = lophocs.id
        INNER JOIN monhocs ON phancongs.id_monhoc = monhocs.id
        INNER JOIN khoahocs ON lophocs.id_khoahoc = khoahocs.id");
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
        return DB::select("SELECT diemdanhs.*, sinhviens.name as 'sv' FROM diemdanhs
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE sinhviens.id_lophoc = '$id_lop' AND diemdanhs.id_monhoc = '$id_mon' AND diemdanhs.ngaydiemdanh = '$ngaydiemdanh'");
    }
    static function save($id_monhoc,$id_giaovien,$id_sinhvien,$status,$ngaydiemdanh,$note){
        return DB::insert("INSERT INTO diemdanhs VALUES('$id_monhoc','$id_giaovien','$id_sinhvien','$status','$ngaydiemdanh','$note')");
    }
}
