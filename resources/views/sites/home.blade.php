@extends('layouts.frontend')

@section('content')
<!-- start banner Area -->


			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								{{config('alumni.welcome_message')}}		
							</h1>
							<p class="pt-10 pb-10">
								Website Repository Skripsi Politeknik Pariwisata Batam
							</p>
							<a href="/login" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

				<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Welcome to BTP REPOSITORY</h1>
								<p>is a digital collection of the academic papers or local content, such as thesis, journal articles, books, research papers etc.</p>
							</div>
						</div>
					</div>						
						<div class="row">
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<a href="/latest">
									<img class="img-fluid" src="http://repository.btp.ac.id/frontend/img/latest.png" alt="">
								</div>
																	
							</div>



							<div class="details">
								
									<h4>
										<center>Latest Additions</center>
									</h4>
								</a>
								<p>
																			
								</p>
							</div>
						</div>	

				<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<a href="/view">
									<img class="img-fluid" src="http://repository.btp.ac.id/frontend/img/subject.png" alt="">
								</div>
																	
							</div>



							<div class="details">
								
									<h4>
										<center>Browse Repository</center>
									</h4>
								</a>
								<p>
																			
								</p>
							</div>
						</div>	

				<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<a href="/about">
									<img class="img-fluid" src="http://repository.btp.ac.id/frontend/img/about-us.png" alt="">
								</div>
																	
							</div>



							<div class="details">
								
									<h4>
										<center>About Us</center>
									</h4>
								</a>
								<p>
																			
								</p>
							</div>
						</div>	

				<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<a href="/policies">
									<img class="img-fluid" src="http://repository.btp.ac.id/frontend/img/policy.png" alt="">
								</div>
																	
							</div>



							<div class="details">
								
									<h4>
										<center>Policies</center>
									</h4>
								</a>
								<p>
																			
								</p>
							</div>
						</div>	

							<div class="panel">
								<div id="nilai">
									
								</div>
							</div>



...
					</div>																			
				</div>
			</div>	
			</section>
			

			<!-- End popular-course Area -->


					
			

						
			

			<!-- Start cta-two Area -->
			
			<!-- End cta-two Area -->
			
			

@stop