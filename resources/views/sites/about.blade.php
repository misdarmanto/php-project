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
								Data Repository
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker">About</a></p>
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
								
								<h1 class="mb-10">About the Repository </h1>
								
								<p>Politeknik Pariwisata Batam.</p>
							</div>
						</div>
					</div>		
					<div class="single-sidebar-widget search-widget">
									
								</div>
									
					This site is powered by Laravel, developed by Sandy Eko Priyatna.	
					<p>
					</p>
								
								<h3 class="mb-10">Contact Information </h3>
								The Vitka City Complex
									Jl. Gajah Mada, Tiban, Batam,
									Kepulauan Riau, INDONESIA 29425
									Phone : +62 812 73735 0241


																		
					</div>

				</div>

			</section>




			<!-- End popular-courses Area -->			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Sistem Repository Politeknik Pariwisata Batam</h1>
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