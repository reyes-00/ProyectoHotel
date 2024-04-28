@extends('paginaHotelMetepec.layout.app')

@section('contenido')
    <div class="banner__area" data-background="{{ asset('assets/img/banner-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner__area-title">
                        <h1>Hotel Metepec Plaza</h1>
                        <div class="banner__area-title-video">
                            <div class="video__play">
                                <a class="video-popup" href="#"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
		<div class="container-fluid mt-5">
				<div class="video__area" data-background="{{ asset('assets/img/home/Habitaciones.jpg') }}">
					<div class="row align-items-center">
							<div class="col-xl-12 col-xl-12 col-lg-12 pl-30 pr-30 text-white">
									<div class="video__area-title text-center" >
											<h2 >NUESTRAS HABITACIONES</h2>
											<p>Nuestras habitaciones ofrecen una experiencia de confort y descanso, con un diseño moderno y elegante.<br>Contamos con habitaciones individuales, dobles y suites</p>
											
									</div>
							</div>

					</div>
			</div>
	</div>
        <!-- Accommodations Area Start -->
        <div class="accommodations__area my-5">
            <div class="container">
                <div class="row">
                    {{-- <div class="row"> --}}
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="{{'assets/img/todas_habitaciones/Sencilla.jpg'}}" alt="">
                                    <div class="deluxe__three-item-image-content">
                                        {{-- <h4><a href="room-details.html">Double Room</a><span>$219/Night</span></h4> --}}
                                        {{-- <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p> --}}
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>Cama Queen size</li>
                                                <li><i class="fal fa-users"></i>Hasta 2 huspedes</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>HABITACIÓN SENCILLA</a>
                                            <p><i class=""></i><span>$600</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="assets/img/hotel/hotel-11.jpg" alt="">
                                    <div class="deluxe__three-item-image-content">                                
                                        <h4><a href="room-details.html">Small Suite</a><span>$188/Night</span></h4>
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>(2) bed's</li>
                                                <li><i class="fal fa-users"></i>(3) Guest's</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                            <p><i class="fas fa-star"></i><span>4.4</span>2k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="assets/img/hotel/hotel-12.jpg" alt="">
                                    <div class="deluxe__three-item-image-content">                                
                                        <h4><a href="room-details.html">Luxury room</a><span>$229/Night</span></h4>
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>(3) bed's</li>
                                                <li><i class="fal fa-users"></i>(6) Guest's</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                            <p><i class="fas fa-star"></i><span>3.7</span>2k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="assets/img/hotel/hotel-13.jpg" alt="">
                                    <div class="deluxe__three-item-image-content">
                                        <h4><a href="room-details.html">Junior Suite</a><span>$205/Night</span></h4>
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>(2) bed's</li>
                                                <li><i class="fal fa-users"></i>(4) Guest's</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                            <p><i class="fas fa-star"></i><span>3.9</span>2k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 xl-mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="assets/img/hotel/hotel-14.jpg" alt="">
                                    <div class="deluxe__three-item-image-content">                                
                                        <h4><a href="room-details.html">Superior Room</a><span>$249/Night</span></h4>
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>(3) bed's</li>
                                                <li><i class="fal fa-users"></i>(7) Guest's</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                            <p><i class="fas fa-star"></i><span>2.9</span>2k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                            <div class="deluxe__three-item">
                                <div class="deluxe__three-item-image">
                                    <img src="assets/img/hotel/hotel-15.jpg" alt="">
                                    <div class="deluxe__three-item-image-content">                                
                                        <h4><a href="room-details.html">Single Room</a><span>$167/Night</span></h4>
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                                        <div class="deluxe__three-item-image-content-meta">
                                            <ul>
                                                <li><i class="fal fa-bed-alt"></i>(1) bed's</li>
                                                <li><i class="fal fa-users"></i>(2) Guest's</li>
                                            </ul>
                                        </div>
                                        <div class="deluxe__three-item-image-content-bottom">
                                            <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                            <p><i class="fas fa-star"></i><span>4.8</span>2k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                       
                    </div>
                {{-- </div> --}}
            </div>
        </div>
        <!-- Accommodations Area End -->
    <!-- Services Area Start -->
    <div class="services__area section-padding ">
        <div class="container">
            <h2 class="text-center pb-5">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/restaurante.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Restaurante a la carta</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/estacionamiento.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Estacionamiento</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/calefaccion1.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Calefacción Centralizada</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/internet.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Wifi Gratis</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/limpieza.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Servicio de Limpieza</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/scuarto.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Servicio al cuarto</a></h5>
                            {{-- <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


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
                            {{-- <span class="subtitle__one"></span> --}}
                            <h2>Restaurante Candelabro</h2>
                            <p>Breve descripcion sdfks sdfsidof sdfjsuidf jsdfusd jsdfhns uisbnfij</p>
                            <a class="theme-border-btn" href="services-details.html">Leer mas<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Feature Area End -->
@endsection
