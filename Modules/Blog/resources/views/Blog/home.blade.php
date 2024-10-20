@extends('layout-new')

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('Blog/plugins') }}/bootstrap/css/bootstrap.min.css"> --}}
<!-- Themify -->
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/themify/css/themify-icons.css">
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/slick-carousel/slick-theme.css">
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/slick-carousel/slick.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/magnific-popup/magnific-popup.css">
<!-- manin stylesheet -->
<link rel="stylesheet" href="{{ asset('Blog') }}/css/style.css">
<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('Blog/images')}}/favicon.ico" type="image/x-icon">
@endsection






	@section('websit_content')

	<section class="slider mt-4">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/slider/slider1.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Tips for Taking a Long-term
										Trip</a></h3>
								<span class=" text-muted  text-capitalize">January 2, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/slider/slider2.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="slider-post-content">
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/slider/slider3.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="slider-post-content">
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">weekends</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Our Favorite Weekend Getaways</a>
								</h3>
								<span class=" text-muted  text-capitalize">June 12, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/slider/slider2.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/slider/slider3.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f1.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Explore</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">The best place to explore to
										enjoy</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">June 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f2.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">How to Make list for travelling
										alone</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f3.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">Food</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">5 ingredient cilantro
										vinaigrette</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f4.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Explore</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">A Simple Way to Feel Like Home
										When You
										Travel</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">March 20, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f5.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">What Type of Traveller Are
										You?</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f6.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Experience</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">A Road Trip Review of the
										2018</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">July 10, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f7.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">music</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Portugal’s Sunset summer
										vission</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">September 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f8.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">beauty</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">The best soft Tropical
										Getaway</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">March 12, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f9.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">Memoriable Paris Girls Trip </a>
								</h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">April 19, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f10.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Experience</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">How to Plan your Trip the Right
										Way</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">February 15, 2019</span>

							</article>
						</div>

						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f11.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">8 Powerful Ways to Add Vibrant
										Colour to Your
										Life</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">August 15, 2019</span>

							</article>
						</div>
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="blog-single.html">
									<img src="{{ asset('Blog/images')}}/news/f12.jpg" alt="" class="img-fluid w-100">
								</a>
								<span
									class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
								<h3 class="post-title mt-1"><a href="blog-single.html">The best to-do list to help boost
										your
										productivity</a></h3>

								<span class="text-muted letter-spacing text-uppercase font-sm">October 2, 2019</span>

							</article>
						</div>
					</div>
				</div>

				<div class="m-auto">
					<div class="pagination mt-5 pt-4">
						<ul class="list-inline ">
							<li class="list-inline-item"><a href="#" class="active">1</a></li>
							<li class="list-inline-item"><a href="#">2</a></li>
							<li class="list-inline-item"><a href="#">3</a></li>
							<li class="list-inline-item"><a href="#" class="prev-posts"><i
										class="ti-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection





	{{-- <section class="footer-2 section-padding gray-bg pb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="subscribe-footer text-center">
						<div class="form-group mb-0">
							<h2 class="mb-3">Subscribe Newsletter</h2>
							<p class="mb-4">Subscribe my Newsletter for new blog posts , tips and info.
							<p>
							<div class="form-group form-row align-items-center mb-0">
								<div class="col-sm-9">
									<input type="email" class="form-control" placeholder="Email Address">
								</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-dark ">Subscribe</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm mt-5 pt-4 border-top">
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-inline footer-socials-2 text-center">
							<li class="list-inline-item"><a href="#">Privacy policy</a></li>
							<li class="list-inline-item"><a href="#">Support</a></li>
							<li class="list-inline-item"><a href="#">About</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
							<li class="list-inline-item"><a href="#">Terms</a></li>
							<li class="list-inline-item"><a href="#">Category</a></li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="copyright text-center ">
							@ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019
							Distribution <a href="https://themewagon.com">ThemeWagon.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}


	<!-- THEME JAVASCRIPT FILES
================================================== -->

	@section('scripts')
	<!-- initialize jQuery Library -->
	<script src="{{ asset('Blog/plugins/jquery/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
	<script src="{{ asset('Blog/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('Blog/plugins/bootstrap/js/popper.min.js') }}"></script>
	<!-- Owl caeousel -->
	<script src="{{ asset('Blog/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('Blog/plugins/slick-carousel/slick.min.js') }}"></script>
	<script src="{{ asset('Blog/plugins/magnific-popup/magnific-popup.js') }}"></script>
	<!-- Instagram Feed Js -->
	<script src="{{ asset('Blog/plugins/instafeed-js/instafeed.min.js') }}"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="{{ asset('Blog/plugins/google-map/gmap.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('Blog/js/custom.js') }}"></script>
	@endsection

