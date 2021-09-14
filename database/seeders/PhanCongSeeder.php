<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanCongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phancongs')->insert([
            'id_giaovien'=>'1',
            'id_lophoc'=>'1',
            'id_monhoc'=>'2'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'2',
            'id_lophoc'=>'3',
            'id_monhoc'=>'1'
        ]);
        DB::table('phancongs')->insert([
            'id_giaovien'=>'3',
            'id_lophoc'=>'2',
            'id_monhoc'=>'3'
        ]);
    }
}
