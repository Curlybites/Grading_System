<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function list(){
        $data = array('subject'=> DB::table('subjects')->orderBy('created_at','asc')->paginate(10));
        return view ('course.course',$data);
    }

    public function create(Request $request){

        // dd($request);

        $validated = $request->validate([
            "subj_name"=>['required'],
            "subj_code"=>['required'],
            "subj_unit"=>['required']
        ]);

        $prof = Subject::create($validated);

        return redirect('/Course')->with('message','Successfully Created');
    }

    // public function display(){
    //     return view ('course.course');
    // }
}
