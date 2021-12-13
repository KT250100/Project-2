<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DiemDanh;
use App\Models\ThongKe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    
    // Lịch sử điểm danh
    function view(Request $req){
        $keyword = $req->input('keyword','');
        $lops = ThongKe::getAllSearch($keyword);
        return view('admin.ddhistory.view',['lops'=>$lops]);
    }
    function viewmon($id){
        $thongkes = ThongKe::get($id);
        return view('admin.ddhistory.viewmon')->with(['index'=>1,'thongkes'=>$thongkes,'id_lop'=>$id]);
    }
    function details(Request $req){
        $id_lop = $req->id_lop;
        $id_mon = $req->id;
        $keyword = $req->input('keyword','');
        $details = DiemDanh::ddhistory($id_mon,$id_lop,$keyword);
        return view('admin.ddhistory.details',['details'=>$details,'id_lop'=>$id_lop,'id_mon'=>$id_mon]);
    }
    function dddetail(Request $req){
        $id_lop = $req->id_lop;
        $id_mon = $req->id_mon;
        $ngaydiemdanh = $req->ngaydiemdanh;
        $ngaydd = DiemDanh::dddetail($id_lop,$id_mon,$ngaydiemdanh);
        return view('admin.ddhistory.detail',[
            'index'=>1,
            'ngaydd'=>$ngaydd,
            'id_lop'=>$id_lop,
            'id_mon'=>$id_mon
        ]);
    }

    // Thống kê sinh viên
    function thongke(Request $req){
        $keyword = $req->input('keyword','');
        $lops = ThongKe::getAllSearch($keyword);
        return view('admin.thongke.thongke',['lops'=>$lops]);
    }
    function tkdetails($id){
        $thongkes = ThongKe::get($id);
        $lop = DB::table('lophocs')
            ->select('lophocs.name as lop','khoahocs.name as khoa')
            ->join('khoahocs', 'lophocs.id_khoahoc', '=', 'khoahocs.id')
            ->where('lophocs.id', '=', $id)
            ->get();
        return view('admin.thongke.tkdetails')->with(['index'=>1,'thongkes'=>$thongkes,'lop'=>$lop,'id_lop'=>$id]);
    }
    function detail(Request $req,$id,$id_lop){
        $id_lop = $req->id_lop;
        $id = $req->id;
        $detail = ThongKe::detail($id_lop);
        // $detail_2 = ThongKe::detail_2($id_lop,$id);
        // $detail_3 = ThongKe::detail_3($id_lop,$id);
        // $sobuoidihoc = ThongKe::sobuoidihoc2($id_lop,$id);
        // $sbdanghi = ThongKe::sobuoidanghi2($id_lop,$id);
        // $sbdimuon = ThongKe::sobuoidimuon2($id_lop,$id);
        $lop = DB::table('lophocs')
            ->select('lophocs.name as lop','khoahocs.name as khoa')
            ->join('khoahocs', 'lophocs.id_khoahoc', '=', 'khoahocs.id')
            ->where('lophocs.id', '=', $id_lop)
            ->get();
        $mon = DB::table('monhocs')
            ->select('monhocs.name as mon')
            ->where('monhocs.id', '=', $id)
            ->get();
        return view('admin.thongke.detail',[
            'detail'=>$detail,
            // 'detail_2'=>$detail_2,
            // 'detail_3'=>$detail_3,
            // 'sobuoidihoc'=>$sobuoidihoc,
            // 'sbdanghi'=>$sbdanghi,
            // 'sbdimuon'=>$sbdimuon,
            'lop'=>$lop,
            'id_lop'=>$id_lop,
            'mon'=>$mon,
            'id_mon'=>$id]);
    }
    function detail2(Request $req,$id,$id_lop,$id_mon){
        $id_lop = $req->id_lop;
        $id_mon = $req->id_mon;
        $id = $req->id;
        $detail2 = ThongKe::detail2($id,$id_mon);
        return view('admin.thongke.detail2',['detail2'=>$detail2]);
    }
    function detail3(Request $req,$id,$id_lop,$id_mon){
        $id_lop = $req->id_lop;
        $id_mon = $req->id_mon;
        $id = $req->id;
        $detail3_1 = ThongKe::detail3_1($id,$id_mon);
        $detail3_2 = ThongKe::detail3_2($id,$id_mon);
        $sobuoidihoc = ThongKe::sobuoidihoc($id,$id_mon);
        $sbdanghi = ThongKe::sbdanghi($id,$id_mon);
        $sbdimuon = ThongKe::sbdimuon($id,$id_mon);
        return view('admin.thongke.detail3',[
            'detail3_1'=>$detail3_1,
            'detail3_2'=>$detail3_2,
            'sobuoidihoc'=>$sobuoidihoc,
            'sbdanghi'=>$sbdanghi,
            'sbdimuon'=>$sbdimuon
        ]);
    }
    
    // Biểu đồ
    function bieudo(Request $req){
        $keyword = $req->input('keyword','');
        $lops = ThongKe::getAllSearch($keyword);
        return view('admin.thongke.bieudo',['lops'=>$lops]);
    }
    function bieudolop($id){
        $thongkes = ThongKe::get($id);
        return view('admin.thongke.bieudolop')->with(['index'=>1,'thongkes'=>$thongkes,'id_lop'=>$id]);
    }
    function bd_detail(Request $req,$id,$id_lop){
        $id_lop = $req->id_lop;
        $id_mon = $req->id;
        $result = ThongKe::countchart2($id_mon,$id_lop);
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
        return view('admin.thongke.bd_detail',$arr);
    }
}
