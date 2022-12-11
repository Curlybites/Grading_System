<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_registration;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;


class ProfessorController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            "name"=>['required'],
            "username"=>['required'],
            "phone"=>['required'],
            "password"=>['required'],
            "address"=>['required'],
            "lecturer"=>['required'],
            "idno"=>['required'],
            "utype"=>['required'],
            "email"=>['required','email',Rule::unique('t_registration','email')]
        ]);

        $prof = t_registration::create($validated);

        return redirect('/Professor')->with('message','Successfully Created');
    }

    public function list(){

        $data = t_registration::paginate(5);
        return view ('professor.professor',['professors'=> $data]);
    }

    public function show($id){
        $data = t_registration::findorFail($id);
        // dd($data);
        return view('professor.profEdit',['prof' => $data]);
    }

    public function update(Request $req, t_registration $professor){
        $professor=t_registration::find($req->id);
        $professor->name=$req->name;
        $professor->username=$req->username;
        $professor->phone=$req->phone;
        $professor->password=$req->password;
        $professor->address=$req->address;
        $professor->lecturer=$req->lecturer;
        $professor->idno=$req->idno;
        $professor->utype=$req->utype;
        $professor->email=$req->email;
        $professor->save();

         return redirect('/Professor')->with('message','Successfully Created');

    }
}
