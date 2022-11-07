<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[StudentsController::class,'index'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login/process',[UserController::class,'process']);
Route::get('/register',[UserController::class,'register']);
Route::post('/store',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout']);

// this route for list of student in student nav
Route::get('/studentlist',[StudentsController::class,'studlist']);


// this route is for navbar links
Route::get('/Dashboard',[DashboardController::class,'dashboard']);
Route::get('/Class',[DashboardController::class,'class']);
Route::get('/Course',[DashboardController::class,'course']);
Route::get('/Professor',[DashboardController::class,'professor']);
Route::get('/Student',[DashboardController::class,'student']);
Route::get('/Grading',[DashboardController::class,'grading']);
Route::get('/Setting',[DashboardController::class,'setting']);

/*************************************** Route for Create and Display Function for Class  ************************************/
Route::get('/add/student',[StudentsController::class,'create']);
Route::post('/store-class',[ClassController::class,'create']);
Route::get('/Class',[ClassController::class,'classResult']);

/*************************************** Route for Create and Display Function for Professor  ************************************/
Route::get('/Professor',[ProfessorController::class,'list']);
Route::post('/Professor/create',[ProfessorController::class,'create']);
