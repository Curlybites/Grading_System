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
    
    public function findStudent($student_no){

        $data = Section::findorfial($student_no);
        $list = Section::all();

        return view('grading.editTvl',['sec' => $data],['list' => $list]);

    }


    public function storeGrade(){


    }

}
