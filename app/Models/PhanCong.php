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
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','khoahocs.name as khoa','monhocs.name as mon','giao_viens.name as giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->paginate(7);
        }
        else{
            return DB::table('phancongs')
            ->select('phancongs.*','lophocs.name as lop','khoahocs.name as khoa','monhocs.name as mon','giao_viens.name as giaovien')
            ->join('lophocs', 'lophocs.id', '=', 'phancongs.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('monhocs', 'monhocs.id', '=', 'phancongs.id_monhoc')
            ->join('giao_viens', 'giao_viens.id', '=', 'phancongs.id_giaovien')
            ->where('giao_viens.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('lophocs.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('khoahocs.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('monhocs.name', 'LIKE', '%'.$keyword.'%')
            ->paginate(7);
        }
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
