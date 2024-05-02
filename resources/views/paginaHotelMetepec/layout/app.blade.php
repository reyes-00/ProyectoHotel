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
	<title>Hotel Metepec Plaza</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/img/Logo/LogoP.png') }}">
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
	<link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}"> 
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			@include('paginaHotelMetepec.partials.spinner')
		</div>
	</div>

	@include('paginaHotelMetepec.partials.header_copia')

	@yield('contenido')
  <div class="contenedor_modal">
		<div class="contenido_modal">
			<!--modal--->
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item" id="img_1">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla1.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla1.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_2">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla2.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla2.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_3">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla3.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla3.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_4">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla4.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla1.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_5">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla5.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla2.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_6">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla6.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla3.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_7">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla7.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla1.jpg'}}">
				  </div>
				  <div class="carousel-item" id="img_8">
					<img src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla8.jpg'}}" class="d-block w-100" alt="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla2.jpg'}}">
				  </div>
				  
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			  </div>
			{{-- <img id="imagen-suite" class="img__full" src="assets/img/luxury/luxury-1.jpg" alt=""> --}}
		</div>
		<label for="btn_modal" class="cerrar_modal"></label>
	</div>
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
	<script src="{{ asset('assets/js/modal/index.js')}}"></script>
</body>

</html>