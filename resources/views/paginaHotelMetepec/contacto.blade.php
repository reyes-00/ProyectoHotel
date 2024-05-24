@extends('paginaHotelMetepec.layout.app')

@section('contenido')
	<!-- Page Banner Start -->
        <!-- Room Details Start -->
        <div class="room__details d_padding_banner" >
            <img src="{{ asset('assets/img/banner/banner_contacto.jpg') }}" >
        </div>	<!-- Page Banner End -->
	<!-- Contact Area Start -->
	<div class="contact__area pt-5 pb-6">
		<div class="container" >
			<div class="row pb-5">
				<div class="col-xl-5 col-lg-5 lg-mb-30">
					
					<div class="contact__area-info">
						<div class="contact__area-info-item">
							<div class="contact__area-info-item-icon">
								<i class="fal fa-phone-alt"></i>
							</div>
							<div class="contact__area-info-item-content">
								<span>Telefono</span>
								<h6><a href="">+52 722 232 42 95</a></h6>
								<h6><a href="">+52 722 232 42 98</a></h6>
							</div>
						</div>
						<div class="contact__area-info-item">
							<div class="contact__area-info-item-icon">
								<i class="fal fa-envelope"></i>
							</div>
							<div class="contact__area-info-item-content">
								<span>Email</span>
								<h6><a href="mailto:support@gamil.com">support@gamil.com</a></h6>
							</div>
						</div>
						<div class="contact__area-info-item">
							<div class="contact__area-info-item-icon">
								<i class="fal fa-map-marker-alt"></i>
							</div>
							<div class="contact__area-info-item-content">
								<span>Dirección</span>
								<h6><a href="#">Vialidad Metepec #1 Sur, Col. La Michoacana    CP 52166, Metepec, Méx. </a></h6>
							</div>
						</div>
					</div>
					<div class="contact__area-social">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-twitter"></i></a>
							</li>
		
						</ul>
					</div>
					<div class="contact__area-social" style="margin-top:25px ">
						<p class="p-0 m-0"><a href="{{ route('avisoprivacidad') }}" class="fw-bold">Aviso de Privacidad</a></p>
						<p class="p-0 m-0"><a href="{{ route('politicashotel') }}" class="fw-bold">Políticas Generales del Hotel</a></p>
						<p class="p-0 m-0"><a href="" class="fw-bold">Políticas de cancelación</a></p>
					</div>
				
				</div>
				 <div class="col-xl-5 col-lg-5 lg-mb-30 pt-5">
					 {{-- <div class="col-xl-8">  --}}
						<div class="contact__area-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.7147013055505!2d-99.61806652415936!3d19.251261746445827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8bc6eeca0c29%3A0x2bcb6a99a40ec3a7!2sHotel%20Metepec%20Plaza!5e0!3m2!1ses!2smx!4v1715804613479!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						{{--  --}}
					 {{-- </div>  --}}
				</div>
			</div>
			
		</div>
	</div>
	<!-- Contact Area End -->
@endsection