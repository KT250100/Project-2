<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin2
{
    use HasFactory;
    static function get($id){
        return DB::select("SELECT id,password FROM admins WHERE id='$id'");
    }
    static function update($id,$password){
        $sql = "UPDATE admins SET password='$password' WHERE id='$id'";
        return DB::update($sql);
    }
    static function getpass($id){
        return DB::select("SELECT password FROM admins WHERE id='$id'");
    }
}