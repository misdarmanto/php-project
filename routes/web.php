<?php




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



 

Route::get('/about','\App\Http\Controllers\SiteController@about');
Route::get('/policies','\App\Http\Controllers\SiteController@policies');
Route::get('/tampilkegiatan','\App\Http\Controllers\SiteController@tampilkegiatan');
Route::get('/tampilloker','\App\Http\Controllers\SiteController@tampilloker');
Route::get('/directorialumni', '\App\Http\Controllers\SiteController@directorialumni');
Route::get('/latest', '\App\Http\Controllers\SiteController@latest');
Route::get('/view', '\App\Http\Controllers\SiteController@view');
Route::get('/year', '\App\Http\Controllers\SiteController@year');
Route::get('/authorsite', '\App\Http\Controllers\SiteController@authorsite');
Route::get('/division', '\App\Http\Controllers\SiteController@division');
Route::post('/download{file}', '\App\Http\Controllers\SiteController@download');

Route::get('/sites/{id}/viewyear', '\App\Http\Controllers\SiteController@viewyear');
Route::get('/sites/{id}/viewdivision', '\App\Http\Controllers\SiteController@viewdivision');


Route::get('/sites/viewrepository/{id}','\App\Http\Controllers\SiteController@viewrepository');
Route::get('/sites/{id}/viewauthor', '\App\Http\Controllers\SiteController@viewauthor');
Route::get('/sites/{id}/profilalumni', '\App\Http\Controllers\SiteController@profilalumni');


Route::get('/','\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','\App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','\App\Http\Controllers\AuthController@logout');
Route::get('/daftar','\App\Http\Controllers\AuthController@daftar')->name('daftar');
Route::post('/createaccount','\App\Http\Controllers\AuthController@createaccount');

//mahasiswa
Route::group(['middleware' => ['auth','checkRole:anggota']],function(){
		
		Route::get('/pengajuan', '\App\Http\Controllers\PengajuanController@index');
		Route::post('/pengajuan/create','\App\Http\Controllers\PengajuanController@create');
		Route::get('/pengajuan/insert','\App\Http\Controllers\PengajuanController@insert');
		
		
		Route::get('/pengajuan/disetujui', '\App\Http\Controllers\PengajuanController@disetujui');
		Route::get('/pengajuan/ditolak', '\App\Http\Controllers\PengajuanController@ditolak');
		Route::get('/pengajuan/{id}/revisi','\App\Http\Controllers\PengajuanController@revisi');
		Route::post('/pengajuan/{id}/updaterevisi','\App\Http\Controllers\PengajuanController@updaterevisi');

	
});


Route::group(['middleware' => ['auth','checkRole:admin']],function(){


		//Verifikasi
		Route::get('/verifikasi', '\App\Http\Controllers\VerifikasiController@index');
		Route::post('/verifikasi/create','\App\Http\Controllers\VerifikasiController@create');
		Route::get('/verifikasi/insert','\App\Http\Controllers\VerifikasiController@insert');
		Route::get('/verifikasi/{id}','\App\Http\Controllers\VerifikasiController@approved');
		
		Route::get('/approved/{id}','\App\Http\Controllers\VerifikasiController@approved');
		Route::get('/tolak/{id}','\App\Http\Controllers\VerifikasiController@tolak');
		Route::post('/verifikasi/{id}/updatealasan','\App\Http\Controllers\VerifikasiController@updatealasan');

		//user
		Route::get('/user', '\App\Http\Controllers\UserController@index');
		Route::post('/user/create','\App\Http\Controllers\UserController@create');
		Route::get('/user/{id}/delete','\App\Http\Controllers\UserController@delete');
		Route::post('/user/import','\App\Http\Controllers\UserController@importexcel')->name('user.import');
		Route::get('/user/{id}/edit','\App\Http\Controllers\UserController@edit');
		Route::post('/user/{id}/update','\App\Http\Controllers\UserController@update');

		//author
		Route::get('/author', '\App\Http\Controllers\AuthorController@index');
		Route::post('/author/create','\App\Http\Controllers\AuthorController@create');
		Route::get('/author/{id}/edit','\App\Http\Controllers\AuthorController@edit');
		Route::post('/author/{id}/update','\App\Http\Controllers\AuthorController@update');
		Route::get('/author/{id}/delete','\App\Http\Controllers\AuthorController@delete');


		//prodi
		Route::get('/prodi', '\App\Http\Controllers\ProdiController@index');
		Route::post('/prodi/create','\App\Http\Controllers\ProdiController@create');
		Route::get('/prodi/{id}/edit','\App\Http\Controllers\ProdiController@edit');
		Route::post('/prodi/{id}/update','\App\Http\Controllers\ProdiController@update');
		Route::get('/prodi/{id}/delete','\App\Http\Controllers\ProdiController@delete');

		//type
		Route::get('/type', '\App\Http\Controllers\TypeController@index');
		Route::post('/type/create','\App\Http\Controllers\TypeController@create');
		Route::get('/type/{id}/edit','\App\Http\Controllers\TypeController@edit');
		Route::post('/type/{id}/update','\App\Http\Controllers\TypeController@update');
		Route::get('/type/{id}/delete','\App\Http\Controllers\TypeController@delete');

		//Repository
		Route::get('/repo', '\App\Http\Controllers\RepoController@index');
		Route::post('/repo/create','\App\Http\Controllers\RepoController@create');
		Route::get('/repo/insert','\App\Http\Controllers\RepoController@insert');
		Route::get('/repo/{id}/edit','\App\Http\Controllers\RepoController@edit');
		Route::post('/repo/{id}/update','\App\Http\Controllers\RepoController@update');
		Route::get('/repo/{id}/delete','\App\Http\Controllers\RepoController@delete');
		Route::get('/repo/profile/{id}','\App\Http\Controllers\RepoController@profile');

});

Route::post('ckeditor/upload', '\App\Http\Controllers\CKEditorController@upload')->name('ckeditor.image-upload');



Route::group(['middleware' => ['auth','checkRole:admin,anggota']],function(){
	Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index');
	Route::get('/anggota/{id}/edit','\App\Http\Controllers\AnggotaController@edit');
	Route::get('/my-profile/{id}','\App\Http\Controllers\AnggotaController@edit');
});


Route::get('/{slug}',[
'uses' => '\App\Http\Controllers\SiteController@singlepost',
'as' => 'site.single.post'
]);
Route::get('/{slug2}',[
'uses' => '\App\Http\Controllers\SiteController@singlepost2',
'as' => 'site.single2.post'
]);