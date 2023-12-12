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
									<h3 class="panel-title">Data Repository</h3>
								</div>

									<form action="/repo/{{$repo->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tahun</label>
					    <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$repo->year}}" >
					    </div>

					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Title</label>
					    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$repo->title}}">
					    </div>

					    <div class="form-group">
										  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
										  <textarea name="description" class="ckeditor form-control" id="kono" rows="3"> {{$repo->description}}</textarea>
										</div>
						<div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">file</label>
							  <input type="file" name="file_repo" class="form-control" value="{{$repo->file_repo}}" >
							</div>
					    
					    <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>
							
								</div>
				</div>
			</div>


						

							<br>
							
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
		
			

			      	
			         
					
				</div>
			    </div>
			</div>
		</div>
</div>



</div>
@endsection