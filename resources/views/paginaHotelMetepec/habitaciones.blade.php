@extends('paginaHotelMetepec.layout.app')
@section('contenido')
<!-- Page Banner Start -->
<div class="page__banner" data-background="assets/img/banner_habitaciones.jpg"></div>
<!-- Page Banner End -->
			<!-- Modern Room Area Start -->
<div class="modern__room section-padding">
        <div class="container">
            <div class="page__banner-title pb-4">
                <h3>Nuestras Habitaciones</h3>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <div class="deluxe__three-item-image">
                            <img src="{{'assets/img/todas_habitaciones/todas_sencilla.jpg'}}" alt="">
                            <div class="deluxe__three-item-image-content">
                                <h4><a href="room-details.html">Sencilla</a><span>$650/Noche</span></h4>
                                <div class="deluxe__three-item-image-content-meta">
                                    <ul>
                                        <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                        <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <div class="deluxe__three-item-image">
                            <img src="{{'assets/img/todas_habitaciones/todas_sencilla_plus.jpg'}}" alt="">
                            <div class="deluxe__three-item-image-content">
                                <h4><a href="room-details.html">Sencilla Plus</a><span>$700/Noche</span></h4>
                                <div class="deluxe__three-item-image-content-meta">
                                    <ul>
                                        <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                        <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <div class="deluxe__three-item-image">
                            <img src="{{'assets/img/todas_habitaciones/todas_doble.jpg'}}" alt="">
                            <div class="deluxe__three-item-image-content">
                                <h4><a href="room-details.html">Doble</a><span>$850/Noche</span></h4>
                                <div class="deluxe__three-item-image-content-meta">
                                    <ul>
                                        <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                        <li><i class="fal fa-users"></i>Max. 5 personas</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <div class="deluxe__three-item-image">
                            <img src="{{'assets/img/todas_habitaciones/todas_doble_plus.jpg'}}" alt="">
                            <div class="deluxe__three-item-image-content">
                                <h4><a href="room-details.html">Doble Plus</a><span>$900/Noche</span></h4>
                                <div class="deluxe__three-item-image-content-meta ">
                                    <ul>
                                        <li><i class="fal fa-bed-alt"></i>2 Camas matrimoniales</li>
                                        <li><i class="fal fa-users"></i>Max. 4 personas</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <div class="deluxe__three-item-image">
                            <img src="{{'assets/img/todas_habitaciones/todas_suite.jpg'}}" alt="">
                            <div class="deluxe__three-item-image-content">
                                <h4><a href="room-details.html">Suite</a><span>$770/Noche</span></h4>
                                <div class="deluxe__three-item-image-content-meta">
                                    <ul>
                                        <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                        <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
               
                
               
            </div>
        {{-- </div> --}}
    </div>
        </div>
    </div>
	<!-- Modern Room Area End -->
          <!-- Services Area Start -->
          <div class="services__area  ">
            <div class="container">
                <h2 class="text-center">Nuestros Servicios</h2>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
                        <div class="services__area-item d-flex flex-column align-items-center">
                            <div class="services__area-item-icon bg-white">
                                <img src="assets/img/icon/limpieza.png" alt="">
                            </div>
                            <div class="services__area-item-content">
                                <h5>Servicio de Limpieza</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
                        <div class="services__area-item d-flex flex-column align-items-center">
                            <div class="services__area-item-icon bg-white">
                                <img src="assets/img/icon/calefaccion1.png" alt="">
                            </div>
                            <div class="services__area-item-content">
                                <h5>Calefacción Centralizada</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
                        <div class="services__area-item d-flex flex-column align-items-center">
                            <div class="services__area-item-icon bg-white">
                                <img src="assets/img/icon/internet.png" alt="">
                            </div>
                            <div class="services__area-item-content">
                                <h5>Wifi Gratis</h5>
                                
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
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
    
@endsection

