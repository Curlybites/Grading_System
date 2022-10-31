<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentsController extends Controller
{
    public function index(){

       $data = Student::paginate(15);    
    //    $data = Student::table('students')->Paginate(5);
       return view ('student.index',['students'=>$data]);

    //    return view('student.index', [
    //     'Student' =>Student::table('Student')->paginate(15)]);

    }

    public function studlist(){

        $data = Student::paginate(15);   
           return view ('student.student',['students'=>$data]);
    }



    public function admin(){

        return view ('admin.index');
    }



    // this section is for CRUDING OF STUDENTS

    public function create(){
        return "Hello world";
    }

    public function edit(){
        
    }

    

}
    