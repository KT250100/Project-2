<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for ($i=0; $i < 10; $i++){ 
            DB::table('sinhvien')->insert([
                'rollno'=>'R00'.$i,
                'fullname'=>'SV 0'.$i,
                'class_name'=>'BKD03K11',
                'address'=>'DC '.$i,
                'email'=>$i.'@gmail.com',
                'birthday'=>'2000-01-02'
            ]);
        }
        DB::table('lichday')->insert([
            'class_name'=>'BKD03K11',
            'subject_name'=>'Lập trình Laravel',
            'teacher_name'=>'Trần Xuân Bách',
            'frametime'=>0,
            'starttime'=>13.5,
            'endtime'=>17.5,
            'startdate'=>'2021-08-01',
            'enddate'=>'2021-11-01',
            'note'=>'Học chiều 2, 4, 6'
        ]);
        DB::table('lichday')->insert([
            'class_name'=>'BKD03K11',
            'subject_name'=>'SQL Server',
            'teacher_name'=>'Trần Xuân Bách',
            'frametime'=>1,
            'starttime'=>13.5,
            'endtime'=>17.5,
            'startdate'=>'2021-08-01',
            'enddate'=>'2021-12-01',
            'note'=>'Học chiều 3, 5, 7'
        ]);
        DB::table('lichday')->insert([
            'class_name'=>'BKD03K11',
            'subject_name'=>'Project 2',
            'teacher_name'=>'Trần Xuân Bách',
            'frametime'=>0,
            'starttime'=>13.5,
            'endtime'=>17.5,
            'startdate'=>'2021-08-01',
            'enddate'=>'2021-012-01',
            'note'=>'Học chiều 2, 4, 6'
        ]);
        DB::table('lichday')->insert([
            'class_name'=>'BKD03K11',
            'subject_name'=>'Javascript',
            'teacher_name'=>'Trần Xuân Bách',
            'frametime'=>1,
            'starttime'=>13.5,
            'endtime'=>17.5,
            'startdate'=>'2021-08-01',
            'enddate'=>'2021-012-01',
            'note'=>'Học chiều 3, 5, 7'
        ]);
    }
}
