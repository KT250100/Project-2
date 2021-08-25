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
        for ($i=0; $i < 5; $i++){ 
            DB::table('giaovien')->insert([
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
