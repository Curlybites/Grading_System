<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "class_name"=>['required'],
            "class_num"=>['required'],
            "class_sec"=>['required']
        ]);

        $class = Classes::create($validated);

        return redirect('/Class')->with('message','Successfully Created');
    }


    public function classResult(){

        $data = Classes::paginate(15);
        return view ('classes.class',['classes'=>$data]);
    }


}
