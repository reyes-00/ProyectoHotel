@extends('paginaHotelMetepec.layout.app')
@push('styles')
		<link rel="stylesheet" href="{{ asset('assets/css/modalgaleria.css') }}">
@endpush
@section('contenido')

	<!-- Page Banner Start -->
	<div class="page__banner" data-background="assets/img/galeria/pasillos/pasillo8.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-title">
						<h1>Galeria</h1>
						<div class="page__banner-title-menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><span>-</span>Galeria</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner End -->
	
	<!-- Deluxe Area Start -->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-1">
					<div class="deluxe__area-title">
						<h2>Nuestra Galeria</h2>
					</div>					
				</div>
				<div class="col-xl-11">
					<div class="deluxe__area-btn">
						<ul>
							<li class="active" data-filter="*">Todo</li>
							<li data-filter=".habitacion">Habitaciones</li>
							<li data-filter=".escaleras">Escaleras</li>
							<li data-filter=".estancia">Estancia</li>
							<li data-filter=".jardin">Jardines</li>
							<li data-filter=".pasillo">Pasillos</li>
							<li data-filter=".restaurante">Restaurante</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-4 col-lg-4 mb-30 habitacion">
					<div class="deluxe__area-item" style="cursor: pointer;"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/cuartos/cuarto1.jpg" alt="cuarto1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h4><a href="#">Baño de Habitación</a></h4>
							<label class="simple-btn ver-foto-btn" for="btn_modal" ><i class="far fa-chevron-right"></i>Ver Foto</label>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 mb-30 habitacion">
					<div class="deluxe__area-item deluxe__area-item-hover"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/cuartos/cuarto2.jpg" alt="cuarto2" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$199</span> / Night</a></h6>
							<h4><a href="room-details.html">Habitaciones</a></h4>
							<label class="simple-btn ver-foto-btn"><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 mb-30 habitacion">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/cuartos/cuarto3.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$319</span> / Night</a></h6>
							<h4><a href="room-details.html">Servicio de Baño</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 mb-30 habitacion">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/cuartos/cuarto4.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$319</span> / Night</a></h6>
							<h4><a href="room-details.html">Servicio de Cuarto</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-8 lg-mb-30 mb-30 escaleras">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/escaleras/escaleras1.jpg" alt="escaleras1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$169</span> / Night</a></h6>
							<h4><a href="room-details.html">Escaleras 1 </a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 escaleras">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/escaleras/escaleras2.jpg" alt="escaleras2" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Escaleras	 2</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 escaleras">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/escaleras/escaleras3.jpg" alt="escaleras3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Escaleras 3</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 escaleras">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/escaleras/escaleras4.jpg" alt="escaleras4" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Escaleras 4 </a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 escaleras">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/escaleras/escaleras5.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Escaleras 5</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 estancia">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/estancia/estancia1.jpg" alt="estancia1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Estancia 1</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 estancia">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/estancia/estancia2.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Estancia 2</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 estancia">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/estancia/estancia3.jpg" alt="estancia3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Estancia 3</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 estancia">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/estancia/estancia4.jpg" alt="estancia4" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Estancia 4</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 jardin">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/jardin/jardin1.jpg" alt="jardin1" >
						</div>
						<div class="deluxe__area-item-content"> 
							{{-- <h6><a href="#"><span>$249</span> / Night</a></h6> --}}
							<h4><a href="room-details.html">Jardin 1</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 jardin">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/jardin/jardin2.jpg" alt="jardin 2" >
						</div>
						<div class="deluxe__area-item-content"> 
							{{-- <h6><a href="#"><span>$249</span> / Night</a></h6> --}}
							<h4><a href="room-details.html">Jardin 2</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 jardin">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/jardin/jardin3.jpg" alt="jardin3" >
						</div>
						<div class="deluxe__area-item-content"> 
							{{-- <h6><a href="#"><span>$249</span> / Night</a></h6> --}}
							<h4><a href="room-details.html">Jardin 3</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo1.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							{{-- <h6><a href="#"><span>$249</span> / Night</a></h6> --}}
							<h4><a href="room-details.html">Pasillo 1</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo2.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo3.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo4.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo5.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo6.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo7.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 pasillo">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/pasillos/pasillo8.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 restaurante">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/restaurante/restaurante1.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 restaurante">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/restaurante/restaurante2.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-4 luxury mb-30 restaurante">
					<div class="deluxe__area-item"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full " src="assets/img/galeria/restaurante/restaurante3.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<h6><a href="#"><span>$249</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Cambié modal-xl por modal-lg para que se adapte mejor en pantallas pequeñas -->
        <div class="modal-content">
            <div class="modal-body d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-secondary btn-anterior" aria-label="Anterior">
                    &lt;
                </button>
                <img id="imagenModalSrc" class="img-fluid modal-imagen loaded" src="" alt="">
                <button type="button" class="btn btn-secondary btn-siguiente" aria-label="Siguiente">
                    &gt;
                </button>
            </div>
        </div>
    </div>
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('assets/js/modalgaleria.js') }}"></script>
@endpush