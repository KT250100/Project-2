<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 9; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'HN '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>rand(1,3)
            ]);
        }
    }
}
