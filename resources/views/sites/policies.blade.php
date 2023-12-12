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
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/tampilloker">Policies</a></p>
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
								
								<h1 class="mb-10">Data Policy
 </h1>
								
								<p>Politeknik Pariwisata Batam.</p>
							</div>
						</div>
					</div>		
					<div class="single-sidebar-widget search-widget">
									
								</div>
									
										for full-text and other full data items
					<li>Anyone may access full items free of charge.</li>
					<li>Single copies of full items can be:</li>
					reproduced, and displayed or performed in any format or medium
					<li>for personal research or study, educational, or not-for-profit purposes without prior permission or charge.</li>
					Full items must not be sold commercially in any format or medium without formal permission of the copyright holders.
										<p>
					</p>
								
								


																		
					</div>

				</div>

			</section>




			<!-- End popular-courses Area -->			

			
			<!-- End cta-two Area -->			
@endsection

@push('after_scripts')


<script>

				
$(document).ready(function() {
    			$('#datatable1').DataTable();


} );
			</script>

			@endpush