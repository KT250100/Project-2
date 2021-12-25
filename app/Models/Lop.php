<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lop
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT lophocs.id,lophocs.name,
        nganhhocs.name as 'nganh',
        khoahocs.name as 'khoa',
        lophocs.id_nganhhoc,lophocs.id_khoahoc 
        FROM lophocs 
        INNER JOIN nganhhocs ON lophocs.id_nganhhoc = nganhhocs.id 
        INNER JOIN khoahocs ON lophocs.id_khoahoc = khoahocs.id 
        WHERE lophocs.id > 1 ORDER BY id DESC");
    }
    static function getAllSV($id){
        return DB::select("SELECT sinhviens.*, 
        lophocs.name as 'lop', 
        khoahocs.name as 'khoa' 
        FROM sinhviens
        INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        INNER JOIN khoahocs ON lophocs.id_khoahoc = khoahocs.id 
        WHERE lophocs.id = '$id'");
    }
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('lophocs')
            ->select('lophocs.*','khoahocs.name as khoa','nganhhocs.name as nganh',DB::raw('COUNT(sinhviens.id) as sosinhvien'))
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('sinhviens', 'sinhviens.id_lophoc', '=', 'lophocs.id')
            ->where('lophocs.id', '>', 1)
            ->groupBy('lophocs.id')
            ->orderByDesc('lophocs.id')
            ->paginate(7);
        }
        else{
            return DB::table('lophocs')
            ->select('lophocs.*','khoahocs.name as khoa','nganhhocs.name as nganh',DB::raw('CONCAT(lophocs.name,khoahocs.name)'),DB::raw('COUNT(sinhviens.id) as sosinhvien'))
            ->join('nganhhocs', 'nganhhocs.id', '=', 'lophocs.id_nganhhoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->join('sinhviens', 'sinhviens.id_lophoc', '=', 'lophocs.id')
            ->where(DB::raw('CONCAT(lophocs.name,khoahocs.name)'), 'LIKE', '%'.$keyword.'%')
            ->groupBy('lophocs.id')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT lophocs.id,lophocs.name,
        nganhhocs.name as 'nganh',
        khoahocs.name as 'khoa',
        lophocs.id_nganhhoc,lophocs.id_khoahoc
        FROM lophocs 
        INNER JOIN nganhhocs ON lophocs.id_nganhhoc = nganhhocs.id
        INNER JOIN khoahocs ON lophocs.id_khoahoc = khoahocs.id
        WHERE lophocs.id='$id'");
    }
    static function themvaolop($id_lop,$id){
        return DB::delete("UPDATE sinhviens SET id_lophoc = '$id_lop' WHERE id='$id'");
    }
    static function save($name,$id_nganh,$id_khoa){
        return DB::insert("INSERT INTO lophocs VALUES(NULL,'$name','$id_nganh','$id_khoa')");
    }
    static function update($id,$name,$id_nganh,$id_khoa){
        $sql = "UPDATE lophocs SET name='$name', id_nganhhoc='$id_nganh', id_khoahoc='$id_khoa' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM lophocs WHERE id='$id'");
    }
    static function deletekhoa($id){
        return DB::delete("DELETE FROM lophocs WHERE id_khoahoc='$id'");
    }
}