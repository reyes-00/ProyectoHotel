
<!-- Header Area Start -->
	<div class="header__sticky">
		<div class="header__area p-0">
			<div class="container custom__container">
				<div class="header__area-menubar">
					<div class="header__area-menubar-left">
						<div class="header__area-menubar-left-logo">
							<a href="{{ route('index') }}"><img src="assets/img/Logo/LogoN.png" alt=""></a>
							<div class="responsive-menu"></div>
						</div>
					</div>
					<div class="header__area-menubar-right" style="width: 66rem">
						<div class="header__area-menubar-right-menu menu-responsive">						
								<ul id="mobilemenu" >
									<li><a href="{{ route('index') }}">Inicio</a></li>
									<li class="menu-item-has-children">
											<a href="{{ route('galeria') }}">Habitaciones</a>
											<ul class="sub-menu">
													<li><a href="{{ route('habitacion_sencilla') }}">Habitacion Sencilla</a></li>
													<li><a href="{{ route('habitacion_sencilla_plus') }}">Habitacion Sencilla Plus</a></li>
													<li><a href="{{ route('habitacion_doble') }}">Habitacion Doble</a></li>
													<li><a href="{{ route('habitacion_doble_plus') }}">Habitacion Doble Plus</a></li>
													<li><a href="{{ route('suit') }}">Suite</a></li>
													<li><a href="{{ route('habitaciones') }}">Ver Todas</a></li>
											</ul>
									</li>
									<li><a href="{{ route('galeria') }}">Instalaciones</a></li>
									<li><a href="{{ route('contacto') }}">Contacto</a></li>
									<li><a href="{{ route('blog') }}">Blog</a></li>
									<li class="header__area-menubar-right-box-btn">
										<a class="theme-btn" href="#">Reservar<i class="fal fa-long-arrow-right"></i>
										</a>
									</li>
								</ul>
						
						
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Header Area End -->	