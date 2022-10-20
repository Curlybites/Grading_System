<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentsController extends Controller
{
    public function index(){

       $data = Student::all();

       return view ('student.index',['students'=>$data]);

    }



    public function admin(){

        return view ('admin.index');
    }

    

}
    