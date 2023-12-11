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
								Latest Additions
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker">Latest</a></p>
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
								<h1 class="mb-10">Browse Item</h1>
								<a href="/dashboard"><p>Politeknik Pariwisata Batam.</p></a>
							</div>
						</div>
					</div>	
					
					
					<p></p>
						<p></p>
						
							
									
									
									<a href ="/year"><img src="http://127.0.0.1:8000/frontend/img/year.png" >
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									<a href ="/division"><img class="" src="http://127.0.0.1:8000/frontend/img/division.png" alt="">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									<a href ="/authorsite"><img class="" src="http://127.0.0.1:8000/frontend/img/author.png" alt="">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							

						
													
																		
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