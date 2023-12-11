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
								Kegiatan Alumni	
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Kegiatan Alumni</a></p>
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
								<h1 class="mb-10">Kegiatan Alumni</h1>
								<p>Yuk bergabung menjadi bagian dari kegiatan alumni</p>
							</div>
						</div>
					</div>						
					<div class="row">

						@foreach($kegiatan as $kegiatan)

						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{$kegiatan->getThumbnail()}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>



							<div class="details">
								<a href="{{route('site.single.post',$kegiatan->slug)}}">
									<h4>
										{{$kegiatan->title}}
									</h4>
								</a>
								<p>
									{!!$kegiatan->content!!}										
								</p>
							</div>
						</div>	
						@endforeach	
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
@stop