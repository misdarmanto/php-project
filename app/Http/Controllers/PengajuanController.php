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

class PengajuanController extends Controller
{
    public function index(Request $request)
    {
    	 
       if($request->has('cari')){
        $data_repo = \App\Models\Repo::where('repo', 'LIKE','%'.$request->cari.'%')->get();
      }else{
        $data_repo = Repo::select("*")->where("user_id","=",auth()->user()->id)->where("status","=","pending")->get();
      }
      
      $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();


      return view  ('pengajuan.index',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    
    }

    public function insert()
    {
      $data_repo = \App\Models\Repo::all();
      $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();
 
        return view('pengajuan.insert',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    }

    public function create(Request $request)
    {

        $repo = new \App\Models\Repo;
        $repo->year = date('Y',strtotime($request->date . "+0 days"));
        $repo->date = $request->date;
        $repo->id_author = $request->id_author; 
        $repo->id_prodi = $request->id_prodi;
        $repo->author2 = $request->author2;
        $repo->author3 = $request->author3;
        $repo->id_type = $request->id_type;
        $repo->title = $request->title;
        $repo->description = $request->description;
        $repo->user_id = auth()->user()->id;
        $repo->status = 'pending';
        if ($request->hasFile('file_repo')){ 
            $request->file('file_repo')->move('images/repo',$request->file('file_repo')->getClientOriginalName());
        $repo->file_repo = $request->file('file_repo')->getClientOriginalName();
        $repo->save();
        } 
        if ($request->hasFile('thumbnail')){ 
            $request->file('thumbnail')->move('images/repo',$request->file('thumbnail')->getClientOriginalName());
        $repo->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $repo->save();
        }

        $repo->save();

      return redirect ('/pengajuan')->with('sukses','Data Berhasil Diinput ');    
    }

     public function disetujui(Request $request)
    {
    
        $data_repo =Repo::select("*")->where("user_id","=",auth()->user()->id)->where("status","=","approved")->get();
        $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();
     
            return view  ('pengajuan.disetujui',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    }

     public function ditolak(Request $request)
    {
    
        $data_repo =Repo::select("*")->where("user_id","=",auth()->user()->id)->where("status","=","rejected")->get();
        $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();
     
            return view  ('pengajuan.ditolak',compact(['data_repo','data_type','data_author','data_prodi'])) ; return view  ('pengajuan.disetujui',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    }

     public function revisi($id)
    {
        $repo = \App\Models\Repo::find($id);
        return view('pengajuan/revisi',['repo' => $repo]);
    }

    public function updaterevisi(Request $request, $id)
    {
        $repo = \App\Models\Repo::find($id);
        $repo->status = 'pending';
        $repo->update($request->all());
        $repo->save();
       
        return redirect('pengajuan/ditolak')->with ('sukses','Data Berhasil Diupdate');
    }


}
