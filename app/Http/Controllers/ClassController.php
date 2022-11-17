<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\DashboardController;

class ClassController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "class_name"=>['required'],
            "class_num"=>['required'],
            "class_sec"=>['required'],
            "professor"=>['required']
        ]);

        $class = Classes::create($validated);

        return redirect('/Class')->with('message','Successfully Created');
    }


    public function classResult(){
        $prof = Professor::all();
        $subj = Subject::all();
        $data = Classes::paginate(15);
        return view ('classes.class',['classes' => $data]);
    }

    public function show($id){
        $data = Classes::findorFail($id);
        // dd($data);
        return view('classes.edit',['class' => $data]);
    }

    public function filterdata(){
        
        return view ('classes.filter');
    }
    

    // public function edit(Request $request, Classes $class){
    //     // dd($request);
    //     $validated = $request->validate([
    //         "class_name"=>['required'],
    //         "class_num"=>['required'],
    //         "class_sec"=>['required'],
    //     ]);
        
    //      $class->save($validated);

    //     return back()->with('message','Successfully Updated');
    // }

    
    public function update(Request $req, Classes $class){
        $class=Classes::find($req->id);
        $class->class_name=$req->class_name;
        $class->class_num=$req->class_num;
        $class->class_sec=$req->class_sec;
        $class->save();

         return back()->with('message','Successfully Created');

    }

    

    public function showClass(){
        
       $professor = Professor::all();
       $subject = Subject::all();
       return view('classes.class',['professor' => $professor],['subject' => $subject]);
    
    }


}
