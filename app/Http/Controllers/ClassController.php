<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Students;
use App\Models\Subject;
use App\Models\Section;
use App\Models\Faculties;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\DashboardController;

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

    public function filtercreate(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "studentID"=>['required'],
            "firstName"=>['required'],
            "lastName"=>['required'],
            "age"=>[ 'required'],
            "gender"=>[ 'required'],
            "email"=>[ 'required'],
            "contact_no"=>[ 'required'],
            "class_sec"=>[ 'required'],
            "class_subj"=>[ 'required']
        ]);

        $section = Section::create($validated);

        return back()->with('message','Successfully Created');
    }

    public function classResult(){
        $prof = Faculties::all();
        $subj = Subject::all();
        $data = Classes::paginate(5);
        return view ('classes.class',['classes' => $data],['subj' => $subj]+['professor' => $prof]);
    }


    public function show($id){
        $data = Classes::findorFail($id);
        $list = Faculties::all();
        $subject = Subject::all();
        
        return view('classes.edit',['class' => $data],['professor'=>$list]+['subject'=>$subject]);
    }

    public function test($id){
        $data = Classes::findorFail($id);
        $list = Section::all();
        // dd($data);
        return view('classes.filter',['class' => $data]+['list'=>$list]);
    }


    public function filterdata(){
        
        return view ('classes.filter');
    }
    
    
    public function update(Request $request, Classes $class){
        $class=Classes::find($request->id);
        $class->class_name=$request->class_name;
        $class->class_num=$request->class_num;
        $class->class_sec=$request->class_sec;
        $class->class_prof=$request->class_prof;
        $class->class_subj=$request->class_subj;
        $class->save();

         return back()->with('message','Successfully Created');

    }

    

    public function showClass(){
        
       $professor = Faculties::all();
       $subject = Subject::all();
       return view('classes.class',['professor' => $professor],['subject' => $subject]);
    
    }

    public function getStudent() {
        $p=Students::all();
        return response()->json($p);
    }

    



}
