@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			


			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					
								<div class="panel-heading">
									<h3 class="panel-title">Data Author</h3>
									<div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary"> Tambah Data</i></button>
									</div>
									
								</div>
								<div class="panel-body">
									<table  id="datatable1" class="table table-hover">
										<thead>
											<tr>
												<th>AUTHOR</th>
												<th>NIM/NIDN</th>
												
												
												
												<td>&nbsp</td>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_author as $author)
											
									<tr>
										<td><a href ="/author/{{$author->id}}/profile">{{$author->author}}</a></td>
										
										<td>{{$author->nim}}</td>
										
										<td>&nbsp</td>
										
										<td><a href="/author/{{$author->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
										<a href="/author/{{$author->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">DELETE</a>
										
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
			  Tambah Author
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
						<form action="/author/create" method="POST">
							{{csrf_field()}}

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Author</label>
					    <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nim / NIDN</label>
					    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
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
