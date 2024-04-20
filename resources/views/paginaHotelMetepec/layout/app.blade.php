<!DOCTYPE html>
<html lang="es">

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
	{{-- @include('paginaHotelMetepec.partials.banner') --}}
	<!-- Banner Area End -->


	@yield('contenido')


	
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