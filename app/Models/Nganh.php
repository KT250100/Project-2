<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nganh
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT id,name FROM nganhhocs WHERE id > 1 ORDER BY id DESC");
    }
    static function getAllSearch($keyword){
        if(empty($keyword)){
            return DB::table('nganhhocs')
            ->select('nganhhocs.*')
            ->where('id', '>', 1)
            ->orderByDesc('id')
            ->paginate(7);
        }
        else{
            return DB::table('nganhhocs')
            ->select('nganhhocs.*')
            ->where('name', 'LIKE', '%'.$keyword.'%')
            ->paginate(7);
        }
    }
    static function get($id){
        return DB::select("SELECT id,name FROM nganhhocs WHERE id='$id'");
    }
    static function save($name){
        return DB::insert("INSERT INTO nganhhocs VALUES(NULL,'$name')");
    }
    static function update($id,$name){
        $sql = "UPDATE nganhhocs SET name='$name' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM nganhhocs WHERE id='$id'");
    }
}
