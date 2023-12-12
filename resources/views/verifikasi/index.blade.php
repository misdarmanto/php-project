@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">

			


			<div class="row">
				<div class="col-md-12">
					<div class="panel">
					
								<div class="panel-heading">
									<h3 class="panel-title">Data Verifikasi</h3>
									<div class="right">
										<a href="/pengajuan/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									</div>
									
								</div>
								<div class="panel-body">
									<table  id="datatable1" class="table table-hover">
										<thead>
											<tr>
												<th>Terima </th>
												<th>Tolak </th>
												
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
										<td><a href="{{url('approved',$repo->id)}}" class="btn btn-success btn-sm">Terima</a></td>
										<td><a href="{{url('tolak',$repo->id)}}" class="btn btn-danger btn-sm delete	" onclick="return confirm('Yakin mau ditolak?')">Tolak</a></td>
										
									</td>
										<td><a href ="{{url('/repo/profile',$repo->id)}}">{{$repo->date}}</a></td>
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
