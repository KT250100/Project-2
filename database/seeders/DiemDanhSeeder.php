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
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-17 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-18 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-19 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-20 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-21 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>2,
                'ngaydiemdanh'=>'2021-09-24 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>2,
                'ngaydiemdanh'=>'2021-09-25 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>1,
                'id_giaovien'=>1,
                'id_sinhvien'=>$i,
                'status'=>2,
                'ngaydiemdanh'=>'2021-09-26 14:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-17 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-18 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-19 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-20 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-21 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-24 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-25 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>2,
                'id_giaovien'=>5,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-26 15:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-11 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-12 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-13 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-14 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-15 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-16 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-18 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-19 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>0,
                'ngaydiemdanh'=>'2021-09-20 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-21 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-22 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-23 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-24 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>1,
                'ngaydiemdanh'=>'2021-09-25 16:00:00',
                'note'=>''
            ]);
        }
        for($i = 1; $i < 6; $i++){ 
            DB::table('diemdanhs')->insert([
                'id_monhoc'=>7,
                'id_giaovien'=>7,
                'id_sinhvien'=>$i,
                'status'=>-1,
                'ngaydiemdanh'=>'2021-09-26 16:00:00',
                'note'=>''
            ]);
        }
    }
}
