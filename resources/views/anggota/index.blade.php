@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Alumni</h3>

									<div class="right">

										<a href="/anggota/insert" class="btn btn-success update-pro btn-sm">
									Tambah Data</a>
										
										<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importanggota"><i class="btn btn-primary"> import XLS</i></button>
										

										<a href="{{asset('admin/assets/xls/COBA.xlsx')}}" class="btn btn-danger update-pro btn-sm">
									download template excel</a>
									
								
									</div>
								</div>
								<div class="panel-body">
									<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>NAMA LENGKAP</th>
												<th>TAHUN LULUS</th>
												
												
												<th>ALAMAT</th>
												
												<th>JENIS KELAMMIN</th>
												<td>&nbsp</td>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_anggota as $anggota)
											
									<tr>
										<td><a href ="/anggota/{{$anggota->id}}/profile">{{$anggota->nama_lengkap}}</a></td>
										<td>{{$anggota->tahun_lulus}}</td>
										<td>{{$anggota->alamat}}</td>
										
										<td>{{$anggota->jenis_kelamin}}</td>
										<td>&nbsp</td>
										
										<td><a href="/anggota/{{$anggota->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
										<a href="/anggota/{{$anggota->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">DELETE</a>
										
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
<!-- Modal import anggota -->
<div class="modal fade" id="importanggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {!!Form::open(['route' => 'anggota.import','class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}

        {!!Form::file('data_anggota')!!}
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-sm btn" value="Import">
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

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
						<form action="/anggota/create" method="POST">
							{{csrf_field()}}

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">nama_lengkap</label>
					    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					    </div>
					     
					    <div class="form-group">
					    	<label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-select" aria-label="Default select example">
						
						  <option value="L">Laki-laki</option>
						  <option value="P">Perempuan</option>
						  </select>
						</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					    </div>
					    <div class="form-group">
							  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
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