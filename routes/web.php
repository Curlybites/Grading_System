<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

// Route::get('/', function () {
//     return view('student.index', [StudentsController::class,'index']);
// });

// Route::get('/',function(){
//     return view ('student.index',[StudentsController::class,'index']);
// });


Route::get('/', [StudentsController::class,'index'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login/process',[UserController::class,'process']);
Route::get('/register',[UserController::class,'register']);
Route::post('/store',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout']);
// Route::get('/', [StudentsController::class,'admin'])->middleware('auth');