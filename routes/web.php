<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\WebController;
use App\Http\Controllers\AttendenceController;
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

// Người dùng
Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Admin 
Route::get('admin/',[AdminController::class,'index'])->name('admin.home');
Route::get('admin/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin/login',[AdminLoginController::class,'login']);
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
Route::get('admin/register',[AdminController::class,'register'])->name('register');
Route::get('admin/nganh/nganh',[AdminController::class,'nganh'])->name('nganh');
Route::get('admin/khoa/khoa',[AdminController::class,'khoa'])->name('khoa');
Route::get('admin/mon/mon',[AdminController::class,'mon'])->name('mon');
// Ngành
Route::get('admin/nganh/themnganh',[AdminController::class,'createnganh']);
Route::post('admin/nganh/themnganh',[AdminController::class,'storenganh']);
Route::get('admin/nganh/editnganh/{id}',[AdminController::class,'editnganh']);
Route::post('admin/nganh/editnganh/{id}',[AdminController::class,'updatenganh']);
Route::get('/deletenganh/{id}',[AdminController::class,'destroynganh']);
// Khóa
Route::get('admin/khoa/themkhoa',[AdminController::class,'createkhoa']);
Route::post('admin/khoa/themkhoa',[AdminController::class,'storekhoa']);
Route::get('admin/khoa/editkhoa/{id}',[AdminController::class,'editkhoa']);
Route::post('admin/khoa/editkhoa/{id}',[AdminController::class,'updatekhoa']);
Route::get('/deletekhoa/{id}',[AdminController::class,'destroykhoa']);

// Điểm danh
Route::get('/index',[AttendenceController::class,'index'])->name('attendence_index');
Route::get('/view',[AttendenceController::class,'view'])->name('attendence_view');
Route::post('/post',[AttendenceController::class,'post'])->name('attendence_post');

