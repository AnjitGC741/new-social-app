<?php

namespace App\Http\Controllers;
use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class first extends Controller
{
    public function forDashboard()
    {
        return view('dashboard');
    }
    public function forLoginPage()
    {
        return view('loginPage');
    }
    public function forSignupPage()
    {
        return view('signupPage');
    }
    public function signupUser( Request $req)
    {   
        $req->validate([
            'userName' => 'required',
            'email' => 'required|unique:homes',
            'password'=>'required',
        ]);
            home::create([
                'userName'=> $req->userName,
                'email'=>  $req->email,
                'password'=>Hash::make($req->password),
            ]);
            return view('dashboard');

    }
    public function loginUser(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password'=>'required',
        ]);
        $user = home::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                return redirect('/dashboard');
            }else{
                return back()->with('fail','Password not matched');
            }
            
        }
        else{
            return back()->with('fail','user not found');
        }
       
    }
    
}
