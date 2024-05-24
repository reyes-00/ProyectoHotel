@extends('paginaHotelMetepec.layout.app')

@section('contenido')
    <!-- Page Banner Start -->
        <!-- Room Details Start -->
        <div class="room__details d_padding_banner" >
            <img src="{{ asset('assets/img/banner/banner_hab_suite.jpg') }}" >
        </div>
    <!-- Page Banner End -->

    <!-- Room Details Start -->
    <div class="room__details pt-5" style="font-size: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="room__details-right">
                        <div class="room__details-right-content">
                            <p class="mb-25 text-center">Déjese envolver por nuestra suite con jacuzzi. Disfrute de la privacidad y el confort de un espacioso alojamiento, completo con un lujoso jacuzzi privado donde podrá relajarse y rejuvenecer después de un día de exploración. Con una decoración refinada y comodidades de primera calidad, esta suite es el epítome del lujo y la indulgencia.</p>
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
                                <div class="col-md-4 col-sm-12 my-2 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/television.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Pantalla 32"</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-2 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/internet.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Internet inalambrico</h6>
                                    </div>
                                   
                                </div>
                                <div class="col-md-4 col-sm-12 my-2 d-flex flex-column align-items-center">
                                    <div class="room__details-right-list-item-icon">
                                        <img src="assets/img/icon/jacuzzi.png" alt="">
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Jacuzzi</h6>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="room__details-right-faq mt-50 pb-5 text-center" >
                            <div class="room__details-right-faq-item p-5">
                                <div class="room__details-right-faq-item-card">
                                    <p class="fw-bold h1">Reserva suite</p>
                                    <p class="fw-bold h1">$770</p>
                                    <div class="room__details-right-faq-item-card-header-content active">
                                        <p>Nuestro hotel tiene el alojamiento perfecto para satisfacer todas sus necesidades y garantizar una experiencia inolvidable.</p>
                                    </div>
                                    <div class="header__area-menubar-right-box-btn" >
                                        <a class="theme-btn" href="contact.html">Reservar<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                         
                            
                        </div>
                        
                       

                    <div class="row deluxe__area-active" id="conteInicioImg">
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite1.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="1" onclick="activacionmodal(this)"><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite2.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="2" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite3.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="3" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite4.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="4" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite5.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="5" onclick="activacionmodal(this)"><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite6.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="6" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite7.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="7" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite8.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="8" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite9.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="9" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 mb-30 suite">
                            <div class="deluxe__area-item" > 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="{{'assets/img/habitaciones/hab_suite/hab_suite10.jpg'}}" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <label class="simple-btn" for="btn_modal" style="cursor:pointer;" data-elemento="10" onclick="activacionmodal(this)" ><i class="far fa-chevron-right"></i>Ver Foto</label>
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
    	<!-- Main JS -->


@endsection
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script>
    $(document).ready(function(){
        let arrayImg=[1,2,3,4,5,6,7,8,9,10];
        let htmlImgModal="";
        for(let i=1;i<=arrayImg.length;i++){
            htmlImgModal+="<div class='carousel-item' id='img_"+i+"'>";
            htmlImgModal+="<img src='assets/img/habitaciones/hab_suite/hab_suite"+i+".jpg' class='d-block w-100' alt='assets/img/habitaciones/hab_suite/hab_suite"+i+".jpg'>";
            htmlImgModal+="</div>";
        }
        $("#conteImg").append(htmlImgModal);
    });

     
</script>