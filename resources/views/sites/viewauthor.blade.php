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
								
								<h1 class="mb-10">Data Repository by Author</h1>
								
								<p>Politeknik Pariwisata Batam.</p>
							</div>
						</div>
					</div>		
					<div class="single-sidebar-widget search-widget">
									
								</div>
									
									
					@foreach ($data_author->repo as $repo)
					
						
					<a href ="{{url('/sites/viewrepository',$repo->id)}}"><font class="text-primary"> {{$repo->author->author}}</font>,- ({{$repo->year}}), <b><i>{{$repo->title}}</i></b>, </a>
					<div style="border-bottom: 1px dashed black;"></div>	
					
					@endforeach
						
													
																		
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