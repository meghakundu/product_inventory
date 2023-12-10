<?php

namespace App\Http\Controllers;
use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function registerForm(){
        return view('register');
    }
    public function registerData(registerRequest $req){
        $user = User::create($req->validated());
       Auth::login($user);
       return redirect('/login')->with('success','User registered successfully');
    }

    
}
