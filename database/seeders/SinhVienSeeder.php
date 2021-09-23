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
        for ($i=1; $i < 6; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Hà Nội '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>1
            ]);
        }
        for ($i=6; $i < 11; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Sài Gòn '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>2
            ]);
        }
        for ($i=11; $i < 16; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Nam Định '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>3
            ]);
        }
        for ($i=16; $i < 21; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Đà Nẵng '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>4
            ]);
        }
        for ($i=21; $i < 26; $i++){ 
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Nghệ An '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>5
            ]);
        }
        for ($i=26; $i < 31; $i++){
            DB::table('sinhviens')->insert([
                'name'=>'SV '.$i,
                'phone'=> '012398745619',
                'email'=>$i.'@gmail.com',
                'address'=>'Quảng Bình '.$i,
                'birthday'=>'2000-01-01',
                'id_lophoc'=>6
            ]);
        }
    }
}
