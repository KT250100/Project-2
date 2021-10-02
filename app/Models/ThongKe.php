<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThongKe
{
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('lophocs')
            ->select('lophocs.*', 'lophocs.name as lop','khoahocs.name as khoa','nganhhocs.name as nganh')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->orderBy('lophocs.id')
            ->paginate(7);
        }
        else{
            return DB::table('lophocs')
            ->select('lophocs.*','lophocs.name as lop','khoahocs.name as khoa','nganhhocs.name as nganh',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword.'%')
            ->orWhere('nganhhocs.name', 'LIKE', '%'.$keyword.'%')
            ->orderBy('lophocs.id')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT monhocs.id, monhocs.name as 'mon', lophocs.name as 'lop'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        WHERE lophocs.id = '$id'");
    }
    static function detail($id_lop){
        return DB::select("SELECT sinhviens.*, sinhviens.name as 'sv'
        FROM sinhviens
        WHERE sinhviens.id_lophoc = '$id_lop'");
    }
    static function detail2($id,$id_mon){
        return DB::table('diemdanhs')
        ->select('*')
        ->where('id_sinhvien', '=', $id)
        ->where('id_monhoc', '=', $id_mon)
        ->orderByDesc('id')
        ->paginate(7);
    }
    static function detail3_1($id,$id_mon){
        return DB::select("SELECT monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.3) as 'sobuoinghi',
        sinhviens.name as 'sv', COUNT(diemdanhs.id) AS 'sobuoidihoc'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        INNER JOIN diemdanhs ON diemdanhs.id_monhoc = monhocs.id
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id_mon' AND sinhviens.id = '$id'");
    }
    static function detail3_2($id,$id_mon){
        return DB::select("SELECT monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.5) as 'sobuoinghi2',
        sinhviens.name as 'sv'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN sinhviens ON sinhviens.id_lophoc = lophocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        WHERE monhocs.id = '$id_mon' AND sinhviens.id = '$id'");
    }
    static function sobuoidihoc($id,$id_mon){
        return DB::select("SELECT COUNT(diemdanhs.id) AS 'sobuoidihoc'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id_mon' AND sinhviens.id = '$id'");
    }
    static function sbdanghi($id,$id_mon){
        return DB::select("SELECT COUNT(diemdanhs.id) AS 'sbdanghi'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id_mon' AND sinhviens.id = '$id' AND diemdanhs.status = 0");
    }
    static function sbdimuon($id,$id_mon){
        return DB::select("SELECT ROUND(COUNT(diemdanhs.id)/2, 1) AS 'sbdimuon'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE monhocs.id = '$id_mon' AND sinhviens.id = '$id' AND diemdanhs.status = -1");
    }
    static function countchart(){
        return DB::select("SELECT status as 'tinhtrang', COUNT(id) as 'soluong' FROM diemdanhs GROUP BY status");
    }
    static function countchart2($id_mon,$id_lop){
        return DB::select("SELECT status as 'tinhtrang', COUNT(diemdanhs.id) as 'soluong' 
        FROM diemdanhs 
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE diemdanhs.id_monhoc = '$id_mon' AND sinhviens.id_lophoc = '$id_lop'
        GROUP BY status");
    }
}
