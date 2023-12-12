<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

class RepoController extends Controller
{
    public function index(Request $request)
     {
    	if($request->has('cari')){
    		$data_repo = \App\Models\Repo::where('repo', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_repo = \App\Models\Repo::select("*")->where("status","=","approved")->get();
    	}
    	
    	$data_author = \App\Models\Author::all();
    	$data_type = \App\Models\Type::all();
    	$data_prodi = \App\Models\Prodi::all();

    	
        


       
    	return view  ('repo.index',compact(['data_repo','data_type','data_author','data_prodi'])) ;



    	//return view('repo.index',['data_repo' => $data_repo]);
        
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


    	return redirect ('/repo')->with('sukses','Data Berhasil Diinput ');


    	
    	
    }

     public function insert()
    {
      $data_repo = \App\Models\Repo::all();
      $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();

        
        
        return view('repo.insert',compact(['data_repo','data_type','data_author','data_prodi'])) ;
    }

    public function edit($id)
    {
    	$repo = \App\Models\Repo::find($id);
      if ($request->hasFile('file_repo')){ 
            $request->file('file_repo')->move('images/repo',$request->file('file_repo')->getClientOriginalName());
        $repo->file_repo = $request->file('file_repo')->getClientOriginalName();
        $repo->save();
        }
    	return view('repo/edit',['repo' => $repo]);
    }

    public function update(Request $request, $id)
    {
    	$repo = \App\Models\Repo::find($id);
    	$repo->update($request->all());
        
        $repo->save();
        
    	return redirect('/repo')->with ('sukses','Data Berhasil Diupdate');
    }


     public function profile($id)
    {

        
        $data_repo = \App\Models\Repo::find($id);
      $data_author = \App\Models\Author::all();
      $data_type = \App\Models\Type::all();
      $data_prodi = \App\Models\Prodi::all();
      $user = \App\Models\User::all();

        
        
        return view('repo.profile',compact(['data_repo','data_type','data_author','data_prodi','user'])) ;
    }

     public function delete($id)
    {
    	$repo = \App\Models\Repo::find($id);
    	$repo->delete($repo);
    	return redirect('/repo')->with ('sukses','Data Berhasil dihapus');
    }
}
