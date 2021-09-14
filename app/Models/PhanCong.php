<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhanCong
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
    static function get($id_giaovien){
        return DB::select("SELECT phancongs.id_giaovien,phancongs.id_lophoc,phancongs.id_monhoc,
        giao_viens.name as 'giaovien',
        lophocs.name as 'lop',
        monhocs.name as 'mon'
        FROM phancongs
        INNER JOIN giao_viens ON phancongs.id_giaovien = giao_viens.id 
        INNER JOIN lophocs ON phancongs.id_lophoc = lophocs.id
        INNER JOIN monhocs ON phancongs.id_monhoc = monhocs.id 
        WHERE id_giaovien='$id_giaovien'");
    }
    static function save($id_giaovien,$id_lop,$id_mon){
        return DB::insert("INSERT INTO phancongs VALUES('$id_giaovien','$id_lop','$id_mon')");
    }
    static function update($id_giaovien,$id_lophoc,$id_monhoc){
        $sql = "UPDATE phancongs SET id_lophoc='$id_lophoc',id_monhoc='$id_monhoc' WHERE id_giaovien='$id_giaovien'";
        return DB::update($sql);
    }
    static function delete($id_giaovien){
        return DB::delete("DELETE FROM phancongs WHERE id_giaovien='$id_giaovien'");
    }
}
