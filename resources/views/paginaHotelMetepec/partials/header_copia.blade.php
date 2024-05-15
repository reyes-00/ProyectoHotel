<!-- Header Area Start -->
<div class="header__sticky">
    <div class="header__area">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="{{ route('index',['locale']) }}"><img src="{{ asset('assets/img/logos/logo.png') }}"
                                alt="logo_hotel.png" class="img-fluid w-50"></a>
                        <div class="responsive-menu"></div>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li><a href="{{ route('index',['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Habitaciones</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('habitacion_sencilla') }}">Sencilla</a></li>
                                    <li><a href="{{ route('habitacion_sencilla_plus') }}">Sencilla Plus</a>
                                    </li>
                                    <li><a href="{{ route('habitacion_doble') }}">Doble</a></li>
                                    <li><a href="{{ route('habitacion_doble_plus') }}">Doble Plus</a></li>
                                    <li><a href="{{ route('suit') }}">Suite</a></li>
                                    <li><a href="{{ route('habitaciones') }}">Ver Todas</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('galeria') }}">Galeria</a></li>
                            <li><a href="{{ route('contacto') }}">Contacto</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('restaurante') }}">Restaurante</a></li>
                            <li class="header__area-menubar-right-box-btn d-none">
                                <a class="theme-btn" href="#">Reservar<i class="fal fa-long-arrow-right"></i>
                                </a>
                            </li>
<!--                             <li><a href="/locale/es">Español</a></li>
                            <li><a href="/locale/en">Ingles</a></li> -->
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Header Area End -->
