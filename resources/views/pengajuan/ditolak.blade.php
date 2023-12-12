@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					
								<div class="panel-heading">
									<h3 class="panel-title">Data Repository yang ditolak </h3>
									
									
								</div>
								<div class="panel-body">
									<table  id="datatable1" class="table table-hover">
										<thead>
											<tr>
												
												<th>date</th>
												<th>year</th>
												<th>Title</th>
												
												<th>status</th>
												<th>alasan penolakan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($data_repo as $repo)
											
									<tr>
										<td>{{$repo->date}}</td>
										<td>{{$repo->year}}</td>
										<td>{{$repo->title}}</td>						
										<td>{{$repo->status}}</td>	
										<td>{{$repo ->alasan}}</td>
										<td><a href="/pengajuan/{{$repo->id}}/revisi" class="btn btn-warning btn-sm">EDIT</a>
			
										
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

		

@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush
