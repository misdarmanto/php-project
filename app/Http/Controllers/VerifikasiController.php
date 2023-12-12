<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use PDF;
use App\Models\Repo;
use App\Models\User;
use DB;
use App\Imports;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Carbon\Carbon;

class VerifikasiController extends Controller
{
    public function index(Request $request)
    {
    	 
       if($request->has('cari')){
        $data_repo = \App\Models\Repo::where('repo', 'LIKE','%'.$request->cari.'%')->get();
      }else{

        $data_repo = Repo::select("*")->where("status","=","pending")->get();
      }
      
      $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();


      return view  ('verifikasi.index',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    
    }

     public function approved($id) {

      $data = \App\Models\Repo::find($id);
      $data->status='approved';
      $data->save();
      return redirect()->back();
       
      }

      public function tolak($id)
    {
        $repo = \App\Models\Repo::find($id);
        return view('verifikasi/alasan',['repo' => $repo]);
    }

     public function updatealasan(Request $request, $id)
    {
        $repo = \App\Models\Repo::find($id);
        $repo->update($request->all());
         $repo->status='rejected';
        
        $repo->save();
       
        return redirect('/verifikasi')->with ('sukses','Data Berhasil Diupdate');
    }

}
