<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\UserController;
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

//  Người dùng
Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//  Admin 
Route::get('admin/',[AdminController::class,'index'])->name('admin.home');
Route::get('admin/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin/login',[AdminLoginController::class,'login']);
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

//  Điểm danh
Route::get('/index',[AttendenceController::class,'index'])->name('attendence_index');
Route::get('/view',[AttendenceController::class,'view'])->name('attendence_view');
Route::post('/post',[AttendenceController::class,'post'])->name('attendence_post');

