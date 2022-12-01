<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculties;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;


class ProfessorController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "firstName"=>['required'],
            "lastName"=>['required'],
            "gender"=>['required'],
            "email"=>['required','email',Rule::unique('professors','email')]
        ]);

        $prof = Faculties::create($validated);

        return redirect('/Professor')->with('message','Successfully Created');
    }

    public function list(){

        $data = Faculties::paginate(5);
        return view ('professor.professor',['professors'=> $data]);
    }

    public function show($id){
        $data = Faculties::findorFail($id);
        // dd($data);
        return view('professor.profEdit',['prof' => $data]);
    }

    public function update(Request $req, Faculties $professor){
        $professor=Faculties::find($req->id);
        $professor->firstName=$req->firstName;
        $professor->lastName=$req->lastName;
        $professor->gender=$req->gender;
        $professor->email=$req->email;
        $professor->save();

         return redirect('/Professor')->with('message','Successfully Created');

    }
}
