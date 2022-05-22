
<?php
include "header.php";
?>
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
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
							<h3 class="title">New Products Smartphones</h3>
							<div class="section-nav">
								
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a class="tab1" data-toggle="tab" href="#tab1" >Smartphones</a></li>

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
										<?php 

										//var_dump($tab1);
										$getNewProductType = $product->getNewProductType(1);
										foreach($getNewProductType as $value){ ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button href="addcart.php?id=<?php echo $value['id'];?>" class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i> 
												<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												
											</button>
											</div>
										</div>
										<!-- /product -->
										<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products Laptop</h3>
							<div class="section-nav">
								
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a class="tab1" data-toggle="tab" href="#tab1" >Laptop</a></li>
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
										<?php 

										//var_dump($tab1);
										$getNewProductType = $product->getNewProductType(1);
										foreach($getNewProductType as $value){ ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button href="addcart.php?id=<?php echo $value['id'];?>" class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i> 
												<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												
											</button>
											</div>
										</div>
										<!-- /product -->
										<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products Tablet</h3>
							<div class="section-nav">
								
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a class="tab1" data-toggle="tab" href="#tab1" >Tablet</a></li>

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
										<?php 

										//var_dump($tab1);
										$getNewProductType = $product->getNewProductType(3);
										foreach($getNewProductType as $value){ ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button href="addcart.php?id=<?php echo $value['id'];?>" class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i> 
												<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												
											</button>
											</div>
										</div>
										<!-- /product -->
										<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products Accessory</h3>
							<div class="section-nav">
								
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a class="tab1" data-toggle="tab" href="#tab1" >Accessory</a></li>
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
										<?php 

										//var_dump($tab1);
										$getNewProductType = $product->getNewProductType(4);
										foreach($getNewProductType as $value){ ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button href="addcart.php?id=<?php echo $value['id'];?>" class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i> 
												<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												
											</button>
											</div>
										</div>
										<!-- /product -->
										<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products Smart watch</h3>
							<div class="section-nav">
								
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a class="tab1" data-toggle="tab" href="#tab1" >Smart watch</a></li>
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
										<?php 

										//var_dump($tab1);
										$getNewProductType = $product->getNewProductType(5);
										foreach($getNewProductType as $value){ ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button href="addcart.php?id=<?php echo $value['id'];?>" class="add-to-cart-btn">
												<i class="fa fa-shopping-cart"></i> 
												<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												
											</button>
											</div>
										</div>
										<!-- /product -->
										<?php } ?>
									</div>
									
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
							<h3 class="title">Top Highlights Smartphones</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Smartphones</a></li>
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
										<?php
										$getTopProductType = $product->getTopProductType(1);
										foreach($getTopProductType as $value){ ?>
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> 
													<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												</button>
												</div>
											</div>
											<!-- /product -->
											<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Highlights Laptop</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptop</a></li>
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
										<?php
										$getTopProductType = $product->getTopProductType(2);
										foreach($getTopProductType as $value){ ?>
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> 
													<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												</button>
												</div>
											</div>
											<!-- /product -->
											<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Highlights Tablet</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Tablet</a></li>
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
										<?php
										$getTopProductType = $product->getTopProductType(3);
										foreach($getTopProductType as $value){ ?>
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> 
													<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												</button>
												</div>
											</div>
											<!-- /product -->
											<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Highlights Accessory</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Accessory</a></li>
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
										<?php
										$getTopProductType = $product->getTopProductType(4);
										foreach($getTopProductType as $value){ ?>
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> 
													<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
												</button>
												</div>
											</div>
											<!-- /product -->
											<?php } ?>
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
								<!-- row -->
								<div class="row">

<!-- section title -->
<div class="col-md-12">
	<div class="section-title">
		<h3 class="title">Top Highlights SWART WATCH</h3>
		<div class="section-nav">
			<ul class="section-tab-nav tab-nav">
				<li class="active"><a data-toggle="tab" href="#tab2">Accessory</a></li>
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
					<?php
					$getTopProductType = $product->getTopProductType(5);
					foreach($getTopProductType as $value){ ?>
						<!-- product -->
						<div class="product">
							<div class="product-img">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
								
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="product.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> 
								<a href="addcart.php?id=<?php echo $value['id'] ?>">add to cart</a>
							</button>
							</div>
						</div>
						<!-- /product -->
						<?php } ?>
				</div>
				
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
		
<?php 
include "footer.html";
?>