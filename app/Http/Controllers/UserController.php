<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Imports;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_user = \App\Models\User::where('name', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_user = \App\Models\User::all();
    	}
    	
    	
    	return view('user.index',['data_user' => $data_user]);
        
    }

     public function importexcel(Request $request)
        {
        Excel::import(new \App\Imports\UserImport,$request->file('data_user'));
                
             return redirect('/user');
                }


    public function create(Request $request)
    {
        

       	$user = new \App\Models\User;
        
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->role = 'anggota';
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();
    	

    	return redirect ('/user')->with('sukses','Data Berhasil Diinput ');

}

public function edit($id)
    {
        $user = \App\Models\User::find($id);
        return view('user/edit',['user' => $user]);
    }
    

    
 public function update(Request $request, $id)
    {
        $user = \App\Models\User::find($id);
        $user->update($request->all());
        
        $user->save();
       
        return redirect('/user')->with ('sukses','Data Berhasil Diupdate');
    }
    
     public function delete($id)
    {
    	$user = \App\Models\User::find($id);
    	$user->delete($user);
    	return redirect('/user')->with ('sukses','Data Berhasil dihapus');
    }

}
