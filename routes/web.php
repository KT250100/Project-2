<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[AttendenceController::class,'index'])->name('attendence_index');
Route::get('/view',[AttendenceController::class,'view'])->name('attendence_view');
Route::post('/post',[AttendenceController::class,'post'])->name('attendence_post');
