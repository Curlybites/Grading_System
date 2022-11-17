<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\DashboardController;
use Mockery\Matcher\Subset;

use function GuzzleHttp\Promise\each;

class ClassController extends Controller
{
    public function create(Request $request){
        // dd($request);
        $validated = $request->validate([
            "class_name"=>['required'],
            "class_num"=>['required'],
            "class_sec"=>['required'],
            "class_prof"=>[ 'required'],
            "class_subj"=>[ 'required']
        ]);

        $class = Classes::create($validated);

        return redirect('/Class')->with('message','Successfully Created');
    }

    public function update(Request $req, Classes $class, Subject $subj){
        $class=Classes::find($req->id);
        $class->class_name=$req->class_name;
        $class->class_num=$req->class_num;
        $class->class_sec=$req->class_sec;
        $class->class_prof=$req->class_prof;
        $class->class_subj=$req->class_subj;
        $class->save();

         return back()->with('message','Successfully Created');

    }

    public function showClass(){
        
        $professor = Professor::all();
        $subject = Subject::all();
        return view('classes.class',['professor' => $professor],['subject' => $subject]);
     
     }

     public function show($id){
        $data = Classes::findorFail($id); 
        return view ('classes.edit',['class' => $data]); 
     
    }

    public function showfilter($class_sec){
        $data = Classes::findorFail($class_sec);
        return view ('classes.filter',['subj' => $data]);
    }

    public function classResult(){
        $prof = Professor::all();
        $subj = Subject::all();
        $data = Classes::paginate(15);
        return view ('classes.class',['classes' => $data],['subj' => $subj] + ['professor' => $prof]);
    }

    public function filterdata(){
        
        return view ('classes.filter');
    }


    // public function pushdata(){
    //     $student = Student::get();

    //     foreach($student as $stud => $value ) {
    //         Classes::create([
    //             'student_no' =>$value->student_no,
    //             'first_name' =>$value->first_name,
    //             'last_name' =>$value->last_name,
    //             'age' =>$value->age,
    //             'gender' =>$value->gender,
    //             'contact_no' =>$value->contact_no,
    //             'email' =>$value->email,
    //         ]);

    //     return redirect('/filterdata')->with('message','Successfully Created');
        
    //     }
    // }
    
    
   

    

    


}
