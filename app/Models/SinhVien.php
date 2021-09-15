<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SinhVien
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT sinhviens.id,sinhviens.name,sinhviens.phone,sinhviens.email,sinhviens.address,sinhviens.birthday,
        lophocs.name as 'lop',
        khoahocs.name as 'khoa',
        sinhviens.id_lophoc 
        FROM sinhviens
        INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
        INNER JOIN khoahocs ON lophocs.id_khoahoc = khoahocs.id");
    }
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('sinhviens')
            ->select('sinhviens.*', 'lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->paginate(7);
        }
        else{
            return DB::table('sinhviens')
            ->select('sinhviens.*','lophocs.name as lop','khoahocs.name as khoa')
            ->join('lophocs', 'lophocs.id', '=', 'sinhviens.id_lophoc')
            ->join('khoahocs', 'khoahocs.id', '=', 'lophocs.id_khoahoc')
            ->where('sinhviens.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
            ->orWhere('email', 'LIKE', '%'.$keyword.'%')
            ->orWhere('lophocs.name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('khoahocs.name', 'LIKE', '%'.$keyword.'%')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT sinhviens.id,sinhviens.name,sinhviens.phone,sinhviens.email,sinhviens.address,sinhviens.birthday,
        lophocs.name as 'lop',
        sinhviens.id_lophoc FROM sinhviens INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id
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
}
