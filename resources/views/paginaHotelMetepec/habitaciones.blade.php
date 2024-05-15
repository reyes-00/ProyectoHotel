@extends('paginaHotelMetepec.layout.app')
@section('contenido')
    <!-- Page Banner Start -->
    <div class="page__banner" data-background="assets/img/habitaciones/img_principal.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Habitaciones</h1>
                        {{-- <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>-</span>Detalles de la habitación</li>
                        </ul>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Modern Room Area Start -->
    <div class="modern__room section-padding">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <a href="{{ route('habitacion_sencilla') }}">
                            <div class="deluxe__three-item-image">
                                <img src="{{ 'assets/img/todas_habitaciones/Sencilla.jpg' }}" alt="">
                                <div class="deluxe__three-item-image-content">
                                    <h4>Sencilla<span>$650/Noche</span></h4>
                                    <div class="deluxe__three-item-image-content-meta">
                                        <ul>
                                            <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                            <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <a href="{{ route('habitacion_sencilla_plus') }}">
                            <div class="deluxe__three-item-image">
                                <img src="{{ 'assets/img/todas_habitaciones/SencillaPlus.jpg' }}" alt="">
                                <div class="deluxe__three-item-image-content">
                                    <h4>Sencilla Plus<span>$700/Noche</span></h4>
                                    <div class="deluxe__three-item-image-content-meta">
                                        <ul>
                                            <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                            <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                        </ul>
                                    </div>
    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <a href="{{ route('habitacion_doble') }}">
                            <div class="deluxe__three-item-image">
                                <img src="{{ 'assets/img/todas_habitaciones/Doble.jpg' }}" alt="">
                                <div class="deluxe__three-item-image-content">
                                    <h4>Doble<span>$850/Noche</span></h4>
                                    <div class="deluxe__three-item-image-content-meta">
                                        <ul>
                                            <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                            <li><i class="fal fa-users"></i>Max. 5 personas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <a href="{{ route('habitacion_doble_plus') }}">
                        <div class="deluxe__three-item">
                            <div class="deluxe__three-item-image">
                                <img src="{{ 'assets/img/todas_habitaciones/DoblePlus.jpg' }}" alt="">
                                <div class="deluxe__three-item-image-content">
                                    <h4>Doble Plus<span>$900/Noche</span></h4>
                                    <div class="deluxe__three-item-image-content-meta">
                                        <ul>
                                            <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                            <li><i class="fal fa-users"></i>Max. 4 personas</li>
                                        </ul>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="deluxe__three-item">
                        <a href="{{ route('suit') }}">
                            <div class="deluxe__three-item-image">
                                <img src="{{ 'assets/img/todas_habitaciones/Suite.jpg' }}" alt="">
                                <div class="deluxe__three-item-image-content">
                                    <h4>Suite<span>$770/Noche</span></h4>
                                    <div class="deluxe__three-item-image-content-meta">
                                        <ul>
                                            <li><i class="fal fa-bed-alt"></i>Queen size</li>
                                            <li><i class="fal fa-users"></i>Max. 2 personas</li>
                                        </ul>
                                    </div>
    
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
    </div>
@endsection
