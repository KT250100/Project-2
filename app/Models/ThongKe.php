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
            ->select('lophocs.*', 'lophocs.name as lop','khoahocs.name as khoa','nganhhocs.name as nganh',DB::raw('COUNT(sinhviens.id) as sosinhvien'))
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->join('sinhviens', 'sinhviens.id_lophoc', '=', 'lophocs.id')
            ->groupBy('lophocs.id')
            ->orderBy('lophocs.id')
            ->paginate(7);
        }
        else{
            return DB::table('lophocs')
            ->select('lophocs.*','lophocs.name as lop','khoahocs.name as khoa','nganhhocs.name as nganh',DB::raw('CONCAT(lophocs.name,khoahocs.name)'),DB::raw('COUNT(sinhviens.id) as sosinhvien'))
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->join('sinhviens', 'sinhviens.id_lophoc', '=', 'lophocs.id')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword.'%')
            ->orWhere('nganhhocs.name', 'LIKE', '%'.$keyword.'%')
            ->groupBy('lophocs.id')
            ->orderBy('lophocs.id')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT monhocs.id, monhocs.name as 'mon', lophocs.name as 'lop', khoahocs.name as 'khoa'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN khoahocs ON khoahocs.id = lophocs.id_khoahoc
        WHERE lophocs.id = '$id'");
    }
    static function detail($id_lop){
        return DB::select("SELECT sinhviens.*, sinhviens.name as 'sv'
        FROM sinhviens
        WHERE sinhviens.id_lophoc = '$id_lop'");
    }
    static function detail_2($id_lop,$id){
        return DB::select("SELECT monhocs.name as 'mon_hoc', monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.3) as 'sobuoinghi', COUNT(diemdanhs.id) AS 'sobuoidahoc'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        INNER JOIN diemdanhs ON diemdanhs.id_monhoc = monhocs.id
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE lophocs.id = '$id_lop' AND monhocs.id = '$id'
        GROUP BY sinhviens.id");
    }
    static function detail_3($id_lop,$id){
        return DB::select("SELECT monhocs.name as 'mon_hoc', monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001) as 'sobuoi',
        FLOOR((monhocs.thoiluong/(TIMEDIFF(phancongs.endtime, phancongs.starttime)*0.0001))*0.5) as 'sobuoinghi', COUNT(diemdanhs.id) AS 'sobuoidahoc'
        FROM monhocs
        INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id
        INNER JOIN lophocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN phancongs ON phancongs.id_monhoc = monhocs.id
        INNER JOIN diemdanhs ON diemdanhs.id_monhoc = monhocs.id
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        WHERE lophocs.id = '$id_lop' AND monhocs.id = '$id'
        GROUP BY sinhviens.id");
    }
    static function sobuoidihoc2($id_lop,$id){
        return DB::select("SELECT sinhviens.id ,COUNT(diemdanhs.id) AS 'sbdihoc'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        WHERE lophocs.id = '$id_lop' AND monhocs.id = '$id'
        GROUP BY sinhviens.id");
    }
    static function sobuoidanghi2($id_lop,$id){
        return DB::select("SELECT sinhviens.id ,COUNT(diemdanhs.id) AS 'sbdanghi'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        WHERE lophocs.id = '$id_lop' AND monhocs.id = '$id' AND diemdanhs.status = 0
        GROUP BY sinhviens.id");
    }
    static function sobuoidimuon2($id_lop,$id){
        return DB::select("SELECT sinhviens.id ,COUNT(diemdanhs.id) AS 'sbdimuon'
        FROM diemdanhs
        INNER JOIN monhocs ON monhocs.id = diemdanhs.id_monhoc
        INNER JOIN sinhviens ON sinhviens.id = diemdanhs.id_sinhvien
        INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        WHERE lophocs.id = '$id_lop' AND monhocs.id = '$id' AND diemdanhs.status = -1
        GROUP BY sinhviens.id");
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
