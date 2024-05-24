@extends('paginaHotelMetepec.layout.app')
<link href="assets/menu/css/style.css" rel="stylesheet">

@section('contenido')
    <!-- Page Banner Start -->
        <!-- Room Details Start -->
        <div class="room__details d_padding_banner" >
            <img src="{{ asset('assets/img/banner/banner_restaurante.jpg') }}" >
        </div>    <!-- Page Banner End -->

    <!-- Room Details Start -->
    <div class="room__details pt-5" style="font-size: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="room__details-right">
                        <div class="room__details-right-content" style="border: none;">
                           <!-- ======= Menu Section ======= -->
                                <section id="menu" class="menu">
                                    <div class="container" id="p_container">
                                
                                        <div class="section-title">
                                            <h2><span>MENÚ</span></h2>
                                        </div>
                                
                                        <div class="row" id='p_row'>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                            <ul id="menu-flters">
                                                
                                                <li class="botonMenu" data-filter="desayuno" onclick="seleccionMenu(this)">DESAYUNOS</li>
                                                <li class="botonMenu" data-filter="comida" onclick="seleccionMenu(this)">COMIDA Y CENA</li>
                                                <li class="botonMenu" data-filter="postre" onclick="seleccionMenu(this)">POSTRES</li>
                                                <li class="botonMenu" data-filter="bebida" onclick="seleccionMenu(this)">BEBIDAS</li>
                                                <li class="botonMenu" data-filter="vinotinto" onclick="seleccionMenu(this)">VINOS TINTOS</li>
                                                <li class="botonMenu" data-filter="vino" onclick="seleccionMenu(this)">VINOS DULCES, SEMIDULCES Y ESPUMOSOS</li>
                                                <li class="botonMenu" data-filter="cocktail" onclick="seleccionMenu(this)">BAR Y COCKTELERÍA</li>
                                                <li class="botonMenu" data-filter="botella" onclick="seleccionMenu(this)">BAR POR BOTELLA</li>
                                                <li class="botonMenu" data-filter="todos"  onclick="seleccionMenu(this)">Todos</li>
                                            </ul>
                                            
                                            </div>
                                            <div class="col-lg-12 accordion-header pt-4" style="font-size:12px" id="notas">
                                                
                                            </div>

                                        </div>
                                    </div>
                                </section><!-- End Menu Section -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details End -->
@endsection
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{asset('assets/menu/js/main.js')}}"></script>
<script src="{{asset('assets/js/menu.js')}}"></script>