@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Data Author</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Author</h3>
								</div>

									<form action="/authors/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Author</label>
					    <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>
					   
						



					</div>
				</div>
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