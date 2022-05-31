@extends('layoutresult')
@section('main-content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Categories</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li class="active">Product name goes here</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">

                        <img src="{{ asset('img/'. $data->image) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{ asset('img/'. $data->image) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $data->name }}</h2>
                    <div>

                        <div class="product-rating">

                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s) | Add your review</a>
                    </div>
                    <div>

                        <h3 class="product-price"> {{number_format($data->price)}} VND <del class="product-old-price"></del></h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <?php  $explode_fullname = explode(',', $data->description ); ?>
                    <!-- <p>{{ $data->description }}</p> -->
                    @foreach( $explode_fullname as $item )
                    <p>{{ $item }}</p>

@endforeach
                    <!-- <p>{{ $data->description }}</p> -->

                    <div class="product-options">
                        <label>
                            Size
                            <select class="input-select">
                                <option value="0">X</option>
                            </select>
                        </label>
                        <label>
                            Color
                            <select class="input-select">
                                <option value="0">Red</option>
                            </select>
                        </label>
                    </div>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Qty
                            <div class="input-number">
                                <input type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        @if(Auth::check())
                        <a href="{{route('cart.add',['id'=>$data->id])}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                   @else
                   <button type="button" value="add to cart" class="add-to-cart-btn" id="btnaddcart"><i class="fa fa-shopping-cart"></i> add to cart</button>
                   @endif
                       
                    </div>

                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>manufactures:<span class="badge rounded-pill text-bg-info"> {{$data->manufacture->manu_name}}
                            </span></li>

                        <li></li>
                        <li><a href="#">Type</a></li>
                        <li><a href="#"><span class="badge rounded-pill text-bg-info"> {{ $data->protype->type_name }}
                                </span></a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab2">Details</a></li>
                        <li><a data-toggle="tab" href="#tab3">Reviews ({{$comment->count()}})</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">

                            <div class="row">

                                <!-- <form action="{{ url('comment')}}" method="post">
										@csrf
											<div class="mb-3">
                    <label for="comment_content" class="form-label">Comment</label>
					<input type="text" name="commentcontent" value="{{ old('commentcontent')}}" id="">
                   
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" name="rating" value="{{ old('rating')}}" class="form-control" id="rating" >
                </div>

				<input aria-label="Search" name="keyword" class="input" value="{{ old('keyword') }}"
                                    placeholder="Search here">

						<input type="text" name="commentid" value="{{ old('commentid')}}"    id="">
 <button type="submit">vvv</button>
				
				</form>
				 -->



                                <!-- Rating -->
                                <div class="col-md-3">
                                    <div id="rating">
                                        <div class="rating-avg">
                                            @if (count($comments) >0)
                                            <span>Có {{$comment->count()}} đánh giá</span>
                                            <br>
                                            @else

                                            <br>

                                            @endif
                                            @if (count($comments) >0)


                                            <span> {{ number_format($ratingstart / $comment->count(),1 )}}</span>
                                            @if(number_format($ratingstart / $comment->count(),1 ) >=4
                                            && number_format($ratingstart / $comment->count(),1 ) < 5) <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                        </div>

                                        @elseif(number_format($ratingstart / $comment->count(),1 ) >=3
                                        && number_format($ratingstart / $comment->count(),1 ) < 4) <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                    </div>
                                    @elseif(number_format($ratingstart / $comment->count(),1 ) >=2
                                    && number_format($ratingstart / $comment->count(),1 ) < 3) <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                </div>
                                @elseif(number_format($ratingstart / $comment->count(),1 ) >=1
                                && number_format($ratingstart / $comment->count(),1 ) < 2) <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                            </div>
                            @elseif(number_format($ratingstart / $comment->count(),1 ) ==5
                            )


                            <div class="rating-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            @else


                            <div></div>




                            @endif

                            @else
                            <span>Chưa có đánh giá</span>


                            <div class="rating-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            @endif
                        </div>
                        <ul class="rating">
                            <li>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-progress">
                                    @if($countrating5->count() >0)
                                    <div style="width: {{ ( $countrating5->count()/ $ratingall->count()  ) *100 }}%;"></div>


                                </div>
                                @else
                                <div></div>

                                @endif


                                <span class="sum">{{$countrating5->count()}}</span>

                            </li>
                            <li>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-progress">
                                    @if($countrating4->count() >0)
                                    <div style="width:{{ ( $countrating4->count()/ $ratingall->count()  ) *100   }}%;"></div>


                                </div>
                                @else
                                <div></div>
                                @endif
                                <span class="sum">{{$countrating4->count()}}</span>
                            </li>
                            <li>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-progress">
                                    @if($countrating3->count() >0)
                                    <div style="width:  {{ ( $countrating3->count()/ $ratingall->count()  ) *100   }}%;"></div>


                                </div>
                                @else
                                <div></div>
                                @endif
                                <span class="sum">{{$countrating3->count()}}</span>
                            </li>
                            <li>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-progress">
                                    @if($countrating2->count() >0)
                                    <div style="width:  {{ ( $countrating2->count()/ $ratingall->count()  ) *100   }}%;"></div>


                                </div>
                                @else
                                <div></div>
                                @endif
                                <span class="sum">{{$countrating2->count()}}</span>
                            </li>
                            <li>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-progress">

                                    @if($countrating1->count() >0)
                                    
                                    <div style="width:  {{ ( $countrating1->count()/ $ratingall->count()  ) *100   }}%;"></div>

                                </div>
                                @else
                                <div></div>
                                @endif
                                <span class="sum">{{$countrating1->count()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Rating -->

                <div class="col-1">
                    @if (count($comments) >0)

                    @foreach($comments as $item)

                    <div class="l"><img height="40px" width="40px" src="{{ asset('img/user-fb.jpg') }}" alt=""></div>
                    <br>
                    <br>
                    <br>
                    @endforeach
                    @endif
                </div>
                <!-- Reviews -->
                <div class="col-md-5">
                    <div id="reviews">


                        <ul class="reviews">
                            @if (count($comments) >0)

                            @foreach($comments as $item)

                            <li>

                                <div class="review-heading">

                                    <h5 class="name">{{$item->user_name}}</h5>
                                    <p class="date">{{$item->created_at}}</p>
                                    @if($item->rating ==4)
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    @endif
                                    @if($item->rating ==5)
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    @endif
                                    @if($item->rating ==3)
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    @endif
                                    @if($item->rating ==2)
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    @endif
                                    @if($item->rating ==1)
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>

                                    @endif

                                    <div class="delete">
                                        <form action="{{ url('comment/'.$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            @if(Auth::check())
                                            <button class="btn-primary" type="submit">Xoá đánh
                                                giá</button>

                                            @else
                                            <input id="btnsubmit" class="btn-primary" type="button" value="Xoá đánh giá">
                                            <!-- <button id="btnsubmit" class="btn-primary" type="submit">Xoá đánh
                                                                    giá</button> -->
                                            <!-- <input type="button" id="btnsubmit" class="primary-btn" value="Submit"> -->

                                            @endif

                                            <!-- <button class="btn-primary" type="submit">Xoá đánh
                                                                    giá</button> -->

                                        </form>
                                    </div>

                                </div>
                                <div class="review-body">
                                    <p>{{$item->comment_content}}</p>
                                </div>


                            </li>

                            @endforeach
                            @else
                            Chưa có bình luận
                            @endif
                            <li>

                            </li>

                        </ul>
                        <ul class="reviews-pagination">


                            {{ $comments->links()}}
                            <!-- <li class="active">1</li>
													
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- /Reviews -->

                <!-- Review Form -->
                <div class="col-md-3">
                    <div id="review-form">



                        <form action="{{ url('comment')}}" method="post" class="review-form">
                            @csrf


                            <input class="input" required="required" type="text" name="user_name" placeholder="Your Name">

                            <input class="input" required="required" name="user_gmail" type="email" placeholder="Your Email">

                            <textarea class="input" required="required" name="commentcontent" placeholder="Your Review"></textarea>



                            <!-- <input type="number" name="rating" value="{{ old('rating')}}" class="form-control" id="rating" > -->

                            <span>Vị trí sản phẩm : </span>
                            <input type="text" required="required" name="commentid" value="{{ $data->id}}" readonly id="">
                            <div class="input-rating">

                                <span>Your Rating: </span>
                                <div class="stars">
                                    <input id="star5" required="required" name="rating" value="5" type="radio"><label for="star5"></label>
                                    <input id="star4" required="required" name="rating" value="4" type="radio"><label for="star4"></label>
                                    <input id="star3" required="required" name="rating" value="3" type="radio"><label for="star3"></label>
                                    <input id="star2" required="required" name="rating" value="2" type="radio"><label for="star2"></label>
                                    <input id="star1" required="required" name="rating" value="1" type="radio"><label for="star1"></label>
                                </div>
                            </div>


                            @if(Auth::check())
                            <button class="primary-btn">Submit</button>

                            @else


                            <input type="button" id="btnsubmit" class="primary-btn" value="Submit">

                            @endif
                        </form>

                    </div>
                </div>
                <!-- /Review Form -->
            </div>
        </div>
        <!-- /tab3  -->
    </div>
    <!-- /product tab content  -->
</div>
</div>
<!-- /product tab -->
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div> -->

            <!-- product -->
            <!-- <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ asset('img/product01.png')}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                    view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div> -->
            <!-- /product -->

            <!-- product -->
            <!-- <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ asset('img/product01.png')}}" alt="">
                        <div class="product-label">
                            <span class="new">NEW</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                    view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div> -->
            <!-- /product -->

            <!-- <div class="clearfix visible-sm visible-xs"></div> -->

            <!-- product -->
            <!-- <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ asset('img/product01.png')}}" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                    view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div> -->
            <!-- /product -->

            <!-- product -->
            <!-- <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ asset('img/product01.png')}}" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                    view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div> -->
            <!-- /product -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->



@endsection