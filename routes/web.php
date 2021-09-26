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
Route::get('admin/giaovien/editpc/{id_giaovien}',[GiaoVienController::class,'editpc'])->name('editpc');
Route::post('admin/giaovien/editpc/{id_giaovien}',[GiaoVienController::class,'updatepc']);
Route::get('/deletepc/{id_giaovien}',[GiaoVienController::class,'destroypc']);
// Sinh viên
Route::get('admin/sinhvien/sinhvien',[AdminController::class,'sinhvien'])->name('sinhvien');
Route::get('admin/sinhvien/themsv',[AdminController::class,'createsv']);
Route::post('admin/sinhvien/themsv',[AdminController::class,'storesv']);
Route::get('admin/sinhvien/editsv/{id}',[AdminController::class,'editsv']);
Route::post('admin/sinhvien/editsv/{id}',[AdminController::class,'updatesv']);
Route::get('/deletesv/{id}',[AdminController::class,'destroysv']);
// Thống kê sinh viên
Route::get('admin/thongke/thongke',[ThongKeController::class,'thongke'])->name('thongke');
Route::get('admin/thongke/tkdetails/{id}',[ThongKeController::class,'tkdetails']);
Route::get('admin/thongke/detail/{id_sinhvien}/{id}',[ThongKeController::class,'detail']);
Route::get('admin/thongke/bieudo',[ThongKeController::class,'bieudo'])->name('bieudo');
// Lịch sử điểm danh
Route::get('admin/ddhistory/view',[AdminController::class,'view'])->name('view');
Route::get('admin/ddhistory/details/{ngaydiemdanh}',[AdminController::class,'details'])->name('details');

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
Route::get('/createdd',[WebController::class,'createdd'])->name('createdd');
Route::post('/createdd',[WebController::class,'storedd'])->name('storedd');

