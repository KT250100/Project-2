<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monhocs')->insert([
            'name'=>'Database',
            'thoiluong'=>60,
            'id_nganhhoc'=>'1'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'PHP',
            'thoiluong'=>72,
            'id_nganhhoc'=>'1'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Mạng máy tính',
            'thoiluong'=>72,
            'id_nganhhoc'=>'2'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Bảo trì máy tính',
            'thoiluong'=>60,
            'id_nganhhoc'=>'2'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Photoshop',
            'thoiluong'=>45,
            'id_nganhhoc'=>'3'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Quảng cáo',
            'thoiluong'=>60,
            'id_nganhhoc'=>'3'
        ]);
    }
}
