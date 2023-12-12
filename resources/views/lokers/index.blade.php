@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Lowongan Kerja</h3>
									<div class="right">
										<a href="{{route('lokers.add')}}" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover">
										<thead>
											<tr>
												<th>id</th>
												<th>title</th>
												<th>User</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($lokers as $loker)
											
									<tr>
										<td>{{$loker->id}}</td>
										<td>{{$loker->title}}</td>
										<td>{{$loker->user->nim}}</td>
										
										
										
										
										<td><a target="_blank" href="{{route('site.single.post',$loker->slug)}}" class="btn btn-info btn-sm">VIEW</a>
											<a href="/loker/{{$loker->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>

										<a href="/loker/{{$loker->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">DELETE</a>
										
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
			  Tambah Anggota
			</button>

			
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