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
										<a href="/pengajuan/insert" class="btn btn-success update-pro btn-sm">
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
												


												
												
												
												
												<th>status</th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($data_repo as $repo)
											
									<tr>
										<td>{{$repo->date}}</td>
										<td>{{$repo->year}}</td>
										<td>{{$repo->title}}</td>
										
										<td>{{$repo->author->author}},{{$repo->author2}},{{$repo->author3}}</td>
										
										<td>{{$repo->status}}</td>
										
										
										
										
										
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
