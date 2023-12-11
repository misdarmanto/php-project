@extends('layouts.master')

@section ('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h1 class="page-title">Menginput Data Riwayat Kerja</h1>
			<div class="row">
				
				
				<div class="col-md-6">
					
						<div class="panel">
						<div class="panel-heading">
									<h3 class="panel-title">Data Kerjaan</h3>
								</div>

									<form action="/kerja/create" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}



						<div class="panel-body">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Nama Tempat Bekerja</label>
					    <input type="text" name="tempat_kerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>
					    <div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
					    <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>
					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Pilih Kisaran Gaji</label>
						<select name="gaji" class="form-control" aria-label="Default select example" >
						
						  <option value="Rp 4000000 - Rp 5000000" >Rp 4000000 - Rp 5000000 </option>
						  <option value="Rp 5000000 - Rp 6000000" >Rp 5000000 - Rp 6000000</option>
						   <option value="Rp 5000000 - Rp 6000000" >Rp 6000000 - Rp 7000000</option>
						      <option value="Rp 5000000 - Rp 6000000" >Rp 7000000 - Rp 8000000</option>
						         <option value="Rp 5000000 - Rp 6000000" >Rp 9000000 - Rp 10000000</option>
						         <option value="Rp 5000000 - Rp 6000000" >Rp 10000000 - Rp 20000000</option>
						  </select>
						</div>
					     <div class="form-group">
					    	<label for="exampleFormControlSelect1">Status Pekerjaan saat ini</label>
						<select name="status" class="form-control" aria-label="Default select example" >
						
						  <option value="Bekerja" >Bekerja</option>
						  <option value="Tidak Bekerja" >Tidak Bekerja</option>
						  </select>
						</div>

						<div class="form-group">
					    <label for="exampleInputEmail1" class="form-label">Mulai Bekerja</label>
					    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" >
					    </div>

					    <div class="form-group">
					    	<label for="exampleFormControlSelect1">Pilih Waktu Mulai Kerja</label>
						<select name="waktu" class="form-control" aria-label="Default select example" >
						
						  <option value="<3">< 3 Bulan Sebelum Wisuda </option>
						  <option value="1-3">1 - 3 Bulan Setelah Wisuda</option>
						   <option value="3-6">3-6 Bulan Setelah Wisuda</option>
						      <option value=">6"> > 6 Bulan Setelah Wisuda0 </option>
						        
						  </select>
						</div>

						
					    
					    <button type="submit" class="btn btn-warning ">Submit</button>

					 </form>

						{{auth()->user()->anggota->nama_lengkap}}
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