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
    static function save($id_monhoc,$id_giaovien,$id_sinhvien,$status,$ngaydiemdanh,$note){
        return DB::insert("INSERT INTO diemdanhs VALUES('$id_monhoc','$id_giaovien','$id_sinhvien','$status','$ngaydiemdanh','$note')");
    }
}
