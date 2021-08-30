<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mon
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT monhocs.id,monhocs.name,nganhhocs.name as 'nganh', monhocs.id_nganhhoc FROM monhocs INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id ORDER BY id DESC");
    }
    static function get($id){
        return DB::select("SELECT monhocs.id,monhocs.name,nganhhocs.name as 'nganh', monhocs.id_nganhhoc FROM monhocs INNER JOIN nganhhocs ON monhocs.id_nganhhoc = nganhhocs.id WHERE monhocs.id='$id'");
    }
    static function save($name,$id_nganh){
        return DB::insert("INSERT INTO monhocs VALUES(NULL,'$name','$id_nganh')");
    }
    static function update($id,$name,$id_nganh){
        $sql = "UPDATE monhocs SET name='$name', id_nganhhoc='$id_nganh' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM monhocs WHERE id='$id'");
    }
}