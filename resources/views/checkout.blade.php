<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href='{{ asset("css/bootstrap.min.css") }}' />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">


	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>


	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>

				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
					@if(!isset(Auth::user()->name))

					<li><a href="#"><i class="fa fa-login"></i> My Account</a></li>
					<li><a href="{{ url('login') }}"><i class="fa fa-login"></i> Log In</a></li>
					@else
					<li><a href="#"><i class="fa fa-user-o"></i>{{Auth::user()->name}} </a></li>

					<a style="color:white" href="#" data-toggle="modal" data-target="#logoutModal"><i style="color:red" class="fa fa-sign-out" aria-hidden="true"></i>
					</a>
					@endif
					<!-- Logout Modal-->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									<form method="POST" action="{{ route('logout') }}" class="btn btn-primary">
										@csrf
										<x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();" style="text-decoration: none; color: #fff !important">
											{{ __('Log Out') }}
										</x-responsive-nav-link>
									</form>
								</div>
							</div>
						</div>
					</div>

				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-4">
						<div class="header-logo">
							<a href="{{ url('index')}}" class="logo" style="height:10px ;width:80px">
								<img src="{{ asset('img/logo.png')}}" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->
				</div>



				<div class="row">
					<div class="col-md-12 col-xs-6">

						<div class="section-nav">
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>


						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>



								<div class="product-img">
									<img height="300px" width="1200px" src="{{ asset('img/banner04.jpg')}}" alt="" href="{{ url('blank')}}">
								</div>

							</div>

							<div>


								<div class="product-img">
									<img src="{{ asset('img/baner02.png')}}" alt="" href="{{ url('blank')}}">
								</div>

							</div>
							<div>
								<div class="product-img">
									<img height="300px" width="1200px" src="{{ asset('img/banner_tissot.jpg')}}" alt="" href="{{ url('blank')}}">
								</div>
							</div>

							<div>
								<div class="product-img">
									<img height="300px" width="1200px" src="{{ asset('img/banner-am-thanh-3.jpg')}}" alt="" href="{{ url('blank')}}">
								</div>
							</div>
							<div>
								<div class="product-img">
									<img height="300px" width="1200px" src="{{ asset('img/banner-C1_AMD.png')}}" alt="" href="{{ url('blank')}}">
								</div>
							</div>
							<div>
								<div class="product-img">
									<img height="300px" width="1200px" src="{{ asset('img/Website_1200x300px_Thang_03_2022_redmi_note_11.jpg')}}" alt="" href="{{ url('blank')}}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- row -->
		</div>
		<!-- container -->
		</div>
		<!-- /MAIN HEADER -->




	</header>
	<!-- /HEADER -->






	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<style>
					.order-details {
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
						border: 1px solid black;
					}

					input[type=text] {
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
					}
				</style>
				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h1 class="title" style="text-align: center">Billing address</h1>
						</div>
						<form action="order" method="post">
							@csrf
							<div class="form-group">
								<input class="input" required="required" type="text" name="first_name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" required="required" type="text" name="last_name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" required="required" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" required="required" type="tel" name="tel" placeholder="Telephone">
							</div>
					</div>
					<!-- Order Details -->
					<div class="col-md-2"></div>
					<div class="col-md-8 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						@if($cart->items != null)
						@foreach($cart->items as $item)
						<div class="order-summary">

							<div class="col-sm-2 hidden-xs"><img src="{{ asset('/img') }}/{{ $item['image'] }}" style="width: 80px" alt="">
							</div>

							<div class="order-col">

								<div><strong>{{ $item['quantity'] }} PRODUCT</strong></div>

								<div>
									<input type="text" readonly value="{{ $item['name'] }}" name="product_name" id="">
								</div>
							</div>
							<div class="order-products">


								<div class="order-col">

									<!-- <div>
										<input type="text" readonly value="{{ $item['name'] }}" name="product_name" id="">
											</div> -->
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div>Location</div>
								<div> <input type="text" readonly name="product_id" value="{{$item['id']}}" id=""></div>

							</div>
							<div class="order-col">

								<div><strong>TOTAL</strong></div>
								<div>

									<input type="text" style="color:red" readonly name="money" value="{{ $item['price']*$item['quantity'] }}" name="" id=""> VND
								</div>
							</div>

						</div>
						@endforeach
						@else

						<p> not have a row</p>
						@endif
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						@if($cart->items != null)
						<button type="submit" class="primary-btn order-submit"><i class="fa fa-credit-card" aria-hidden="true"></i> ORDER</button>
						@else
						<div class="btn btn-primary">
							ORDER
						</div>

						@endif
					</div>

				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		</form>

		@yield('main-content')

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">

							<p> <strong>Invoice paid by mail</strong></p>
							<form action="{{ route('send') }}" method="get">
								<input class="input" type="email" name="email" placeholder="Enter Your Email">
								@if($cart->items != null)
								<p></p>
								<a href="{{ route('send') }}"><button class="primary-btn send-btn"><i class="fa fa-envelope"></i> SEND ORDERS INVOICE</button></a>
								<br>
								@else
								<button class="primary-btn send-btn"><i class="fa fa-envelope"></i> SEND ORDERS INVOICE</button>
								<br>
								@endif
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->

					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<!-- <div class="clearfix visible-xs"></div> -->

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
		</script>
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/slick.min.js') }}"></script>
		<script src="{{ asset('js/nouislider.min.js') }}"></script>
		<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		<script src="{{ asset('js/script2s.js') }}"></script>
</body>

</html>