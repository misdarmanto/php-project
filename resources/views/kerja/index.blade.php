@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Riwayat Kerja</h3>
									<div class="right">
										<a href="/kerja/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
									
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>TEMPAT BEKERJA</th>
												<th>JABATAN</th>
												
												
												<th>GAJI</th>
												
												<th>STATUS</th>
												<td>&nbsp</td>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											
										@foreach (auth()->user()->anggota->kerja as $kerja)
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										<td>{{$kerja->gaji}} </td>
										<td>{{$kerja->status}} </td>
										
									
										</tr>
										@endforeach
									

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