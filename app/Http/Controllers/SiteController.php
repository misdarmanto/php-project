<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Stroage;

class SiteController extends Controller
{
    public function home()
    {

        //$pegawais = Pegawai::orderBy('nama', 'asc')->limit(10)->get();
        $loker=Loker::orderBy('created_at','desc')->where("category","=","kegiatan")->limit(5)->get();
        $loker1=Loker::orderBy('created_at','desc')->where("category","=","loker")->limit(5)->get();
        //$loker= Loker::limit(3)->get();
       
    	return view  ('sites.home',compact(['loker','loker1'])) ;

     }

    

     public function about()
    {
    	return view  ('sites.about') ;

     }
      public function policies()
    {
        return view  ('sites.policies') ;

     }

     

     public function tampilkegiatan()
    {
        $kegiatan=Loker::select("*")->where("category","=","kegiatan")->get();
        return view  ('sites.tampilkegiatan',compact(['kegiatan'])) ;

     }

     public function singlepost($slug)
     {
     	$loker= Loker::where('slug','=',$slug)->limit(4)->first();

        
        $loker1=Loker::orderBy('created_at','desc')->limit(5)->get();
     	return view ('sites.singlepost',compact(['loker','loker1']));
     }
     public function directorialumni()
     {
        
        $data_anggota = \App\Models\Anggota::all();
            
        
        
        
        return view('sites.directorialumni',['data_anggota' => $data_anggota]);
     }

     public function latest(Request $request)
     {


        
         if ($request->has('search')) {
            $data_repo= \App\Models\Repo::where('title','LIKE','%'.$request->search.'%')->paginate(4);

        } else{
            $data_repo = \App\Models\Repo::orderBy('created_at','desc')->paginate(4); 
        }

        

          
        
            
        return view('sites.latest',compact('data_repo'));
     }

     public function viewrepository($id)
    {

        
        $data_repo = \App\Models\Repo::find($id);
       $data_author = \App\Models\Author::all();
        $data_type = \App\Models\Type::all();
        $data_prodi = \App\Models\Prodi::all();
            return view  ('sites.viewrepository',compact(['data_repo','data_author','data_type','data_prodi'])) ;
    }

     public function view( Request $request)
     {
        
        if ($request->has('search')) {
            $data_repo= \App\Models\Repo::where('title','LIKE','%'.$request->search.'%');
        }


        $data_repo = \App\Models\Repo::all();
            
        
        
        
        return view('sites.view',['data_repo' => $data_repo]);
     }

        public function viewyear($year)
        {
        
       
     
        $data_repo = \App\Models\Repo::select("*")->where("year","=",$year)->paginate(4);
       $data_author = \App\Models\Author::orderBy('created_at','desc')->paginate(4);
        $data_type = \App\Models\Type::orderBy('created_at','desc')->paginate(4);
        $data_prodi = \App\Models\Prodi::orderBy('created_at','desc')->paginate(4);
            return view  ('sites.viewyear',compact(['data_repo','data_author','data_type','data_prodi'])) ;
        
         }
     public function year( Request $request)
     {
        
        if ($request->has('search')) {
            $data_repo= \App\Models\Repo::where('title','LIKE','%'.$request->search.'%');
        }


        $data_repo = \App\Models\Repo::select('year')->distinct()->get(); 
            
        
        
        
        return view('sites.year',['data_repo' => $data_repo]);
     }

    public function authorsite( Request $request)
     {
        
        if ($request->has('search')) {
            $data_author= \App\Models\Author::where('author','LIKE','%'.$request->search.'%');
        }

        
        
        $data_repo = \App\Models\Repo::select('id_author')->distinct()->get();   
      
        
            return view('sites.author',compact(['data_repo'])) ;;
     }
     public function division( Request $request)
     {
        
        if ($request->has('search')) {
            $data_author= \App\Models\Author::where('author','LIKE','%'.$request->search.'%');
        }

        
        
        $data_repo = \App\Models\Repo::select('id_prodi')->distinct()->get();   
      
        
            return view('sites.division',compact(['data_repo'])) ;;
     }

    

        public function viewdivision($id)
    {

        
        $author = \App\Models\Prodi::find($id);
         
         
                
                return view('sites.viewdivision',['author' => $author]);
    } 
     public function viewauthor($id)
    {

         
        $data_author = \App\Models\Author::find($id);
         
         
                
                return view('sites.viewauthor',['data_author' => $data_author]);
    }   

     public function download(Request $request, $file)
    {

        
        return response()->download(public_path('images/'.$file_repo));
    }   






     public function browseyear($id)
    {
        $anggota = \App\Models\Repo::find($id);
                return view('sites.profilalumni',['anggota' => $anggota]);
    }
}
