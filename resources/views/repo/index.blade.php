@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			


			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					
								<div class="panel-heading">
									<h3 class="panel-title">Tipe Data</h3>
									<div class="right">
										<a href="/repo/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									</div>
									
								</div>
								<div class="panel-body">
									<table  id="datatable1" class="table table-hover">
										<thead>
											<tr>
												
												<th>date</th>
												<th>year</th>
												<th>Title</th>
												
												<th>author</th>
												


												
												
												
												
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($data_repo as $repo)
											
									<tr>
									
										<td>	<a href ="{{url('/repo/profile',$repo->id)}}">{{$repo->date}}</td></a>
										<td>{{$repo->year}}</td>
										<td>{{$repo->title}}</td>
										
										<td>{{$repo->author->author}},{{$repo->author2}},{{$repo->author3}}</td>
										

										
										
										
										
										<td><a href="/repo/{{$repo->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
										<a href="/repo/{{$repo->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">DELETE</a>
										
									</td>
									</tr>
										@endforeach
										
										</tbody>
									</table>


								</div>
							</div>
				</div>
			</div>
		
		
	</div>

	</div>
</div>
<div class="col"-6>
			<!-- Button trigger modal -->
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" align="right">
			  Tambah type
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/repo/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}

					  
					     <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Tanggal </label>
					    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>

					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Author</label>
						<select name="id_author" class="form-control" aria-label="Default select example" >
							@foreach($data_author as $author)
						  <option value="{{$author->id}}" >{{$author->author}}</option>

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
					    <label for="exampleInputEmail1" class="form-label">Description</label>
					    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>

					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">file</label>
							  <input type="file" name="file_repo" class="form-control">
							</div>
					    	
					     <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">thumbnail</label>
							  <input type="file" name="thumbnail" class="form-control">
							</div>		   
						
						

					 
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			         <button type="submit" class="btn btn-primary">Submit</button>
					</form>



			      </div>
			    </div>
			  </div>
			

			


@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush
