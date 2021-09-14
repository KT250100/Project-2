<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GiaoVien2
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT id,name,phone,email,password,address,birthday,is_active FROM giao_viens ORDER BY id DESC");
    }
    static function get($id){
        return DB::select("SELECT id,name,phone,email,password,address,birthday,is_active FROM giao_viens WHERE id='$id'");
    }
    static function save($name,$phone,$email,$password,$address,$birthday,$is_active){
        return DB::insert("INSERT INTO giao_viens VALUES(NULL,'$name','$phone','$email','$password','$address','$birthday','$is_active')");
    }
    static function update($id,$name,$phone,$email,$password,$address,$birthday,$is_active){
        $sql = "UPDATE giao_viens SET name='$name',phone='$phone',email='$email',password='$password',address='$address',birthday='$birthday',is_active='$is_active' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM giao_viens WHERE id='$id'");
    }
    static function updatepass($id,$password){
        $sql = "UPDATE giao_viens SET password='$password' WHERE id='$id'";
        return DB::update($sql);
    }
    static function updateacc($id,$name,$phone,$email,$address,$birthday){
        $sql = "UPDATE giao_viens SET name='$name',phone='$phone',email='$email',address='$address',birthday='$birthday' WHERE id='$id'";
        return DB::update($sql);
    }
}
