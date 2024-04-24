
@extends('paginaHotelMetepec.layout.app')
@section('contenido')
        <!-- Page Banner Start -->
        {{-- <div class="page__banner" data-background="assets/img/habitaciones/img_principal.png" style="background-image: url(assets/img/banner/page-banner-1.jpg);"> --}}
        <div class="page__banner" data-background="assets/img/banner/banner_cuarto.jpg" style="background-image: url(assets/img/banner/banner_cuarto.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__banner-title">
                            {{-- <img id="imagen-suite" class="img__full" src="{{ asset('assets/img/luxury/cuarto.jpg') }}" alt="imagen" > --}}
                            <h1>Habitación sencilla</h1>
                            <div class="page__banner-title-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><span>-</span>Detalles de la habitación</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

		<!-- Room Details Start -->
        <div class="room__details pt-5" style="font-size: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="room__details-right">
                            <div class="room__details-right-content">
                                {{-- <h3 class="mb-25">Habitación Sencilla</h3> --}}
                                <p class="mb-25">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius voluptatum accusantium cum totam recusandae doloremque libero excepturi officia reiciendis. Amet dolore quia facilis possimus provident culpa reiciendis cupiditate nemo quae!</p>

                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                            aria-current="true" aria-label="Diapositiva 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                            aria-label="Diapositiva 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                            aria-label="Diapositiva 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            
                                            <img class="img__full" src="{{ asset('assets/img/luxury/cuarto1.jpg') }}" alt="cuarto">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img__full" src="{{ asset('assets/img/luxury/cuarto2.jpg') }}" alt="cuarto">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img__full" src="{{ asset('assets/img/luxury/cuarto3.jpg') }}" alt="cuarto">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Siguiente</span>
                                    </button>
                                </div>
                            </div>
                            <div class="room__details-right-list">
                                <h3 class="d-flex justify-content-center">Amenidades</h3>
                                <div class="row mt-35">
                                    <div class="col-md-4 col-sm-6 md-mb-35 my-2  d-flex justify-content-center">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/scuarto.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Servicio al cuarto</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35 my-2  d-flex justify-content-center">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/lavanderia.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Servicio de lavandería</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35 my-2  d-flex justify-content-center">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/bed.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Cama Queen size</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 md-mb-35 my-2  d-flex justify-content-center">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/television.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Pantalla de 32 "</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 my-2  d-flex justify-content-center">
                                        <div class="room__details-right-list-item">
                                            
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/internet.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Internet inalambrico</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room__details-right-faq mt-50 pb-5 text-center" >
                                <div class="room__details-right-faq-item p-5">
                                    <div class="room__details-right-faq-item-card">
                                        <p class="fw-bold h1">Reserva habitación sencilla</p>
                                        <p class="fw-bold h1">$600</p>
                                        <div class="room__details-right-faq-item-card-header-content active">
                                            <p>Nuestro hotel tiene el alojamiento perfecto para satisfacer todas sus necesidades y garantizar una experiencia inolvidable.</p>
                                        </div>
                                        <div class="header__area-menubar-right-box-btn" >
                                            <a class="theme-btn" href="contact.html">Reservar<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                             
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Details End -->
	@endsection

