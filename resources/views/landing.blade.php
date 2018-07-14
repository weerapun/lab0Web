<!DOCTYPE html>
<html lang="en">
<head>

	<title>Main Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="{{ asset('template/app/js/webfontloader.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/app/Bootstrap/dist/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/app/Bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/app/Bootstrap/dist/css/bootstrap-grid.css')}}">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/app/css/main.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/app/css/fonts.min.css')}}">


</head>

<body>


<body class="landing-page">

<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
				<!--	<img src="{{ asset('template/app/img/logo.png')}}" alt="Olympus">
					<img src="{{ asset('template/app/img/logo-colored-small.png')}}" alt="Olympus" class="logo-colored">-->
				</div>
				<div class="title-block">
					<h6 class="logo-title">Labolink</h6>
					<div class="sub-title">JOB WORK SEARCH</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-menu-icon')}}"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
					<ul>
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Profile Page</a>
								<a class="dropdown-item" href="#">Newsfeed</a>
								<a class="dropdown-item" href="#">Post Versions</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-has-megamenu">
							<a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col col-sm-3">
										<h6 class="column-tittle">Main Links</h6>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">BuddyPress</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Corporate</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Forums</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li>
						<li class="close-responsive-menu js-close-responsive-menu">
							<svg class="olymp-close-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-close-icon')}}"></use></svg>
						</li>
						<!-- <li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-menu-icon')}}"></use></svg>
								<svg class="olymp-close-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-close-icon')}}"></use></svg>
							</a>
						</li> -->
						<!-- <li class="shoping-cart more">
							<a href="#" class="nav-link">
								<svg class="olymp-shopping-bag-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-shopping-bag-icon')}}"></use></svg>
								<span class="count-product">2</span>
							</a>
							<div class="more-dropdown shop-popup-cart">
								<ul>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="{{ asset('template/app/img/product1.png')}}" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">White Enamel Mug</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x2</div>
										</div>
										<div class="product-price">$20</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
										</div>
									</li>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="{{ asset('template/app/img/product2.png')}}" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">Olympus Orange Shirt</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x1</div>
										</div>
										<div class="product-price">$40</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
										</div>
									</li>
								</ul>

								<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

								<div class="cart-btn-wrap">
									<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
									<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
			@if ($userLogin)
				<h1>Thank you for registration.  : {{$userLogin['email'] }}</h1>
				<h1> ID : {{$userLogin['id'] }}</h1>
			@endif
			
			</div>
			
		</div>
		
		
      
	</div>
	<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<a href="/" class="btn btn-purple btn-lg full-width">Logout</a>
		</div>
</div>





<!-- JS Scripts -->
<script src="{{ asset('template/app/js/jquery-3.2.1.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.appear.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('template/app/js/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.matchHeight.js')}}"></script>
<script src="{{ asset('template/app/js/svgxuse.js')}}"></script>
<script src="{{ asset('template/app/js/imagesloaded.pkgd.js')}}"></script>
<script src="{{ asset('template/app/js/Headroom.js')}}"></script>
<script src="{{ asset('template/app/js/velocity.js')}}"></script>
<script src="{{ asset('template/app/js/ScrollMagic.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.waypoints.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.countTo.js')}}"></script>
<script src="{{ asset('template/app/js/popper.min.js')}}"></script>
<script src="{{ asset('template/app/js/material.min.js')}}"></script>
<script src="{{ asset('template/app/js/bootstrap-select.js')}}"></script>
<script src="{{ asset('template/app/js/smooth-scroll.js')}}"></script>
<script src="{{ asset('template/app/js/selectize.js')}}"></script>
<script src="{{ asset('template/app/js/swiper.jquery.js')}}"></script>
<script src="{{ asset('template/app/js/moment.js')}}"></script>
<script src="{{ asset('template/app/js/daterangepicker.js')}}"></script>
<script src="{{ asset('template/app/js/simplecalendar.js')}}"></script>
<script src="{{ asset('template/app/js/fullcalendar.js')}}"></script>
<script src="{{ asset('template/app/js/isotope.pkgd.js')}}"></script>
<script src="{{ asset('template/app/js/ajax-pagination.js')}}"></script>
<script src="{{ asset('template/app/js/Chart.js')}}"></script>
<script src="{{ asset('template/app/js/chartjs-plugin-deferred.js')}}"></script>
<script src="{{ asset('template/app/js/circle-progress.js')}}"></script>
<script src="{{ asset('template/app/js/loader.js')}}"></script>
<script src="{{ asset('template/app/js/run-chart.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('template/app/js/jquery.gifplayer.js')}}"></script>
<script src="{{ asset('template/app/js/mediaelement-and-player.js')}}"></script>
<script src="{{ asset('template/app/js/mediaelement-playlist-plugin.min.js')}}"></script>

<script src="{{ asset('template/app/js/base-init.js')}}"></script>
<script defer src="{{ asset('template/app/fonts/fontawesome-all.js')}}"></script>

<script src="{{ asset('template/app/Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>

</body>
</html>