@extends('paginaHotelMetepec.layout.app')

@section('contenido')
    <!-- Page Banner Start -->
    <div class="page__banner" data-background="{{'assets/img/banner_hab_sencilla.jpg'}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                       
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
                            <div class="page__banner-title pb-4">
                                <h3>Habitación sencilla</h3>
                            </div>
                           
                            <p class="mb-25 text-center">Sumérjase en la elegancia simple y la comodidad inigualable de
                                nuestras habitaciones sencillas. Con una decoración acogedora y todas las comodidades
                                necesarias, estas habitaciones son el refugio perfecto para el viajero moderno que busca una
                                estancia relajante.</p>

                           
                           
                        </div>
                  
                        <div class="room__details-right-list">
                            <h3 class="text-center">Amenidades</h3>
                            <div class="row mt-35">
                                <div class="col-md-4 col-sm-12 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon m-0">
                                        <img src="assets/img/icon/scuarto.png" alt="" class="img_fluid">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Servicio al cuarto</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-2  d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/lavanderia.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Servicio de lavandería</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-2  d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/bed.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Cama Queen size</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 my-2 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/television.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Pantalla de 32 "</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 my-2 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/internet.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Internet inalambrico</h6>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="room__details-right-faq mt-50 pb-5 text-center" >
                            <div class="room__details-right-faq-item p-5">
                                <div class="room__details-right-faq-item-card">
                                    <p class="fw-bold h1">Reserva habitación sencilla</p>
                                    <p class="fw-bold h1">$650</p>
                                    <div class="room__details-right-faq-item-card-header-content active">
                                        <p>Nuestro hotel tiene el alojamiento perfecto para satisfacer todas sus necesidades y garantizar una experiencia inolvidable.</p>
                                    </div>
                                    <div class="header__area-menubar-right-box-btn" >
                                        <a class="theme-btn" href="contact.html">Reservar<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                         
                            
                        </div>
                        
                       

                    <div class="row deluxe__area-active">
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla1.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="1" onclick="activacionmodal(this)"><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla2.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="2" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla3.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="3" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla4.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="4" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla5.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="5" onclick="activacionmodal(this)"><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla6.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="6" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla7.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="7" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_sencilla/hab_sencilla8.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="8" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Abrir Modal --}}
        <input type="checkbox" id="btn_modal">
    </div>
    <!-- Room Details Enddd -->
    <script>
            function activacionmodal(elemento){
                $("#img_"+$(elemento).attr("data-elemento")).addClass("active")
            }
            function cerrarmodal(){
                $(".carousel-item").removeClass("active")
            }
    </script>

@endsection
