<!DOCTYPE html>
<html lang="en">
<head>

	<title>Labolink</title>

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
					<h3 class="logo-title">Labolink</h3>
					<div class="sub-title text-center">JOB WORK SEARCH</div>
				</div>
			</a>

			<!-- <a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-menu-icon')}}"></use></svg>
			</a> -->

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
				<h1>Welcome to the Labol</h1>
				<h6> สร้างสังคม ออนไลน์เพื่อผู้ประกอบการและผู้สมัครงาน
				สามารถเข้าสรรหาบุคลากรและงานที่ตรงกับความต้องการได้ตลอด
				เป็นช่องทางเสริมสร้างสัมพันธภาพที่ดีระหว่างผู้ประกอบการ
				และผู้สมัครงานด้วยการบริการที่โดดเด่นแบบ online
				ซึ่งนำเทคโนโลยีมาพัฒนาอย่างสร้างสรรค์เพื่องานด้านบริหารสรรหาได้อย่างทันท่วงที
				และตอบสนองความต้องการให้กลุ่มเป้าหมายได้อย่างคุ้มค่า คล่องตัว ประหยัดเวลา และเกิดประสิทธิภาพสูงสุด</h6>
			
				<!-- <a href="#" class="btn btn-md btn-border c-white">Register Now!</a> -->
			</div>

			<div class="landing-content">
				<h3>ได้งานง่ายๆ ใน 3 ขั้นตอน</h3>
				<div class="row">
					<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 center"><h6 style=" color: white; ">สร้างโปรไฟล์</h6></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 center"><img src="{{ asset('template/src/img/info2.png')}}"  style=" padding: 10px; "></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 center">สร้างโปรไฟล์ง่ายๆ โดยกรอกข้อมูลการสมัคร กับ Labolink</div>
					</div>
					<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><h6 style=" color: white; ">Add Line</h6></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><img src="{{ asset('template/src/img/labolineId.png')}}"  style=" padding: 10px; "></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Add Line Labolink ผ่าน QRCode</div>
					</div>
					<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><h6 style=" color: white; ">รอติดต่อกลับรับงานที่ใช่</h6></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><img src="{{ asset('template/src/img/info3.png')}}"  style=" padding: 10px; "></div>
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">อ่านข้อมูลบริษัท กดสมัครงาน รอเรียกสัมภาษณ์งาน</div>
					</div>
				</div>
			
				<!-- <a href="#" class="btn btn-md btn-border c-white">Register Now!</a> -->
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form" style="padding-top: 0px;">
				<!-- Nav tabs -->
				<!-- <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-login-icon')}}"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-register-icon')}}"></use></svg>
						</a>
					</li>
				</ul> -->
			
				<!-- Tab panes -->
				<div class="tab-content">
					<divdiv class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Labolink</div>
						<form class="content" action="{{ url('/register') }}"  method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
									@if ($error['msg'])
										<div class="alert alert-danger">
											{{ $error['msg'] }}
										</div>
									@endif
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email" required="required">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
											<label class="control-label">Line Id</label>
											<input class="form-control" placeholder="" type="text" name="lineId">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" name="fname" required="required">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text" name="lname" required="required">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Telephone</label>
										<input class="form-control" placeholder="" type="text" name="tel" required="required">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="datetimepicker" value="10/24/1958" name="birthday"/>
										<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="{{ asset('template/app/svg-icons/sprites/icons.svg#olymp-calendar-icon')}}"></use></svg>
													</span>
									</div>
			 					</div>
								
									<!-- <div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div> -->
									<input type="submit" name="registration" class="btn btn-lg btn-primary full-width" value="Complete Registration!" />
								<!--	<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>-->

								</div>
							</div>
						</form>
					</div>
			
					<!-- <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" action="{{ url('/login') }}"  method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Username</label>
										<input class="form-control" placeholder="" type="text" name="username" required="required" pattern="[A-Za-z0-9]{1,20}">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password" required="required" pattern="[A-Za-z0-9]{1,20}">
									</div>
			
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot">Forgot my Password</a>
									</div>
									<div id="fb-root"></div>
								<!--	<script>
											(function(d, s, id) {
											var js, fjs = d.getElementsByTagName(s)[0];
											if (d.getElementById(id)) return;
											js = d.createElement(s); js.id = id;
											js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=460399737735474&autoLogAppEvents=1';
											fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));
									</script> -->

									
									<!-- <div class="col-md-12">
											<div class="col-md-12"> <input type="submit" name="login" class="btn btn-lg btn-primary full-width" value="Login" /></div>
									
									<div class="or"></div> -->
									<div class="fb-login-button center col-md-12" data-width="300px" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
								
									</div>
									<!--<a href="#" class="btn btn-lg btn-primary full-width">Login</a>-->
			<!--
								
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			-->
									<!-- <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div> -->
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
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