<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThongKe
{
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->orderBy('sinhviens.id')
            ->paginate(7);
        }
        else{
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword.'%')
            ->orderBy('sinhviens.id')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT monhocs.id, monhocs.name as 'mon'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN sinhviens ON sinhviens.id_lophoc = lophocs.id
        WHERE sinhviens.id = '$id'");
    }
    static function detail($id,$id_sinhvien){
        return DB::select("SELECT monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.5) as 'sobuoinghi'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN sinhviens ON sinhviens.id_lophoc = lophocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        WHERE monhocs.id = '$id' AND sinhviens.id = '$id_sinhvien'");
    }
    static function detail2($id,$id_sinhvien){
        return DB::select("SELECT monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.3) as 'sobuoinghi2'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN sinhviens ON sinhviens.id_lophoc = lophocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        WHERE monhocs.id = '$id' AND sinhviens.id = '$id_sinhvien'");
    }
    static function sobuoidihoc($id,$id_sinhvien){
        return DB::select("SELECT COUNT(diemdanhs.id) AS 'sobuoidihoc'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id' AND sinhviens.id = '$id_sinhvien'");
    }
    static function sbdanghi($id,$id_sinhvien){
        return DB::select("SELECT COUNT(diemdanhs.id) AS 'sbdanghi'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id' AND sinhviens.id = '$id_sinhvien' AND diemdanhs.status = 0");
    }
    static function sbdimuon($id,$id_sinhvien){
        return DB::select("SELECT ROUND(COUNT(diemdanhs.id)/2, 1) AS 'sbdimuon'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id' AND sinhviens.id = '$id_sinhvien' AND diemdanhs.status = -1");
    }
    static function countchart(){
        return DB::select("SELECT status as 'tinhtrang', COUNT(id) as 'soluong' FROM diemdanhs GROUP BY status");
    }
}
