<?php $__env->startSection('css'); ?>

<!-- Themify -->
<link rel="stylesheet" href="<?php echo e(asset('Blog/plugins')); ?>/themify/css/themify-icons.css">


 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Slick Carousel -->
<link rel="stylesheet" href="<?php echo e(asset('Blog/plugins')); ?>/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo e(asset('Blog/plugins')); ?>/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo e(asset('Blog/plugins')); ?>/magnific-popup/magnific-popup.css">
<!-- manin stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('Blog')); ?>/css/style.css">
<!--Favicon-->
<link rel="shortcut icon" href="<?php echo e(asset('Blog/images')); ?>/favicon.ico" type="image/x-icon">

<?php $__env->stopSection(); ?>






	<?php $__env->startSection('websit_content'); ?>

	<section class="slider mt-4">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="blog-single.html">
									<img src="<?php echo e(asset('Blog/images')); ?>/slider/slider1.jpg" alt="" class="img-fluid">
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
									<img src="<?php echo e(asset('Blog/images')); ?>/slider/slider2.jpg" alt="" class="img-fluid">
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
									<img src="<?php echo e(asset('Blog/images')); ?>/slider/slider3.jpg" alt="" class="img-fluid">
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
									<img src="<?php echo e(asset('Blog/images')); ?>/slider/slider2.jpg" alt="" class="img-fluid">
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
									<img src="<?php echo e(asset('Blog/images')); ?>/slider/slider3.jpg" alt="" class="img-fluid">
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

						<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
						<div class="col-lg-3 col-md-6">
							<article class="post-grid mb-5">
								<a class="post-thumb mb-4 d-block" href="<?php echo e(url("Articles/show/$article->id")); ?>">
									<img src="<?php echo e(asset("storage/$article->image")); ?>" alt="" class="img-fluid w-100">
								</a>
								<span
									class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Explore</span>
								<h3 class="post-title mt-1"><a href="blog-single.html"><?php echo e($article->title); ?></a></h3>
								

								<span class="text-muted letter-spacing text-uppercase font-sm"><?php echo e($article->created_at); ?></span>

							</article>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						

						

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
	<?php $__env->stopSection(); ?>





	


	<!-- THEME JAVASCRIPT FILES
================================================== -->

	<?php $__env->startSection('scripts'); ?>
	
	<!-- initialize jQuery Library -->
	<script src="<?php echo e(asset('Blog/plugins/jquery/jquery.js')); ?>"></script>
	<!-- Bootstrap jQuery -->
	<script src="<?php echo e(asset('Blog/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('Blog/plugins/bootstrap/js/popper.min.js')); ?>"></script>
	<!-- Owl caeousel -->
	<script src="<?php echo e(asset('Blog/plugins/owl-carousel/owl.carousel.min.js')); ?>"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="<?php echo e(asset('Blog/plugins/magnific-popup/magnific-popup.js')); ?>"></script>
	<!-- Instagram Feed Js -->
	<script src="<?php echo e(asset('Blog/plugins/instafeed-js/instafeed.min.js')); ?>"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="<?php echo e(asset('Blog/plugins/google-map/gmap.js')); ?>"></script>
	<!-- main js -->
	<script src="<?php echo e(asset('Blog/js/custom.js')); ?>"></script>
	<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout-new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u101566037/domains/ibdl.net/public_html/blog/resources/views/Blog/home.blade.php ENDPATH**/ ?>