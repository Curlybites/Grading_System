<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeAndSection;
use App\Models\Students;
use App\Models\TrackAndStrand;
use App\Models\Faculties;
use App\Models\Subjects;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;
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

    public function test($id){
        $data = gradeandsection::findorFail($id);
        $list = Students::all();
        // dd($data);
        return view('classes.filter',['class' => $data]+['list'=>$list]);
    }
}
