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
								Directory Alumni
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker"> Database Alumni</a></p>
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
								<h1 class="mb-10">Data Aumni</h1>
								<p>Politeknik Negeri Batam.</p>
							</div>
						</div>
					</div>		


					<div class="details">

						
						<table id="datatable1" class="table table-hover" id="datatable1">
										<thead>
											<tr>
												<th>NAMA LENGKAP</th>
												<th>TAHUN LULUS</th>
												
												
												<th>ALAMAT</th>
												
												<th>JENIS KELAMIN</th>
												<td>&nbsp</td>
												
											</tr>
										</thead>
										<tbody>
											@foreach($data_anggota as $anggota)
											
									<tr>
										<td><a href ="/sites/{{$anggota->id}}/profilalumni">{{$anggota->nama_lengkap}}</a></td>
										<td>{{$anggota->tahun_lulus}}</td>
										<td>{{$anggota->alamat}}</td>
										
										<td>{{$anggota->jenis_kelamin}}</td>
										<td>&nbsp</td>
										
										
									</tr>
									@endforeach
										</tbody>
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