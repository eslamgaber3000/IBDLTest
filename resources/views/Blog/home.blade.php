@extends('layout-new')

@section('css')
{{--
<link rel="stylesheet" href="{{ asset('Blog/plugins') }}/bootstrap/css/bootstrap.min.css"> --}}
<!-- Themify -->
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/themify/css/themify-icons.css">


{{--
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/slick-carousel/slick-theme.css"> --}}
{{--
<link rel="stylesheet" href="{{ asset('Blog/plugins')}}/slick-carousel/slick.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
	integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
	integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />


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
<section class="main-hero d-flex" style="background-color: white;">
	<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"
		class="slide-caption col-10 col-lg-5 ms-5 text-start">
		<div class="hero-logo">
			{{-- <img src="{{ asset('site/images/white-logo.png') }}" class="img-fluid" alt="" /> --}}
		</div>

		<h1 class="hero-title m-0" style="font-size: 45px;color:white">

		</h1>

		@php
		echo $homepage->inspire
		@endphp

		<div class="d-flex mt-4 justify-content-between align-items-center">
			<div class="review">
				<h5 class="fw-bold" style="color:white"> Trust Score </h5>
				<div class="ratings mb-2">
					<div class="empty-stars"></div>
					<div class="full-stars" style="width:{{$star_rating}}%"></div>
				</div>
				<b style="font-size: 1.5em;color:white" class="fw-bold mx-2">{{$all_rate}} </b>
				<div class="mt-1 fw-bold">
					<a style="text-decoration: underline;color:white" href="{{url('pages/user_review')}}"> Read Our Dear
						Users Reviews </a>
				</div>
			</div>
			<div class="button ms-auto">

				@auth

				@else
				<a href="{{ route('register') }}"> <button class="btn btn-warning button fw-bold"> Sign Up</button> </a>
				@endauth
			</div>
		</div>
	</div>
	{{-- <div class="col-6 main-hero-img"> --}}


		<img class="image1" src="{{ asset('storage/head.png') }}" />
		<img data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="image2 d-none d-lg-block"
			src="{{ asset('images/header/Header-version-564.png') }}" />
		{{-- <img class="image3" src="{{ asset('images/header/bar.svg') }}" /> --}}
		{{--
	</div> --}}
</section>




<section class="section-padding">


	{{-- start search part --}}
	<div class="container mb-5">

		<div class="row height d-flex justify-content-center align-items-center">

			<div class="col-md-6">
				<form action="{{ url('/Article/index') }}" method="get">
					<div class="form">
						<input type="text" name="search_key" value="{{ request()->input('search_key') }}"
							class="form-control form-input" placeholder="Search anything...">
						<button type="submit"><i class="fa fa-search"></i></button>
						{{-- <span class="left-pan"><i class="fa fa-microphone"></i></span> --}}
					</div>
				</form>

			</div>

		</div>
	</div>


	{{-- end of search part --}}



	{{-- <div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">

					@foreach ($articles as $article)
					<div class="col-lg-3 col-md-6">
						<article class="post-grid mb-5">
							<a class="post-thumb mb-4 d-block" href="{{ url("Articles/show/$article->id") }}">
								<img src="{{ asset(" storage/$article->image")}}" alt="" class="img-fluid w-100">
							</a>
							<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1"> {{
								$article->auther->name }}</span>
							<h3 class="post-title mt-1"><a href="{{ url("Articles/show/$article->id") }}">{{
									$article->title }}</a></h3>


							<span class="text-muted letter-spacing text-uppercase font-sm"> posted at {{
								$article->created_at->format('y-m-d') }}</span>

						</article>
					</div>
					@endforeach




				</div>
			</div>
			<div class="m-auto">
				<div class=" mt-5 pt-4">

					{{ $articles->links() }}



				</div>


			</div>
		</div>
	</div> --}}


	<div class="container mb-5">
		<div class="row">
			<!-- Sidebar Filter -->
			<div class="col-lg-3 col-md-4">
				<div class="filter-sidebar">
					<h3>Filter Articles</h3>
					<form action="{{ url('/article/filter') }}" method="get">


						<!-- Filter by Date with Toggle -->
						<div class="form-group mb-3">
							<label for="filter_date"
								style="display: flex; align-items: center; justify-content: space-between;">
								
								{{-- <i class="toggle-icon" style="cursor: pointer;">&#9660;</i>
								<!-- Down arrow icon --> --}}
							</label>
							<div class="d-flex flex-column collapse" id="dateFilterSection">
								<div class="mb-2">
									<label for="start_date" class="small">From</label>
									<input type="date" name="start_date" value="{{ request()->input('start_date') }}" id="start_date" class="form-control"
										placeholder="mm/dd/yyyy">
								</div>
								<div>
									<label for="end_date" class="small">To</label>
									<input type="date"  value="{{ request()->input('end_date') }}"  name="end_date" id="end_date" class="form-control"
										placeholder="mm/dd/yyyy">
								</div>
							</div>
						</div>

						<!-- Filter by Topic -->
						<div class="form-group mb-3">
							<label for="filter_category">By Category</label>
							<select name="filter_category" id="filter_category" class="form-control">
								<option value="">Select Category</option>
								@foreach ($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>

						<!-- Filter by Author -->
						<div class="form-group mb-3">
							<label for="filter_author">By Author</label>
							<select name="filter_auther" id="filter_auther" class="form-control">
								<option value="">Select Author</option>
								@foreach ($authers as $author)
								<option value="{{$author->id }}">{{$author->name }}</option>
								@endforeach
							</select>
						</div>

						<!-- Submit Button -->
						<button type="submit" class="btn btn-primary w-100">Apply Filters</button>
					</form>
				</div>
			</div>

			<!-- Main Content -->
			<div class="col-lg-9 col-md-8">
				<div class="row">
					<!-- Display articles here -->
					@if ($articles->count()>0)
						
					
					@foreach ($articles as $article)
					<div class="col-lg-4 col-md-6 mb-4">
						<article class="post-grid">
							<a href="{{ url("Articles/show/$article->id") }}" class="post-thumb mb-4 d-block">
								<img src="{{ asset("storage/$article->image") }}" alt="" class="img-fluid w-100">
							</a>
							<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">
								{{ $article->auther->name}}
							</span>
							<h3 class="post-title mt-1">
								<a href="{{ url("Articles/show/$article->id") }}">{{ $article->title }}</a>
							</h3>
							<span class="text-muted letter-spacing text-uppercase font-sm">
								posted at {{ $article->created_at->format('y-m-d') }}
							</span>
						</article>
					</div>
					@endforeach
							@else
							<div class="text-start mt-5 mx-5">
								<p class="h3 text-danger" style="font-family: aeonik;">
									No articles found based on your search and filter criteria. 
									<a href="{{ url('Article/index') }}" title="Reload Page" class="text-primary" style="margin-left: 10px;">
										<button><i class="fas fa-sync-alt bg-white" style="font-size: 24px;  color:rgb(227,6,24);"></i> </button><!-- Font Awesome icon -->
									</a>
								</p>
							</div>
							
					@endif
				</div>

				
		</div>
		<!-- Pagination -->
		<div class="m-auto">
			<div class=" mt-5 pt-4">
				
				{{ $articles->links() }}


				
			</div>	
	</div>
	</div>
</section>
@endsection








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
{{-- <script src="{{ asset('Blog/plugins/slick-carousel/slick.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
	integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('Blog/plugins/magnific-popup/magnific-popup.js') }}"></script>
<!-- Instagram Feed Js -->
<script src="{{ asset('Blog/plugins/instafeed-js/instafeed.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('Blog/plugins/google-map/gmap.js') }}"></script>
<!-- main js -->
<script src="{{ asset('Blog/js/custom.js') }}"></script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
			const toggleIcon = document.querySelector('.toggle-icon');
			const dateFilterSection = document.getElementById('dateFilterSection');
	
			// Default state: collapsed
			dateFilterSection.classList.add('collapse');
	
			toggleIcon.addEventListener('click', function() {
				dateFilterSection.classList.toggle('collapse');
				toggleIcon.innerHTML = dateFilterSection.classList.contains('collapse') ? '&#9660;' : '&#9650;'; // Change icon
			});
		});
</script>
@endsection