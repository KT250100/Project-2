<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiaoVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 9; $i++){ 
            DB::table('giao_viens')->insert([
                'name'=>'Giáo viên '.$i,
                'phone'=> '012345678912',
                'email'=>$i.'@gmail.com',
                'password'=>bcrypt('password'),
                'address'=>'HN '.$i,
                'birthday'=>'2000-01-01',
                'is_active'=>1,
            ]);
        }
    }
}
