<?php

namespace App\Http\Controllers;
use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function registerForm(){
        return view('register');
    }
    public function registerData(registerRequest $req){
       User::create($req->validated());

       return redirect('/')->with('success','User registered successfully');
    }

    
}
