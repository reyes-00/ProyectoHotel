<!-- Footer Area Start -->	
<div class="footer__area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-3 col-md-4 col-12 mt-3">
				<div class="footer__area-widget">
					<div class="footer__area-widget-about my-4 d-flex align-items-center flex-sm-column flex-md-row">
						<div class="footer__area-widget-about-logo">
							<a href="{{ route('index',['locale' => app()->getLocale()]) }}"><img src="{{asset('assets/img/logos/logo.png') }}" alt="logo_hotel.png" class="img-fluid w-50 d-block m-auto"></a>
						</div>
						<div class="footer__area-widget-about-social">
							<ul>
								<li class="my-1"><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li class="my-1"><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-12 my-4">
				<div class="footer__area-widget">
					<h5 class="text-center">Links de Pagina</h5>
					<div class="footer__area-widget-menu text-center">
						<ul class="d-flex flex-column flex-lg-row gap-2 justify-content-center ">
							<li><a href="{{ route('index') }}"><i class="fal fa-angle-double-right"></i>Inicio</a></li>
							<li><a href="{{ route('restaurante') }}"><i class="fal fa-angle-double-right"></i>Restaurante</a></li>
							<li><a href="{{ route('habitaciones') }}"><i class="fal fa-angle-double-right"></i>Habitaciones</a></li>
							<li><a href="{{ route('galeria') }}"><i class="fal fa-angle-double-right"></i>Galeria</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-4 col-12 my-4">
				<div class="footer__area-widget">
					<h5 class="text-center">Contacto</h5>
					<div class="footer__area-widget-contact my-2 text-center" style="color:#cccccc">
								<div class="row justify-content-center ">
									<div class="col-12 col-lg-4 ">
										<div class="footer__area-widget-contact-item-icon m-auto">
											<i class="fal fa-map-marked-alt"></i>
										</div>
										<div class="footer__area-widget-contact-item-content">									
											<p>Vialidad Metepec #1 Sur, Col. La Michoacana CP 52166, Metepec, Méx.</p>
										</div>
									</div>
									<div class="col-12 col-lg-3">
											<div class="footer__area-widget-contact-item-icon m-auto">
												<i class="fal fa-envelope-open-text"></i>
											</div>
											<div class="footer__area-widget-contact-item-content m-auto">									
												<a href="#" class="text-md-center d-block">correo@correo.com</a>
											</div>
									</div>
									<div class="col-12 col-lg-4">
								
										<div class="footer__area-widget-contact-item-icon m-auto">
											<i class="fal fa-phone-alt"></i>
										</div>
										<div class="footer__area-widget-contact-item-content">									
											<a href="tel:+123(458)585568">
												+52 722 232 42 (96,97,98) <br>
												+52 722 232 42 98</a>
										</div>
									
									</div>
								</div>
						</div>
					{{-- </div> --}}
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer Area End -->	