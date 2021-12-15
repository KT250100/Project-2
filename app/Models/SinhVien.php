<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SinhVien
{
    use HasFactory;
    static function getAllSearch($keyword,$keyword2,$keyword3){
        if(empty($keyword) && empty($keyword2) && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && empty($keyword2) && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && empty($keyword2) && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && $keyword2 != null && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->where('sinhviens.id_lophoc', '>', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && $keyword2 != null && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->where('sinhviens.id_lophoc', '=', 1)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        else{
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
    }
    static function getAllSearch2($keyword,$keyword2,$keyword3,$id_lop){
        if(empty($keyword) && empty($keyword2) && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && empty($keyword2) && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && empty($keyword2) && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif(empty($keyword) && $keyword2 != null && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 1){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->where('sinhviens.id_lophoc', '>', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && empty($keyword2) && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->where('sinhviens.id_lophoc', '=', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && $keyword2 != null && $keyword3 == 2){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->where('sinhviens.id_lophoc', '>', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        elseif($keyword != null && $keyword2 != null && $keyword3 == 3){
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->where('sinhviens.id_lophoc', '=', 1)
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
        else{
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa',DB::raw('CONCAT(lophocs.name,khoahocs.name)'))
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where([['sinhviens.name', 'LIKE', '%'.$keyword.'%'], [DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword2.'%']])
            ->where('sinhviens.id_lophoc', '!=', $id_lop)
            ->orderByDesc('sinhviens.id')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT sinhviens.*, lophocs.name as 'lop' 
        FROM sinhviens INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        WHERE sinhviens.id='$id'");
    }
    static function save($name,$phone,$email,$address,$birthday,$id_lophoc){
        return DB::insert("INSERT INTO sinhviens VALUES(NULL,'$name','$phone','$email','$address','$birthday','$id_lophoc')");
    }
    static function update($id,$name,$phone,$email,$address,$birthday,$id_lophoc){
        $sql = "UPDATE sinhviens SET name='$name',phone='$phone',email='$email',address='$address',birthday='$birthday',id_lophoc='$id_lophoc' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM sinhviens WHERE id='$id'");
    }
    static function deletelop($id){
        return DB::delete("UPDATE sinhviens SET id_lophoc = 1 WHERE id='$id'");
    }
}
