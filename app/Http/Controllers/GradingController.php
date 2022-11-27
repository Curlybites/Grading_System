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


    public function updateScores(Request $request, Section $section){

    /* 
        $WH1 = $request->input('WH1');
        $WH2 = $request->input('WH2');
        $WH3 = $request->input('WH3');
        $WH4 = $request->input('WH4');
        $WH5 = $request->input('WH5');
        $WH6 = $request->input('WH6');
        $WH7 = $request->input('WH7');
        $WH8 = $request->input('WH8');
        $WH9 = $request->input('WH9');
        $WH10 = $request->input('WH10');
        $hpg = $request->input('WHTOTAL');
        $result = 0;
    */

    /* do{
            
            $WH1 + $WH2 + $WH3 + $WH4 + $WH5 + $WH6 +
            $WH7 + $WH8 + $WH9 + $WH10 = $hpg ; 

        }while($hpg == null);

        */
        $section=Section::find($request->id);
        $section->WH1=$request->WH1;
        $section->WH1=$request->WH2;
        $section->WH1=$request->WH3;
        $section->WH1=$request->WH4;
        $section->WH1=$request->WH5;
        $section->WH1=$request->WH6;
        $section->WH1=$request->WH7;
        $section->WH1=$request->WH8;
        $section->WH1=$request->WH9;
        $section->WH1=$request->WH10;
        $section->save();

         return back()->with('message','Successfully Created');

    }

}
