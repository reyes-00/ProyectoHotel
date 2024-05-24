@extends('paginaHotelMetepec.layout.app')
@push('styles')
		<link rel="stylesheet" href="{{ asset('assets/css/modalgaleria.css') }}">
@endpush
@section('contenido')

	<!-- Page Banner Start -->
        <!-- Room Details Start -->
        <div class="room__details d_padding_banner" >
            <img src="{{ asset('assets/img/banner/banner_galeria.jpg') }}" >
        </div>
	<!-- Page Banner End -->
	
	<!-- Deluxe Area Start -->
	<div class="deluxe__area pt-5">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-12">				
				</div>
				
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor: pointer;"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="{{asset('assets/img/galeria/img_galeria2.jpg')}}" alt="cuarto1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" for="btn_modal"><i class="far fa-chevron-right"></i>Ver Foto</label>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor: pointer;"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="{{ asset('assets/img/galeria/img_galeria1.jpg')}}" alt="cuarto2" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" for="btn_modal"><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30 ">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria3.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer" > 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria9.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 ">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria15.jpg" alt="escaleras1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn"><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria7.jpg" alt="escaleras2" >
						</div>
						<div class="deluxe__area-item-content"> 
	
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria6.jpg" alt="escaleras3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria8.jpg" alt="escaleras4" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 escaleras">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria4.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30 estancia">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria10.jpg" alt="estancia1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30 estancia">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria11.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 estancia">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria12.jpg" alt="estancia3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30 estancia">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria13.jpg" alt="estancia4" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30 jardin">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria14.jpg" alt="jardin1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30 jardin">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria5.jpg" alt="jardin 2" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30 jardin">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria16.jpg" alt="jardin3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria17.jpg" alt="escaleras5" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn"><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria18.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30 pasillo ">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria19.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria20.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria31.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria22.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria23.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4  col-md-4 col-sm-6 mb-30 pasillo">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria24.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 restaurante">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria25.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-8 col-md-4 col-sm-6 mb-30 restaurante">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria28.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-12 col-md-4 col-sm-6 mb-30 restaurante">
					<div class="deluxe__area-item" style="cursor:pointer"> 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria26.jpg" alt="pasillo" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer" > 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria21.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 ">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria29.jpg" alt="escaleras1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn"><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30">
					<div class="deluxe__area-item" style="cursor:pointer" > 
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria30.jpg" alt="cuarto3" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn" ><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 mb-30 ">
					<div class="deluxe__area-item" style="cursor:pointer">  
						<div class="deluxe__area-item-image">
							<img id="imagen-suite" class="img__full imagen_completa" src="assets/img/galeria/img_galeria32.jpg" alt="escaleras1" >
						</div>
						<div class="deluxe__area-item-content"> 
							<label class="simple-btn ver-foto-btn"><i class="far fa-chevron-right"></i>Ver Foto</label> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body d-flex justify-content-between align-items-center">
							<button type="button" class="btn btn-secondary btn-anterior" aria-label="Anterior">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</button>
					
                <img id="imagenModalSrc" class="img-fluid modal-imagen loaded" src="" alt="">
								<button type="button" class="btn btn-secondary btn-siguiente" aria-label="Siguiente">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
							</button>
            </div>
        </div>
    </div>
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('assets/js/modalgaleria.js') }}"></script>
@endpush