@extends('paginaHotelMetepec.layout.app')

@section('contenido')

	<!-- Page Banner Start -->
	<div class="page__banner" data-background="assets/img/banner/page-banner-9.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-title">
						<h1>Galeria</h1>
						<div class="page__banner-title-menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><span>-</span>Galeria</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner End -->
			<!-- Deluxe Area Start -->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						{{-- <span class="subtitle__one">Deluxe and Luxury</span> --}}
						<h2>Nuestra Galeria</h2>
					</div>					
				</div>
				<div class="col-xl-7">
					<div class="deluxe__area-btn">
						<ul>
							<li class="active" data-filter="*">Todo</li>
							<li data-filter=".luxury">Habitaciones</li>
							<li data-filter=".single">Cuartos</li>
							<li data-filter=".suite">Jardin</li>
							<li data-filter=".family">Restaurante</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-4 col-lg-4 mb-30 suite">
					<div class="deluxe__area-item" style="cursor: pointer;"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h4><a href="#">Small Suite</a></h4>
              <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
							<!-- <a class="simple-btn" for="btn_modal" href="#"><i class="far fa-chevron-right"></i>Ver Foto</a>  -->
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 mb-30 suite">
					<div class="deluxe__area-item deluxe__area-item-hover"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$199</span> / Night</a></h6>
							<h4><a href="room-details.html">Deluxe Room</a></h4>
							<a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 mb-30 family">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img class="img__full imagen_completa" src="assets/img/luxury/luxury-3.jpg" alt="">
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
	{{-- Abrir Modal --}}
	<input type="checkbox" id="btn_modal" style="border:10px solid red">
	<!-- Deluxe Area End -->
@endsection

