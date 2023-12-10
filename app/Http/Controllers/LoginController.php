<?php
namespace App\Http\Controllers;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginform(){
        return view('login');
    }
    
    public function loginperform(loginRequest $request)
    {
        $this->validate($request, ['name' => 'required|string', 'password' => 'required']);
        $user = $request->all();
        Auth::attempt($user);
        return redirect('/dashboard');
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

    
}
