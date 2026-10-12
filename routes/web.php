<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::get('/', [StudentController::class, 'home']);
Route::get('/login', [StudentController::class, 'login']);




Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/login',[AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/settings', [SettingsController::class, 'settings']);
Route::post('/admin/settings/updates', [SettingsController::class, 'updates']);
Route::get('/admin/settings/updates', [SettingsController::class, 'edit']);
Route::get('/admin/students', [AdminController::class, 'students']);
Route::get('/admin/teachers', [AdminController::class, 'teachers']);
Route::get('/admin/courses', [AdminController::class, 'courses']);
Route::get('/admin/exams', [AdminController::class, 'exams']);
Route::get('/admin/results', [AdminController::class, 'results']);
Route::get('/admin/addexam', [AdminController::class, 'addexam']);
Route::get('/admin/addresult', [AdminController::class, 'addresult']);
Route::get('/admin/editexam/{id}', [AdminController::class, 'editexam']);
Route::get('/admin/addstudent', [AdminController::class, 'addstudent']);
Route::get('/admin/editstudent/{id}', [AdminController::class, 'editstudent']);
Route::get('/admin/deletestudent/{id}', [AdminController::class, 'deletestudent']);
Route::get('/admin/addteacher', [AdminController::class, 'addteacher']);
Route::get('/admin/addcourse', [AdminController::class, 'addcourse']);
Route::get('/admin/editteacher/{id}', [AdminController::class, 'editteacher']);
Route::get('/admin/editcourse/{id}', [AdminController::class, 'editcourse']);
Route::post('/admin/addteacher', [AdminController::class, 'storeteacher']);
Route::post('/admin/addexam', [AdminController::class, 'storeexam']);
Route::post('/admin/addresult', [AdminController::class, 'storeresult']);
Route::post('/admin/addcourse', [AdminController::class, 'storecourse']);
Route::get('/admin/deleteteacher/{id}', [AdminController::class, 'deleteteacher']);
Route::post('/admin/addstudent', [AdminController::class, 'store']);
Route::post('/admin/updatestudent/{id}', [AdminController::class, 'updatestudent']);
Route::post('/admin/updateteacher/{id}', [AdminController::class, 'updateteacher']);
Route::post('/admin/updatecourse/{id}', [AdminController::class, 'updatecourse']);
Route::get('/admin/deletecourse/{id}', [AdminController::class, 'deletecourse']);
Route::post('/admin/updateexam/{id}', [AdminController::class, 'updateexam']);
Route::get('/admin/deleteexam/{id}', [AdminController::class, 'deleteexam']);