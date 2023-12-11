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
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker">Year</a></p>
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
								<h1 class="mb-10">Browse Repository by Year</h1>
								<p>Politeknik Pariwisata Batam.</p>
							</div>
						</div>
					</div>	
					
					
					
					<p></p>
						<p></p>
						
							
								
									@foreach($data_repo as $repo)
									
					
						<a href ="/sites/{{$repo->year}}/viewyear"><li>({{$repo->year}})</li></a>
						
					
					@endforeach





						
													
																		
					</div>
				</div>	
			</section>




			<!-- End popular-courses Area -->			

					
@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush