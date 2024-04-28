@extends('paginaHotelMetepec.layout.app')
<link href="assets/menu/css/style.css" rel="stylesheet">

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
                                <li><a href="index.html">Inicio</a></li>
                                <li><span>-</span>Restaurante</li>
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
                        <div class="room__details-right-content" style="border: none;">
                           <!-- ======= Menu Section ======= -->
	 <section id="menu" class="menu">
		<div class="container">
  
		  <div class="section-title">
			<h2><span>MENÚ</span></h2>
		  </div>
  
		  <div class="row">
			<div class="col-lg-12 d-flex justify-content-center">
			  <ul id="menu-flters">
				<!----<li data-filter="*" class="filter-active">Todos</li>
				<li data-filter=".filter-starters">Desayunos</li>
				<li data-filter=".filter-salads">Comida y Cena</li>
				<li data-filter=".filter-specialty">Postres</li>
				<li data-filter=".filter-specialty">Bebidas</li>
				<li data-filter=".filter-specialty">Vinos</li>
				<li data-filter=".filter-specialty">Bar y Cocktelería</li>
				<li data-filter=".filter-specialty">Bar por botella</li>
			  ---->
				<li data-filter="*" class="filter-active">Todos</li>
				<li data-filter=".filter-desayuno">Desayunos</li>
				<li data-filter=".filter-salads">Comida y Cena</li>
				<li data-filter=".filter-specialty">Postres</li>
				<li data-filter=".filter-specialty">Bebidas</li>
				<li data-filter=".filter-specialty">Vinos</li>
				<li data-filter=".filter-specialty">Bar y Cocktelería</li>
				<li data-filter=".filter-specialty">Bar por botella</li>
			  </ul>
			</div>
		  </div>


          <div class="accordion accordion-flush filter-desayuno" id="accordionFlushExample">
            <div class="accordion-item ">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Desayuno LIGEROS
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body ">
                        <div class="row">
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">PAN TOSTADO</a><span>$50.00</span>
                                </div>
                                <div class="menu-ingredients">4 piezas</div>
                            </div>
                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">PAN DULCE</a><span>$25.00</span>
                                </div>
                                <div class="menu-ingredients">1 pieza</div>
                            </div>
                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">PAN FRANCÉS</a><span>$80.00</span>
                                </div>
                                <div class="menu-ingredients">4 piezas</div>
                            </div>
                                        
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">AVENA</a><span>$ 60.00</span>
                                </div>
                                <div class="menu-ingredients">Con leche o agua</div>
                            </div>
                                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">ENSALADA DE FRUTA</a><span>$65.00</span>
                                </div>
                                <div class="menu-ingredients">Melón/Papaya/Sandía</div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">ENSALADA DE FRUTA CON YOGURT<br>
                                        NATURAL O QUESO COTTAGE </a><span>$ 95.00</span>
                                </div>
                                <div class="menu-ingredients">Melón/Papaya/Sandía</div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">CEREAL CON PLÁTANO</a><span>$ 65.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">YOGURT NATURAL</a><span>$50.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                            
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">YOGURT CON GRANOLA</a><span>$60.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                
                                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">NOPAL Y QUESO PANELA ASADOS</a><span>$80.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="accordion accordion-flush filter-salads" id="accordionFlushExample1">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                  Desayuno LIGEROS
                </button>
              </h2>
              <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                    <div class="accordion-body ">
                        <div class="row">
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">PAN TOSTADO</a><span>$50.00</span>
                                </div>
                                <div class="menu-ingredients">4 piezas</div>
                            </div>
                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">PAN DULCE</a><span>$25.00</span>
                                </div>
                                <div class="menu-ingredients">1 pieza</div>
                            </div>
                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">PAN FRANCÉS</a><span>$80.00</span>
                                </div>
                                <div class="menu-ingredients">4 piezas</div>
                            </div>
                                        
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">AVENA</a><span>$ 60.00</span>
                                </div>
                                <div class="menu-ingredients">Con leche o agua</div>
                            </div>
                                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">ENSALADA DE FRUTA</a><span>$65.00</span>
                                </div>
                                <div class="menu-ingredients">Melón/Papaya/Sandía</div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">ENSALADA DE FRUTA CON YOGURT<br>
                                        NATURAL O QUESO COTTAGE </a><span>$ 95.00</span>
                                </div>
                                <div class="menu-ingredients">Melón/Papaya/Sandía</div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">CEREAL CON PLÁTANO</a><span>$ 65.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                    
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                <a href="#">YOGURT NATURAL</a><span>$50.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                            
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">YOGURT CON GRANOLA</a><span>$60.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                
                                
                            <div class="col-lg-6 menu-item">
                                <div class="menu-content">
                                    <a href="#">NOPAL Y QUESO PANELA ASADOS</a><span>$80.00</span>
                                </div>
                                <div class="menu-ingredients"></div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
		  {{-- <div class="row menu-container">
			
			<div class="col-lg-12 menu-item filter-desayuno">
				<div class="menu-content2 text-center pt-4" >
				  <a href="#"><h6 style="color:#b89146">DESAYUNOS LIGEROS</h6></a>
				</div>
			</div>
--}}
		</div>
	  </section><!-- End Menu Section -->
                           
                           
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
                        
                        <div id="carouselExampleIndicators" class="carousel slide d-sm-block  d-md-none">
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

                    <div class="row deluxe__area-active d-none d-sm-none d-md-block">
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item deluxe__area-item-hover"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h6><a href="#"><span>$199</span> / Night</a></h6>
                                    <h4><a href="room-details.html">Deluxe Room</a></h4>
                                    <a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item deluxe__area-item-hover"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h6><a href="#"><span>$199</span> / Night</a></h6>
                                    <h4><a href="room-details.html">Deluxe Room</a></h4>
                                    <a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item" style="cursor: pointer;"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h4><a href="#">Small Suite</a></h4>
                                    <label class="simple-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 suite">
                            <div class="deluxe__area-item deluxe__area-item-hover"> 
                                <div class="deluxe__area-item-image">
                                    <img id="imagen-suite" class="img__full imagen_completa" src="assets/img/imagen1.jpg" alt="" >
                                </div>
                                <div class="deluxe__area-item-content"> 
                                    <h6><a href="#"><span>$199</span> / Night</a></h6>
                                    <h4><a href="room-details.html">Deluxe Room</a></h4>
                                    <a class="simple-btn" href="contact.html"><i class="far fa-chevron-right"></i>Booking Now</a> 
                                </div>
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
<script src="assets/menu/js/main.js"></script>