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
        sinhviens.id_lophoc FROM sinhviens INNER JOIN lophocs ON sinhviens.id_lophoc = lophocs.id ORDER BY id DESC");
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
