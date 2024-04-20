	<!-- Header Area Start -->
	<div class="header__sticky">
		<div class="header__area">
			<div class="container custom__container">
				<div class="header__area-menubar">
					<div class="header__area-menubar-left">
						<div class="header__area-menubar-left-logo">
							<a href="{{ route('index') }}"><img src="assets/img/logo.png" alt=""></a>
							<div class="responsive-menu"></div>
						</div>
					</div>
					<div class="header__area-menubar-right">
						<div class="header__area-menubar-right-menu menu-responsive">						
							<ul id="mobilemenu">
								<li class="menu-item-has-children"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="{{ route('index2') }}">Home 02</a></li>
										<li><a href="index-3.html">Home 03</a></li>									
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{ route('about') }}">About</a></li>
										<li><a href="{{ route('services.details') }}">Team</a></li>
										<li><a href="services-details.html">Services Details</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Room</a>
									<ul class="sub-menu">
										<li><a href="room-style.html">Room Style</a></li>
										<li><a href="room-modern.html">Room Modern</a></li>
										<li><a href="room-list.html">Room List</a></li>
										<li><a href="room-details.html">Room Details</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">Blog</a>
									<ul class="sub-menu">
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-standard.html">Blog Standard</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="header__area-menubar-right-box">
						<div class="header__area-menubar-right-box-btn">
							<a class="theme-btn" href="contact.html">Book Now<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Area End -->	