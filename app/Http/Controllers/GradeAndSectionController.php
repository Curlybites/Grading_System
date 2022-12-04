<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeAndSection;
use App\Models\Students;
use App\Models\TrackAndStrand;
use App\Models\Faculties;
use App\Models\Subjects;
use App\Models\Classes;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as Input;

class GradeAndSectionController extends Controller
{
    public function index()
    {
        
        $gandsec = gradeandsection::all();
        $tands = TrackAndStrand::all();
        $facs = Faculties::all();
        $subs = Subjects::all();
        $stud = Students::all();
        return view('classes.class',['gradeandsections'=>$gandsec]+['trackandstrand'=>$tands]+['faculties'=>$facs]+['subjects'=>$subs]+['students'=>$stud]);
        // return view('admin.gradeandsection.gradeandsection')->with('gradeandsections', $gandsec);
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

        $section = GradeAndSection::create($validated);

        return back()->with('message','Successfully Created');
    }

    public function classResult(){
        $prof = Faculties::all();
        $subj = Subjects::all();
        $data = Classes::paginate(5);
        return view ('classes.class',['classes' => $data],['subj' => $subj]+['professor' => $prof]);
    }


    public function show($id){
        $data = GradeAndSection::findorFail($id);
        $list = Faculties::all();
        $subject = Subjects::all();
        
        return view('classes.edit',['class' => $data],['professor'=>$list]+['subject'=>$subject]);
    }

    public function test($id){
        $data = GradeAndSection::findorFail($id);
        $list = Students::all();
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
       $subject = Subjects::all();
       return view('classes.class',['professor' => $professor],['subject' => $subject]);
    
    }

    public function getStudent() {
        $p=Students::all();
        return response()->json($p);
    }

    public function grading_list()
    {
        $section = GradeAndSection::all();
        $data = Students::where('sectionID',Input::get('sections'))->get();

        return view('grading.tvl', ['list' => $data]+['section' => $section]);
    }
}
