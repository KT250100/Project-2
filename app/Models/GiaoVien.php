<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class GiaoVien extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name','phone','email','password','address','birthday','is_active'];
    protected $hidden = ['password'];
}
