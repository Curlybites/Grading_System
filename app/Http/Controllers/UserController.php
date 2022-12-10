<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // for login view 
    public function login(){
        if (view()->exists('user.login'))
        {
            return view('user.login');
        }else{
            return abort(404);
        }
       
    }




    // for log in process
    public function process(Request $request){
        $validated = $request->validate([
            "email"=>['required','email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Welcome');
        }else{
            return redirect('/failed')->with('message','login failed');
        }

    }





// for registration view route
    public function register(){
        return view('user.register');
    }


// for storing registration 
// the variable like firstname,lastname etc are came from from in the html not in the database.
   public function store(Request $request){
   // dd($request);
    $validated = $request->validate([
        "name"=>['required','min:4'],
        "username"=>['required', 'min:4'],
        "email"=>['required','email',Rule::unique('users','email')],
        "password" => 'required|confirmed|min:4'
    ]);
                            //Hash::make($validated['password']);
    $validated['password'] = md5($validated['password']);

    $user = User::create($validated); // create a variable and call the User model and then create ($validated);

    auth()->login($user);
    return redirect('/login')->with('message','Register successful');


   }


// for logout function
   public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('message','Log out successful');
   }


   public function test(){
    return view('user.loging');
   }






}
