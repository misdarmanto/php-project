<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

     public function daftar()
    {
        return view('auth.daftar');
    }
    
    public function postlogin(Request $request)
    {
    	$input = $request->all();
  
        $this->validate($request, [
            'nim' => 'required',
            'password' => 'required',
        ]); 

        $fieldType = filter_var($request->nim, FILTER_VALIDATE_EMAIL) ? 'email' : 'nim';
        if(auth()->attempt(array($fieldType => $input['nim'], 'password' => $input['password'])))
        {
            return redirect('/dashboard');
        }else{
            return redirect('/')->with('error','Email-Address And Password Are Wrong.');
        }
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }

     public function createaccount(Request $request)
    {
        
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = "pengguna";
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();
        

        return redirect ('/login')->with('sukses','Data Berhasil Diinput ');

        }
        
}
