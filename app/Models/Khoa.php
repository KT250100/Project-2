<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Khoa
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT id,name FROM khoahocs ORDER BY id DESC");
    }
    static function get($id){
        return DB::select("SELECT id,name FROM khoahocs WHERE id='$id'");
    }
    static function save($name){
        return DB::insert("INSERT INTO khoahocs VALUES(NULL,'$name')");
    }
    static function update($id,$name){
        $sql = "UPDATE khoahocs SET name='$name' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM khoahocs WHERE id='$id'");
    }
}