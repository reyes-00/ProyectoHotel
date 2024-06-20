@extends('paginaHotelMetepec.layout.app')

@section('contenido')
    @include('paginaHotelMetepec.partials.banner')

    <div class="services__area section-padding ">
        <div class="container" style="font-size:20px;">
            <h3 class="text-center ">¡Bienvenido Prueba a nuestro hotel en Metepec!</h3>
            <div class="row text-center pt-2">
                
                <p class="pt-3">Nuestro hotel se enorgullece de su elegante diseño, fusionando la arquitectura contemporánea con toques tradicionales que reflejan la rica cultura e historia de Metepec. Cada detalle, desde nuestras amplias y confortables habitaciones hasta nuestras áreas comunes, está cuidadosamente diseñado para asegurar una estancia placentera y relajante para todos nuestros huéspedes.</p>
                <p><b>Tu hogar lejos de casa.</b></p>
            </div>

        </div>
    </div>
		<div class="container-fluid mt-5">
            <div class="video__area" data-background="{{ asset('assets/img/home/Habitaciones.jpg') }}">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-xl-12 col-lg-12 pl-30 pr-30 text-white">
                        <div class="video__area-title text-center" >
                            <h2 >NUESTRAS HABITACIONES</h2>
                            <p>Nuestras habitaciones ofrecen una experiencia de confort y descanso, con un diseño moderno y elegante.
                            <br>Contamos con habitaciones individuales, dobles y suites.</p>
                            <div class="header__area-menubar-right-box-btn" >
                                <a class="theme-btn" href="{{ route('habitaciones') }}">Ver Habitaciones<i class="fal fa-long-arrow-right"></i></a>
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
                            <h5>Restaurante a la carta</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/estacionamiento.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5>Estacionamiento</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/calefaccion1.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5>Calefacción Centralizada</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/internet.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5>Wifi Gratis</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/limpieza.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5>Servicio de Limpieza</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-4">
                    <div class="services__area-item d-flex flex-column align-items-center">
                        <div class="services__area-item-icon bg-white">
                            <img src="assets/img/icon/scuarto.png" alt="">
                        </div>
                        <div class="services__area-item-content">
                            <h5>Servicio al cuarto</h5>
                            
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
                    <div class="feature__area-center">
                        <div class="feature__area-center-title text-center">
                            {{-- <span class="subtitle__one"></span> --}}
                            <h2>RESTAURANTE<br> LOS CANDILES</h2>
                            <p class="text-align-justify p-2">Ya sea que estés buscando una cena, una comida de negocios o simplemente quieras disfrutar de un rapido desayuno, en el Restaurante los Candiles encontrarás el lugar perfecto. Además, nuestra carta de vinos cuidadosamente seleccionada complementará a la perfección cada bocado. </p>
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