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
            'id_nganhhoc'=>'1'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Mạng máy tính',
            'id_nganhhoc'=>'2'
        ]);
        DB::table('monhocs')->insert([
            'name'=>'Photoshop',
            'id_nganhhoc'=>'3'
        ]);
    }
}
