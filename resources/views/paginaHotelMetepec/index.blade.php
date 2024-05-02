@extends('paginaHotelMetepec.layout.app')

@section('contenido')
    @include('paginaHotelMetepec.partials.banner')
		<div class="container-fluid mt-5">
            <div class="video__area" data-background="{{ asset('assets/img/home/Habitaciones.jpg') }}">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-xl-12 col-lg-12 pl-30 pr-30 text-white">
                        <div class="video__area-title text-center" >
                            <h2 >NUESTRAS HABITACIONES</h2>
                            <p>Nuestras habitaciones ofrecen una experiencia de confort y descanso, con un diseño moderno y elegante.
                            <br>Contamos con habitaciones individuales, dobles y suites.</p>
                            <div class="header__area-menubar-right-box-btn" >
                                <a class="theme-btn" href="contact.html">Ver Habitaciones<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
	    </div>
      
    <!-- Services Area Start -->
    <div class="services__area section-padding ">
        <div class="container">
            <h2 class="text-center pb-5">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4 ">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/restaurante.png" class="img__full" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Restaurante a la carta</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/estacionamiento.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Estacionamiento</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/calefaccion1.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Calefacción Centralizada</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/internet.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Wifi Gratis</a></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/limpieza.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Servicio de Limpieza</a></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/scuarto.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5><a href="#">Servicio al cuarto</a></h5>
                            
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
                        <img class="img__full" src="{{'assets/img/home/Restaurante.jpg'}}" alt="" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="feature__area-left">
                        <div class="feature__area-left-title">
                            {{-- <span class="subtitle__one"></span> --}}
                            <h2>RESTAURANTE LOS CANDILES</h2>
                            <p>RESTAURANTE & BAR </p>
                            <a class="theme-border-btn" href="{{ route('restaurante') }}">Leer mas<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Feature Area End -->
@endsection