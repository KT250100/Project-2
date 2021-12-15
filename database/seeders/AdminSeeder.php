<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'TTK',
            'email'=>'super@gmail.com',
            'password'=>bcrypt('bkacad123')
        ]);
        DB::table('khoahocs')->insert([
            'name'=>'K0'
        ]);
        DB::table('khoahocs')->insert([
            'name'=>'K10'
        ]);
        DB::table('khoahocs')->insert([
            'name'=>'K11'
        ]);
        DB::table('khoahocs')->insert([
            'name'=>'K12'
        ]);
        DB::table('nganhhocs')->insert([
            'name'=>'Ngành 0'
        ]);
        DB::table('nganhhocs')->insert([
            'name'=>'Lập trình Quốc tế'
        ]);
        DB::table('nganhhocs')->insert([
            'name'=>'Quản trị mạng'
        ]);
        DB::table('nganhhocs')->insert([
            'name'=>'Thiết kế đồ họa'
        ]);
    }
}
