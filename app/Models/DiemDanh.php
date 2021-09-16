<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiemDanh
{
    use HasFactory;
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
    static function getAllSearch($keyword, $keyword2){
        if(empty($keyword) && empty($keyword2)){
            return DB::table('diemdanhs')
            ->select('diemdanhs.ngaydiemdanh','lophocs.name as lop','khoahocs.name as khoa','monhocs.name as mon','giao_viens.name as giaovien')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('giao_viens', 'giao_viens.id', '=', 'diemdanhs.id_giaovien')
            ->distinct()
            ->orderByDesc('diemdanhs.id')
            ->paginate(7);
        }
        else{
            return DB::table('diemdanhs')
            ->select('diemdanhs.ngaydiemdanh','lophocs.name as lop','khoahocs.name as khoa','monhocs.name as mon','giao_viens.name as giaovien')
            ->join('sinhviens', 'sinhviens.id', '=', 'diemdanhs.id_sinhvien')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('monhocs', 'monhocs.id', '=', 'diemdanhs.id_monhoc')
            ->join('giao_viens', 'giao_viens.id', '=', 'diemdanhs.id_giaovien')
            ->distinct()
            ->where([['ngaydiemdanh', 'LIKE', '%'.$keyword.'%'],['lophocs.name', 'LIKE', '%'.$keyword2.'%']])
            ->orWhere([['ngaydiemdanh', 'LIKE', '%'.$keyword.'%'],['monhocs.name', 'LIKE', '%'.$keyword2.'%']])
            ->orWhere([['ngaydiemdanh', 'LIKE', '%'.$keyword.'%'],['giao_viens.name', 'LIKE', '%'.$keyword2.'%']])
            ->paginate(7);
        }
    }
    static function save($id_monhoc,$id_giaovien,$id_sinhvien,$status,$ngaydiemdanh,$note){
        return DB::insert("INSERT INTO diemdanhs VALUES('$id_monhoc','$id_giaovien','$id_sinhvien','$status','$ngaydiemdanh','$note')");
    }
}
