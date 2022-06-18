@extends('layout')
@section('main-content')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="{{ url('product')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="{{ url('product')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="{{ url('product')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#">All</a></li>
							<!-- <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
								<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
								<li><a data-toggle="tab" href="#tab1">Accessories</a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->

								@foreach($data as $row)
								<div class="product"><a href="{{ url('product/'.$row->id)}}">


										<div class="product-img">
											<img src="{{ asset('img/'.$row->image) }}" alt="" href="{{ url('blank')}}">

											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">

											<p class="product-category">Category <span class="badge rounded-pill text-bg-info"> {{ $row->protype->type_name }}</span> </p>
											<h3 class="product-name"><a href="{{ url('product/'.$row->id)}}">{{ $row->name }}</a></h3>
											<h4 class="product-price">{{number_format($row->price)}} VND<del class="product-old-price"></del></h4>

											<div class="product-rating">

												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><a href="{{ url('book/'.$row->id)}}"><i id="love" class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>


												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<!-- Kiểm tra giỏ hàng khi chưa đăng nhập -->
										<div class="add-to-cart">
											@if(Auth::check())
											<a href="{{route('cart.add',['id'=>$row->id])}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											@else
											<button type="button" value="add to cart" class="add-to-cart-btn" id="btnaddcart"><i class="fa fa-shopping-cart"></i> add to cart</button>


											@endif
										</div>
									</a></div>

								@endforeach

								<!-- /product -->
							</div>


							<div id="slick-nav-1" class="products-slick-nav"></div>

						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#">ALL</a></li>

						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">

							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								@foreach($data as $row)
								<div class="product"><a href="{{ url('product/'.$row->id)}}">
										<div class="product-img">
											<img src="{{ asset('img/'.$row->image)}}" alt="" href="{{ url('blank')}}">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">{{$row->protype->type_name}}</p>
											<h3 class="product-name"><a href="{{ url('product/'.$row->id)}}">{{$row->name}}</a></h3>
											<h4 class="product-price">{{number_format($row->price)}} VND <del class="product-old-price"></del></h4>


											<div class="product-rating">

												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><a href="{{ url('book/'.$row->id)}}"><i id="love" class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											@if(Auth::check())
											<a href="{{route('cart.add',['id'=>$row->id])}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											@else
											<button type="button" value="add to cart" class="add-to-cart-btn" id="btnaddcart"><i class="fa fa-shopping-cart"></i> add to cart</button>


											@endif
										</div>
									</a>
								</div>

								@endforeach
								<!-- /product -->







							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Phone</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<!-- product widget -->
						@foreach($type as $row)
						<div class="product-widget">
							<div class="product-img">
								<img src="{{ asset('img/'.$row->image)}}" alt="" href="{{ url('blank')}}">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="{{ url('product/'.$row->id)}}">{{$row->name}}</a></h3>
								<h4 class="product-price">{{number_format($row->price)}} VNĐ<del class="product-old-price"></del></h4>
							</div>
						</div>
						@endforeach
						<!-- /product widget -->

					</div>

				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Laptop</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						@foreach($type1 as $row)
						<div class="product-widget">
							<div class="product-img">
								<img src="{{ asset('img/'.$row->image)}}" alt="" href="{{ url('blank')}}">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="{{ url('product/'.$row->id)}}">{{$row->name}}</a></h3>
								<h4 class="product-price">{{number_format($row->price)}} VNĐ<del class="product-old-price"></del></h4>
							</div>
						</div>
						@endforeach
						<!-- product widget -->
					</div>

				</div>
			</div>

			<!-- <div class="clearfix visible-sm visible-xs"></div> -->

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Accessories</h4>
				</div>
				<div>
					<!-- product widget -->
					@foreach($type2 as $row)
					<div class="product-widget">
						<div class="product-img">
							<img src="{{ asset('img/'.$row->image)}}" alt="" href="{{ url('blank')}}">

						</div>
						<div class="product-body">
							<p class="product-category"></p>
							<h3 class="product-name"><a href="{{ url('product/'.$row->id)}}">{{$row->name}}</a></h3>
							<h4 class="product-price">{{number_format($row->price)}} VNĐ <del class="product-old-price"></del></h4>
						</div>

					</div>
					@endforeach

				</div>

				<div>
				</div>

			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection