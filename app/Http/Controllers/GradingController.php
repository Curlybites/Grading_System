<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Subject;
use App\Models\Professor;
use App\Models\Section;
use App\Models\Classes;
use Illuminate\Support\Facades\Request as Input;
use Illuminate\Http\Request;

class GradingController extends Controller
{
    public function grading_list()
    {
        $section = Classes::all();
        $data = Section::where('class_sec',Input::get('sections'))->get();

        return view('grading.tvl', ['list' => $data]+['section' => $section]);
    }

    // public function tvledit(){
        
    //     return view ('grading.editTvl');
    // }
    
    public function findStudent($id){

        $data = Section::findorfail($id);
        $list = Section::all();

        return view('grading.editTvl',['sec' => $data],['list' => $list]);

    }


    public function updateScores(Request $request){
        // dd($request);
            $validated = $request->validate([
                "WS1"=>[ 'required'],
                "WS2"=>[ 'required'],
                "WS3"=>[ 'required'],
                "WS4"=>[ 'required'],
                "WS5"=>[ 'required'],
                "WS6"=>[ 'required'],
                "WS7"=>[ 'required'],
                "WS8"=>[ 'required'],
                "WS9"=>[ 'required'],
                "WS10"=>[ 'required'],
                "PS1"=>[ 'required'],
                "PS2"=>[ 'required'],
                "PS3"=>[ 'required'],
                "PS4"=>[ 'required'],
                "PS5"=>[ 'required'],
                "PS6"=>[ 'required'],
                "PS7"=>[ 'required'],
                "PS8"=>[ 'required'],
                "PS9"=>[ 'required'],
                "PS10"=>[ 'required'],
                "exam"=>['required'],
                'grade'=>['required']
            ]);

            $section = Section::create($validated);
    
            return redirect('/Grading')->with('message','Successfully Created');

       }
}
