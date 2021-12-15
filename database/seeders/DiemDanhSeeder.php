<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiemDanhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-17 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-18 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-19 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-20 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-21 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-24 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-25 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 4; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-26 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 3; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-18 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 3; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-19 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 3; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-20 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 3; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-21 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 2; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 2; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 2; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-24 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-25 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-26 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 2; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-24 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 2; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-23 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 2; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-22 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 3; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-21 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 3; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-20 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 3; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-19 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 3; $i < 4; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_lophoc'=>2,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>-1,
                'ngaydiemdanh'=>'2021-09-18 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-17 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-18 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-19 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-20 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-21 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-24 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-25 18:00:00',
                'note'=>''
            ]);
        }
        for($i = 6; $i < 11; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_lophoc'=>3,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-26 18:00:00',
                'note'=>''
            ]);
        }
    }
}
