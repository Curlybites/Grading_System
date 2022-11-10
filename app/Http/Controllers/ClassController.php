<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use Illuminate\Support\Facades\Redis;

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

    public function show($id){
        $data = Classes::findorFail($id);
        // dd($data);
        return view('classes.edit',['class' => $data]);
    }

    public function edit(Request $request, Classes $class){
        // dd($request);
        $validated = $request->validate([
            "class_name"=>['required'],
            "class_num"=>['required'],
            "class_sec"=>['required'],
        ]);

         $class->update($validated);

        return back()->with('message','Successfully Updated');
    }

    

}
