@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Tambah Data Repository</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Repository</h3>
								</div>

									<form action="/repo/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="panel-body">

							<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal </label>
					    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>

		

					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Author 1</label>

					    	<input type="text" name="id_author" list="author">

						<datalist id="author">
							@foreach($data_author as $author)
						  <option value="{{$author->id}}" >{{$author->author}}</option>

						  @endforeach
						  
						  </select>
						</div>
						<div class="form-group">
					    	<label for="exampleFormControlSelect1">Author 2</label>

					    	<input type="text" name="author2" list="author1">

						<datalist id="author1">
							@foreach($data_author as $author)
						  <option value="{{$author->author}}" >{{$author->author}}</option>

						  @endforeach
						  
						  </select>
						</div>
						<div class="form-group">
					    	<label for="exampleFormControlSelect1">Author 3</label>

					    	<input type="text" name="author3" list="author2">

						<datalist id="author2">
							@foreach($data_author as $author)
						  <option value="{{$author->author}}" ></option>

						  @endforeach
						  
						  </select>
						</div>

					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">type</label>
						<select name="id_type" class="form-control" aria-label="Default select example" >
							@foreach($data_type as $type)
						  <option value="{{$type->id}}" >{{$type->type}}</option>

						  @endforeach
						  
						  </select>
						</div>

						<div class="form-group">
					    	<label for="exampleFormControlSelect1">Program Studi</label>
						<select name="id_prodi" class="form-control" aria-label="Default select example" >
							@foreach($data_prodi as $prodi)
						  <option value="{{$prodi->id}}" >{{$prodi->program_studi}}</option>

						  @endforeach
						  
						  </select>
						</div>

						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Title</label>
					    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					    
					    <div class="form-group">
										  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
										  <textarea name="description" class="ckeditor form-control" id="kono" rows="3"></textarea>
										</div>

					    

					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">file</label>
							  <input type="file" name="file_repo" class="form-control">
							</div>
					    	
					     <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">thumbnail</label>
							  <input type="file" name="thumbnail" class="form-control">
							</div>	

						
					    <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>

						
								</div>
				</div>
			</div>

						




		</div>
	</div>
</div>


@stop
@section('content1')
	<h1> Edit Data Anggota </h1>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
	<div class="row">
		<div class="col-lg-12">
		
			<!-- Modal -->
			
			      
						<form action="" method="POST">
							{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>
					     <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
					    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" >
					    </div>
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-select" aria-label="Default select example" >
						
						  <option value="L" </option>
						  <option value="P" </option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" >
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<br>
							<button type="submit" class="btn btn-warning ">Update</button>

					 </form></div>

			      	
			         
					
				</div>
			    </div>
			</div>
		</div>
</div>



</div>
@endsection

@push('after_scripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>



<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function(){
    	$('#lfm').filemanager('file');
    	});
   

   


</script>
			
<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush