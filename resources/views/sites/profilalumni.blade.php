@extends('layouts.frontend')

@section('content')
<!-- start banner Area -->
		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Profile Alumni
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker"> Profile Alumni</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Data Alumni</h1>
								<p>Politeknik Negeri Batam.</p>
							</div>
						</div>
					</div>		


					

								<div class="details">
									<div class="panel-body">
									<table class="table table-hover">
										<tbody>
											<tr>
												<td rowspan="7" width="60px">
												<img class="picture-frame" width="150" src="{{$anggota->getAvatar()}}">
											</td>
											
											</tr>
										<tr>
											
											<td><b>Nama Lengkap </b></td>
											<td>{{$anggota->nama_lengkap}}</td>
											<td>&nbsp</td>
											<td><b>NIM</b> </td>
											<td>{{$anggota->nim}}</td>

										</tr>
										<tr>
											<td><b>Tempat/Tanggal Lahir</b> </td>
											<td>{{$anggota->lahir}}</td>
											<td>&nbsp</td>
											<td><b>Alamat</b> </td>
											<td>{{$anggota->alamat}}</td>
										</tr>
										<tr>
											<td><b>Agama</b> </td>
											<td>{{$anggota->agama}}</td>
											<td>&nbsp</td>
											<td><b>Nomor HP</b> </td>
											<td>{{$anggota->hp}}</td>
										</tr>
										</tbody>
										</table>
									</div> 
								</div>

								<div class="details">
									<div class="panel-body">
									<table class="table table-hover">
						<tr>

										
										<td><b>Tempat Bekerja</b> </td>
										<td><b>Jabatan</b> </td>
										<td><b>gaji</b> </td>
										<td><b>status</b> </td>
										
										
										</tr>
										
										@foreach ($anggota->kerja as $kerja)
										<tr>
										
										<td>{{$kerja->tempat_kerja}} </td>
										<td>{{$kerja->jabatan}} </td>
										
										<td>{{$kerja->gaji}} </td>
										
										<td>{{$kerja->status}} </td>
									
										</tr>
										@endforeach


									</table>
									</div> 
								</div>
										
										
			


						
						

				</div>	
			</section>
			<!-- End popular-courses Area -->			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Bersama Alumni Membantu Akreditasi</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="/login">Login Yuk</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->			
@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush