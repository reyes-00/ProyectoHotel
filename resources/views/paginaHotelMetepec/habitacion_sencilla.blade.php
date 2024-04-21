
@extends('paginaHotelMetepec.layout.app')
@section('contenido')
        <!-- Page Banner Start -->
        <div class="page__banner" data-background="assets/img/habitaciones/img_principal.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__banner-title">
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
        <div class="room__details" style="padding-top: 50px;font-size: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-8">
                        <div class="room__details-right">
                            <div class="room__details-right-content">
                                {{-- <h3 class="mb-25">Habitación Sencilla</h3> --}}
                                <p class="mb-25">Sumérjase en la elegancia simple y la comodidad inigualable de nuestras habitaciones sencillas. Con una decoración acogedora y todas las comodidades necesarias, estas habitaciones son el refugio perfecto para el viajero moderno que busca una estancia relajante.</p>

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
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                                                role="img" aria-label="Marcador de posición: Primera diapositiva" focusable="false"
                                                preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                                <title>Marcador de posición</title>
                                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                                                    dy=".3em">Primera diapositiva</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                                                role="img" aria-label="Marcador de posición: Segunda diapositiva" focusable="false"
                                                preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                                <title>Marcador de posición</title>
                                                <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                                                    dy=".3em">Segunda diapositiva</text>
                                            </svg>
                                        </div>
                                        <div class="carousel-item">
                                            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                                                role="img" aria-label="Marcador de posición: Tercera diapositiva" focusable="false"
                                                preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                                <title>Marcador de posición</title>
                                                <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                                    dy=".3em">Tercera diapositiva</text>
                                            </svg>
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
                                <h3>Amenidades</h3>
                                <div class="row mt-35">
                                    <div class="col-md-4 col-sm-6 mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-1.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Limpieza de la habitación</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-2.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Estacionamiento</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-3.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Piscina</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-4.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Servicio de lavandería</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 md-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-5.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Servicio al cuarto</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-6.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Smart Key</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 md-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-7.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Wifi</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 sm-mb-35">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-8.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Pantalla de 32 "</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="room__details-right-list-item">
                                            <div class="room__details-right-list-item-icon">
                                                <img src="assets/img/icon/list-9.png" alt="">
                                            </div>
                                            <div class="room__details-right-list-item-title">
                                                <h6>Cama matrimonial</h6>
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

