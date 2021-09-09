<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AttendenceController extends Controller{
    public function index(Request $index){
        // Lọc ra những lớp học đang available trong khung giờ hiện tại
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $frametime = 0; // 0 -> 2,4,6 | 1 -> 3,5,7
        $day = $mydate->format('N'); // 1 -> thứ 2, 7 -> CN
        if($day == 1 || $day == 3 || $day == 5){
            $frametime = 0;
        }
        else if($day != 7){
            $frametime = 1;
        }
        else{
            $frametime = -1;
        }
        $hour = $mydate->format('H');
        $minute = $mydate->format('i');
        $currentTime = $hour + $minute/60;
        //echo $currentTime;
        //die();
        //echo $currentDate.' * '.$frametime.' * '.$currentTime;
        $lichdayToday = DB::table('lichday')
            -> where('startdate', '<=', $currentDate)
            -> where('enddate', '>=', $currentDate)
            -> where('frametime',$frametime)
            -> where('starttime', '<=', $currentTime)
            -> where('endtime', '>=', $currentTime)
            -> get();
            //var_dump($lichdayToday);
        return view('index')->with([
            'index'=>1,
            'lichdayToday' => $lichdayToday
        ]);
    }
    public function view(Request $request){
        //check dữ liệu có đúng ko
        $lichday = DB::table('lichday')
            ->where('id', $request->id)
            ->get();
        if($lichday != null && count($lichday) > 0){
            $lichday = $lichday[0];
        }
        else{
            return redirect()->route('attendence_index');
        }
        //danh sách sinh viên
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $edit = DB::table('diemdanh')
            ->leftJoin('sinhvien', 'sinhvien.rollno', '=', 'diemdanh.rollno')
            ->where('diemdanh.id_lichday', $request->id)
            ->where('diemdanh.created_at', '>=', $currentDate)
            ->select('diemdanh.*', 'sinhvien.fullname')
            ->get();
        $studentList = null;
        if($edit == null || count($edit) == 0){
            $studentList = DB::table('sinhvien')
                ->where('class_name', $lichday->class_name)
                ->get();
        }
        return view('view')->with([
            'index'=>1,
            'lichday'=>$lichday,
            'studentList'=>$studentList,
            'edit'=>$edit
        ]);
    }
    public function post(Request $request){
        $mydate = new \DateTime();
        $mydate -> modify('+7 hours');
        $id_lichday = $request->id_lichday;
        $data = json_decode($request->data, true);
        $currentTime = $mydate->format('Y-m-d H:i:s');
        $currentDate = $mydate->format('Y-m-d');
        //check dữ liệu đã tồn tại hay chưa
        $edit = DB::table('diemdanh')
            ->leftJoin('sinhvien', 'sinhvien.rollno', '=', 'diemdanh.rollno')
            ->where('diemdanh.id_lichday', $request->id_lichday)
            ->where('diemdanh.created_at', '>=', $currentDate)
            ->select('diemdanh.*', 'sinhvien.fullname')
            ->get();
        if($edit != null && count($edit) > 0 ){
            //update bản ghi
            foreach($data as $item){
                DB::table('diemdanh')
                    ->where('id_lichday', $request->id_lichday)
                    ->where('created_at', '>=', $currentDate)
                    ->where('rollno', $item['rollno'])
                    ->update([
                        'status'=>$item['status'],
                        'note'=>$item['note'],
                        'updated_at'=>$currentTime
                    ]);
            }
            return redirect()->route('attendence_index');
        }
        //Thêm bản ghi mới
        foreach($data as $item){
            DB::table('diemdanh')->insert([
                'id_lichday'=>$id_lichday,
                'rollno'=>$item['rollno'],
                'status'=>$item['status'],
                'note'=>$item['note'],
                'created_at'=>$currentTime,
                'updated_at'=>$currentTime
            ]);
        }
    }
}
