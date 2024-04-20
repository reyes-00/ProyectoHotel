<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Hostily - Luxury Hotel Booking HTML5 Template"/>
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template"/>
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>Hostily - Luxury Hotel Booking HTML5 Template</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}"> 
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- Preloader end -->
	@include('paginaHotelMetepec.partials.header')
	<!-- Banner Area Start -->	
	@include('paginaHotelMetepec.partials.banner')
	<!-- Banner Area End -->
	<!-- Accommodations Area Start -->
	<div class="accommodations__area section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-6 lg-mb-30">
					<div class="accommodations__area-title">
						<span class="subtitle__one">Accommodations</span>
						<h2>Welcome Our Hotels And Resorts</h2>
						<p>Savvy travelers are looking for more than just the next destination on the map. They are looking for a memorable experience and to make new friends along the way.</p>
						<a class="theme-btn" href="about.html">Read More<i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<div class="accommodations__area-right">
						<div class="accommodations__area-right-image">
							<img src="assets/img/hotel/hotel-1.jpg" alt="">
							<div class="accommodations__area-right-image-two">
								<img src="assets/img/hotel/hotel-2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Accommodations Area End -->
	<!-- Deluxe Area Start -->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						<span class="subtitle__one">Deluxe and Luxury</span>
						<h2>Our Luxury Rooms</h2>
					</div>					
				</div>
				<div class="col-xl-7">
					<div class="deluxe__area-btn">
						<ul>
							<li class="active" data-filter="*">All Rooms</li>
							<li data-filter=".luxury">Luxury</li>
							<li data-filter=".single">Single</li>
							<li data-filter=".suite">Small Suite</li>
							<li data-filter=".family">Family</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-3 col-lg-4 mb-30 suite">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-1.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$134</span> / Night</a></h6>
							<h4><a href="room-details.html">Small Suite</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 mb-30 suite">
					<div class="deluxe__area-item deluxe__area-item-hover"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-2.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$199</span> / Night</a></h6>
							<h4><a href="room-details.html">Deluxe Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 mb-30 family">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-3.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$319</span> / Night</a></h6>
							<h4><a href="room-details.html">Family Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 lg-mb-30 single">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-4.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$169</span> / Night</a></h6>
							<h4><a href="room-details.html">Single Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 luxury">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full" src="assets/img/luxury/luxury-5.jpg" alt="">
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Deluxe Area End -->
	<!-- Video Area Start -->
	<div class="video__area" data-background="assets/img/video.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xxl-6 col-xl-7 col-lg-8">
					<div class="video__area-title">
						<h2>Book hotel rooms, get deals & book flights online.</h2>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-5 col-lg-4">
					<div class="video__area-right">
						<div class="video__play">
							<a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Area End -->
	<!-- Services Area Start -->
	<div class="services__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/cleaning.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Room Cleaning</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/wifi.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Room Wifi</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="assets/img/icon/location.png" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Pickup & Drop</a></h5>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- Feature Area Start -->
	<div class="feature__area">
		<div class="container">
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-1.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Our Food</span>
							<h2>Restaurant Silo</h2>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta,</p>
							<a class="theme-border-btn" href="services-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-right mb-60">
				<div class="col-xl-6 col-lg-6  order-last order-lg-first">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Read Our Books</span>
							<h2>The Library</h2>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta,</p>
							<a class="theme-border-btn" href="services-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-3.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Fitness Equipment</span>
							<h2>Exercise equipment</h2>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta,</p>
							<a class="theme-border-btn" href="services-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-right">
				<div class="col-xl-6 col-lg-6 order-last order-lg-first">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Experiences</span>
							<h2>Swimming Pool</h2>
							<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta,</p>
							<a class="theme-border-btn" href="services-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img class="img__full" src="assets/img/features/feature-4.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Feature Area End -->
	<!-- Testimonial Area Start -->	
	<div class="testimonial__area section-padding pb-0"> 
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
				   <div class="testimonial__area-bg">
					<div class="swiper testimonial__slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-1.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>David Beckham</h4>										
										<span>UX Designer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-2.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>David Fincher</h4>										
										<span>UX Designer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="assets/img/avatar/testimonial-3.jpg" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>Ridley Scott</h4>										
										<span>UX Designer</span>
										<p>Proin massa augue, lacinia at blandit ac, fringilla scelerisque tortor. Mauris sit amet lectus porta, porta lectus non, malesuada neque. Integer in tempus leo. Quisque vitae leo ac ex suscipit iaculis eu in nisl. Donec vestibulum volutpat lectus, vel aliquet massa porttitor in. Integer eleifend</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial__area-item-dots">
						<div class="pagination"></div>
					</div>
				   </div>
				</div>
			</div>
		</div>
	</div>	    
	<!-- Testimonial Area End -->	
	<!-- Blog Area Start -->	
	<div class="blog__area section-padding">
		<div class="container">
			<div class="row mb-60">
				<div class="col-xl-12">
					<div class="blog__area-title">
						<span class="subtitle__one">Our Blog</span>
						<h2>Read Our Blog amd News</h2>						
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">The ultimate guide to finding the best hotels in your area.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item blog__area-item-hover">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Book a room Today most Affordable Rates.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Hotel Booking is the best choice for hotel booking.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->	
	@include('paginaHotelMetepec.partials.footer')
	<!-- Scroll Btn Start -->
	<div class="scroll-up">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
	</div>
	<!-- Scroll Btn End -->
	<!-- Main JS -->
	<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Counter Up JS -->
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<!-- Swiper Bundle JS -->
	<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Mean Menu JS -->
	<script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- Isotope JS -->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>