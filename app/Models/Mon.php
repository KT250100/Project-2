<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mon
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT monhocs.id,monhocs.name FROM monhocs");
    }
    static function save($name){
        return DB::insert("INSERT INTO monhocs VALUES(NULL,'$name')");
    }
    static function update($id,$name){
        $sql = "UPDATE monhocs SET name='$name' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM monhocs WHERE id='$id'");
    }
}