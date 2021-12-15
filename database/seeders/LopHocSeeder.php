<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LopHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lophocs')->insert([
            'name'=>'Không',
            'id_nganhhoc'=>'1',
            'id_khoahoc'=>'1'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKD01',
            'id_nganhhoc'=>'2',
            'id_khoahoc'=>'2'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKD02',
            'id_nganhhoc'=>'2',
            'id_khoahoc'=>'3'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKN02',
            'id_nganhhoc'=>'3',
            'id_khoahoc'=>'4'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKN03',
            'id_nganhhoc'=>'3',
            'id_khoahoc'=>'2'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKG03',
            'id_nganhhoc'=>'4',
            'id_khoahoc'=>'3'
        ]);
        DB::table('lophocs')->insert([
            'name'=>'BKG01',
            'id_nganhhoc'=>'4',
            'id_khoahoc'=>'4'
        ]);
    }
}
