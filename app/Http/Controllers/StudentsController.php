<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\std_registrations;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;


class StudentsController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "regno"=>['required'],
            "name"=>['required'],
            "username"=>['required'],
            "phone"=>['required'],
            "password"=>['required'],
            "sem"=>['required'],
            "dept"=>['required'],
            "address"=>['required'],
            "utype"=>['required'],
            "email"=>['required','email',Rule::unique('std_registrations','email')]
            
        ]);

        $stud = std_registrations::create($validated);

        return redirect('/Student')->with('message','Successfully Created');
    }

    public function studlist(){

     //   $data = std_registrations::paginate(15);
        $data = std_registrations::all();     
           return view ('student.student',['students'=>$data]);
    }


    public function index(){

       $data = std_registrations::paginate(15);    
    //    $data = Student::table('students')->Paginate(5);
       return view ('student.index',['students'=>$data]);

    //    return view('student.index', [
    //     'Student' =>Student::table('Student')->paginate(15)]);

    }


    public function admin(){

        return view ('admin.index');
    }

    public function show($id){
        $data = std_registrations::findorFail($id);
        // dd($data);
        return view('student.studentEdit',['stud' => $data]);
    }

    public function update(Request $req, std_registrations $student){
        $student=std_registrations::find($req->id);
        $student->studentID=$req->studentID;
        $student->firstName=$req->firstName;
        $student->lastName=$req->lastName;
        $student->age=$req->age;
        $student->gender=$req->gender;
        $student->contact_no=$req->contact_no;
        $student->email=$req->email;
        $student->save();

         return redirect('/Student')->with('message','Successfully Created');

    }


}
    