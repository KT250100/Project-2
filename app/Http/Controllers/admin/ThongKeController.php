<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ThongKe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    // Thống kê sinh viên
    function thongke(Request $req){
        $keyword = $req->input('keyword','');
        $sinhviens = ThongKe::getAllSearch($keyword);
        return view('admin.thongke.thongke',['sinhviens'=>$sinhviens]);
    }
    function tkdetails($id){
        $thongkes = ThongKe::get($id);
        return view('admin.thongke.tkdetails')->with(['index'=>1,'thongkes'=>$thongkes,'id_sinhvien'=>$id]);
    }
    function detail(Request $req,$id,$id_sinhvien){
        $id_sinhvien = $req->id_sinhvien;
        $id = $req->id;
        $detail = ThongKe::detail($id,$id_sinhvien);
        $detail2 = ThongKe::detail2($id,$id_sinhvien);
        $sobuoidihoc = ThongKe::sobuoidihoc($id,$id_sinhvien);
        $sbdanghi = ThongKe::sbdanghi($id,$id_sinhvien);
        $sbdimuon = ThongKe::sbdimuon($id,$id_sinhvien);
        return view('admin.thongke.detail',[
            'detail'=>$detail,
            'detail2'=>$detail2,
            'sobuoidihoc'=>$sobuoidihoc,
            'sbdanghi'=>$sbdanghi,
            'sbdimuon'=>$sbdimuon
        ]);
    }
    
    // Biểu đồ
    function bieudo(){
        $result = ThongKe::countchart();
        $charData = "";
        foreach($result as $list){
            if($list->tinhtrang == 0){
                $list->tinhtrang = "Nghỉ";
            }
            if($list->tinhtrang == 1){
                $list->tinhtrang = "Đi học đúng giờ";
            }
            if($list->tinhtrang == -1){
                $list->tinhtrang = "Đi muộn";
            }
            if($list->tinhtrang == 2){
                $list->tinhtrang = "Nghỉ có phép";
            }
            $charData.= "['".$list->tinhtrang."', ".$list->soluong."],";
        }
        $arr['charData']=rtrim($charData,',');
        return view('admin.thongke.bieudo',$arr);
    }
}
