<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ThongKeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\GiaoVienController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin 
Route::get('admin/',[AdminController::class,'index'])->name('admin.home');
Route::get('admin/edit/{id}',[AdminController::class,'edit']);
Route::post('admin/edit/{id}',[AdminController::class,'update']);
Route::get('admin/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin/login',[AdminLoginController::class,'login']);
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
// Ngành
Route::get('admin/nganh/nganh',[AdminController::class,'nganh'])->name('nganh');
Route::get('admin/nganh/themnganh',[AdminController::class,'createnganh']);
Route::post('admin/nganh/themnganh',[AdminController::class,'storenganh']);
Route::get('admin/nganh/editnganh/{id}',[AdminController::class,'editnganh']);
Route::post('admin/nganh/editnganh/{id}',[AdminController::class,'updatenganh']);
Route::get('/deletenganh/{id}',[AdminController::class,'destroynganh']);
// Khóa
Route::get('admin/khoa/khoa',[AdminController::class,'khoa'])->name('khoa');
Route::get('admin/khoa/themkhoa',[AdminController::class,'createkhoa']);
Route::post('admin/khoa/themkhoa',[AdminController::class,'storekhoa']);
Route::get('admin/khoa/editkhoa/{id}',[AdminController::class,'editkhoa']);
Route::post('admin/khoa/editkhoa/{id}',[AdminController::class,'updatekhoa']);
Route::get('/deletekhoa/{id}',[AdminController::class,'destroykhoa']);
// Môn
Route::get('admin/mon/mon',[AdminController::class,'mon'])->name('mon');
Route::get('admin/mon/themmon',[AdminController::class,'createmon']);
Route::post('admin/mon/themmon',[AdminController::class,'storemon']);
Route::get('admin/mon/editmon/{id}',[AdminController::class,'editmon']);
Route::post('admin/mon/editmon/{id}',[AdminController::class,'updatemon']);
Route::get('/deletemon/{id}',[AdminController::class,'destroymon']);
// Lớp
Route::get('admin/lop/lop',[AdminController::class,'lop'])->name('lop');
Route::get('admin/lop/view/{id}',[AdminController::class,'viewlop'])->name('viewlop');
Route::get('admin/lop/themsvlop/{id_lop}',[AdminController::class,'themsvlop']);
Route::get('/themvaolop/{id_lop}/{id}',[AdminController::class,'themvaolop']);
Route::get('admin/lop/themlop',[AdminController::class,'createlop']);
Route::post('admin/lop/themlop',[AdminController::class,'storelop']);
Route::get('admin/lop/editlop/{id}',[AdminController::class,'editlop']);
Route::post('admin/lop/editlop/{id}',[AdminController::class,'updatelop']);
Route::get('/deletelop/{id}',[AdminController::class,'destroylop']);
// Giảng viên
Route::get('admin/giaovien/giaovien',[GiaoVienController::class,'giaovien'])->name('giaovien');
Route::get('admin/giaovien/themgv',[GiaoVienController::class,'creategv']);
Route::post('admin/giaovien/themgv',[GiaoVienController::class,'storegv']);
Route::get('admin/giaovien/editgv/{id}',[GiaoVienController::class,'editgv']);
Route::post('admin/giaovien/editgv/{id}',[GiaoVienController::class,'updategv']);
// Phân công
Route::get('admin/giaovien/phancong',[GiaoVienController::class,'phancong'])->name('phancong');
Route::get('admin/giaovien/pcgv',[GiaoVienController::class,'createpc']);
Route::post('admin/giaovien/pcgv',[GiaoVienController::class,'storepc']);
Route::get('admin/giaovien/editpc/{id_giaovien}/{id_lophoc}/{id_monhoc}',[GiaoVienController::class,'editpc'])->name('editpc');
Route::post('admin/giaovien/editpc/{id_giaovien}/{id_lophoc}/{id_monhoc}',[GiaoVienController::class,'updatepc']);
Route::get('/deletepc/{id_giaovien}/{id_lophoc}/{id_monhoc}',[GiaoVienController::class,'destroypc']);
// Sinh viên
Route::get('admin/sinhvien/sinhvien',[AdminController::class,'sinhvien'])->name('sinhvien');
Route::get('admin/sinhvien/themsv',[AdminController::class,'createsv']);
Route::post('admin/sinhvien/themsv',[AdminController::class,'storesv']);
Route::get('admin/sinhvien/editsv/{id}',[AdminController::class,'editsv']);
Route::post('admin/sinhvien/editsv/{id}',[AdminController::class,'updatesv']);
Route::get('/deletelopsv/{id}',[AdminController::class,'destroylopsv']);
Route::get('/deletesv/{id}',[AdminController::class,'destroysv']);
// Lịch sử điểm danh
Route::get('admin/ddhistory/view',[ThongKeController::class,'view'])->name('view');
Route::get('admin/ddhistory/viewmon/{id}',[ThongKeController::class,'viewmon']);
Route::get('admin/ddhistory/details/{id_lop}/{id}',[ThongKeController::class,'details']);
Route::get('admin/ddhistory/detail/{id_lop}/{id_mon}/{ngaydiemdanh}',[ThongKeController::class,'dddetail']);
// Thống kê sinh viên
Route::get('admin/thongke/thongke',[ThongKeController::class,'thongke'])->name('thongke');
Route::get('admin/thongke/tkdetails/{id}',[ThongKeController::class,'tkdetails']);
Route::get('admin/thongke/detail/{id_lop}/{id}',[ThongKeController::class,'detail']);
Route::get('admin/thongke/detail2/{id_lop}/{id_mon}/{id}',[ThongKeController::class,'detail2']);
Route::get('admin/thongke/detail3/{id_lop}/{id_mon}/{id}',[ThongKeController::class,'detail3']);
// Biểu đồ
Route::get('admin/thongke/bieudo',[ThongKeController::class,'bieudo'])->name('bieudo');
Route::get('admin/thongke/bieudolop/{id}',[ThongKeController::class,'bieudolop']);
Route::get('admin/thongke/bd_detail/{id_lop}/{id}',[ThongKeController::class,'bd_detail']);

// Người dùng
Route::get('/',[WebController::class,'index'])->name('home');
Route::get('edit/{id}',[WebController::class,'edit']);
Route::post('edit/{id}',[WebController::class,'update']);
Route::get('editpass/{id}',[WebController::class,'editpass']);
Route::post('editpass/{id}',[WebController::class,'updatepass']);
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// Điểm danh
Route::get('/diemdanh',[WebController::class,'diemdanh'])->name('diemdanh');
Route::get('/createdd/{id_lophoc}',[WebController::class,'createdd'])->name('createdd');
Route::post('/createdd/{id_lophoc}',[WebController::class,'storedd'])->name('storedd');
Route::get('/history',[WebController::class,'history'])->name('history');
Route::get('/detail/{id_lop}/{id_mon}/{ngaydiemdanh}',[WebController::class,'detail']);
Route::post('/detail/{id_lop}/{id_mon}/{ngaydiemdanh}',[WebController::class,'ddedit'])->name('ddedit');

