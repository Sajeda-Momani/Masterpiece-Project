@extends('Layout.master')

@section('content')
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/3.png" alt="">
                                <a class="venobox full-preview" data-gall="myGallery" href="images/product-image/3.png">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/1.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="images/product-image/small-image/1.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/2.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="images/product-image/small-image/2.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/3.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="images/product-image/small-image/3.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/3.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/1.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/2.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="images/product-image/small-image/3.jpg"
                                    alt="">
                            </div>

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2> {{ $product->name }}
                        </h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">${{ $product->price }}</li>
                            </ul>
                        </div>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < round($averageRating))
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                            </div>
                            <span class="read-review">
                                <a class="reviews" href="">{{ $reviews->count() }} Customer Review</a>
                            </span>
                        </div>
                        <p class="mt-30px">{{ $product->brief }}
                        </p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Brand Name:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product->brand }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Category: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product->category->name }} </a>
                                </li>

                            </ul>
                        </div>

                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">


                                <a href="{{ route('cart') }}" class="add-cart">Add To Cart</a>
                                {{-- <a href="{{ route('addToCart', $product->id) }}" class="add-cart">Add To Cart</a> --}}
                                <!-- <button class="add-cart"> Add To Cart</button> -->

                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <!-- <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button> -->
                            <button class="active" data-bs-toggle="tab"
                                data-bs-target="#des-details1">Description</button>
                            <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews
                                ({{ $reviews->count() }})</button>
                        </div>
                        <div class="tab-content description-review-bottom">

                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-wrapper">
                                            @foreach ($product->reviews as $review)
                                                <div class="single-review">
                                                    <div class="review-img">
                                                        <img src="images/review-image/Screenshot 2023-08-26 202155.png"
                                                            alt="">
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>{{ $review->customer->name }}</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    @for ($i = 0; $i < $review->rating; $i++)
                                                                        <i class="fa fa-star"></i>
                                                                    @endfor

                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>{{ $review->content }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <button class="btn btn-primary btn-hover-color-primary "
                                                                    type="submit" value="Submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Related Products</h2>
                        <p>Discover a variety of options that resemble what you're looking for</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            @foreach ($relatedProducts as $relatedProduct)
                                <div class="swiper-slide">
                                    <!-- Single Product -->
                                    <div class="product">
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="{{ url('singleproduct', $product->id) }}" class="image">
                                                <img src="{{ asset($relatedProduct->image1) }}"
                                                    alt="{{ $relatedProduct->name }}" />
                                                <img class="hover-image" src="{{ asset($relatedProduct->image2) }}"
                                                    alt="{{ $relatedProduct->name }}" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a
                                                    href="{{ url('category.show', $relatedProduct->category->id) }}">{{ $relatedProduct->category->name }}</a></span>
                                            <h5 class="title"><a
                                                    href="{{ url('singleproduct', $product->id) }}">{{ $relatedProduct->name }}</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">${{ $relatedProduct->price }}</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Cart">
                                                <i class="pe-7s-shopbag"></i>
                                            </button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Wishlist">
                                                <i class="pe-7s-like"></i>
                                            </button>
                                            <button class="action quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="pe-7s-look"></i>
                                            </button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Compare">
                                                <i class="pe-7s-refresh-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Product Area End -->
@endsection
