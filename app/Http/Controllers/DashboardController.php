<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('student.dashboard');
    }

    public function student(){
    
         $data = Student::all();

         return view ('student.student',['students'=>$data]);
    
    }

}
