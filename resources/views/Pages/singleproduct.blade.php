@extends('Layout.master')


{{-- @section('title', '404') --}}
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
                                <img class="img-responsive m-auto" src="assets/images/product-image/3.png" alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="assets/images/product-image/3.png">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="assets/images/product-image/small-image/1.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="assets/images/product-image/small-image/2.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.jpg"
                                    alt="">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href="assets/images/product-image/small-image/3.jpg">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/3.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.jpg"
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
                        <h2>Arlo Wired Wi-Fi Video Doorbell
                        </h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">$114.50</li>
                            </ul>
                        </div>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                        </div>
                        <p class="mt-30px">Arlo Essential Wired Video Doorbell - HD Video, 180° View, Night Vision, 2 Way
                            Audio, DIY Installation (wiring required), Security Camera, Doorbell Camera, Home Security
                            Cameras, White - AVD1001
                        </p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Model Number:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">000000000</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">Smart Entry </a>
                                </li>

                            </ul>
                        </div>

                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <a href="cart.html" class="add-cart">Add To Cart</a>
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
                            <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews (01)</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <!-- <div id="des-details2" class="tab-pane">
                                            <div class="product-anotherinfo-wrapper text-start">
                                                <ul>
                                                    <li><span>Compatibility</span> Google Assistant, Amazon Alexa, Apple HomeKit</li>
                                                    <li><span>Dimensions</span>4.7 x 14.3 x 3.7 cm</li>
                                                    <li><span>Connectivity</span> Wifi - No Hub Required</li>
                                                    <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                                </ul>
                                            </div>
                                        </div> -->
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        Keep a track of your visitors, online deliveries, and more by simply installing the
                                        Arlo wired Wi-Fi video doorbell. Ideal for outdoors, this doorbell features HD
                                        camera with 1536 x 1536 resolution that displays your visitors in crystal-clear
                                        clarity. It also sends a phone call directly to connected smartphone whenever the
                                        bell is pressed, so you would never get a chance to miss the visitor. </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="assets/images/review-image/Screenshot 2023-08-26 202155.png"
                                                        alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>Elena Gilbert</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Excellent Camera for the price. Purchased 3. The video and sound
                                                            are surpurb. Lets me playback on my phone to view, save etc.
                                                            Even has night light vision with a light per camera. Excellent
                                                            vision. Siren man oh man its loud enough to shoo whomever away.
                                                            Plus you can connect to Fire and Police, plus friends, if you so
                                                            please. Bought 3 backup batteries. I highly recommend...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="single-review child-review">
                                                            <div class="review-img">
                                                                <img src="assets/images/review-image/2.png" alt="" />
                                                            </div>
                                                            <div class="review-content">
                                                                <div class="review-top-wrap">
                                                                    <div class="review-left">
                                                                        <div class="review-name">
                                                                            <h4>White Lewis</h4>
                                                                        </div>
                                                                        <div class="rating-product">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="review-left">
                                                                        <a href="#">Reply</a>
                                                                    </div>
                                                                </div>
                                                                <div class="review-bottom">
                                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                                        cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                                        euismod vehicula.</p>
                                                                </div>
                                                            </div>
                                                        </div> -->
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
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="assets/images/product-image/31.png" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/31.png"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Smart Entry</a></span>
                                        <h5 class="title"><a href="single-product.html">Blink Video Doorbell with Sync

                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$74.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="assets/images/product-image/32.png" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/32.png"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Smart Entry</a></span>
                                        <h5 class="title"><a href="single-product.html">Ring Wi-Fi Video Doorbell Pro 2

                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$233.50</span>
                                            <span class="new">$210.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="assets/images/product-image/33.png" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/33.png"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Smart Entry</a></span>
                                        <h5 class="title"><a href="single-product.html">Google Nest Wire-Free Video

                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$239.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="assets/images/product-image/34.png" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/34.png"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Smart Entry</a></span>
                                        <h5 class="title"><a href="single-product.html">Nexxt Solutions Connectivity
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$79.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="assets/images/product-image/35.png" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/35.png"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Smart Entry</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="swiper-slide"> -->
                            <!-- Single Prodect -->
                            <!-- <div class="product">
                                                <span class="badges">
                                                <span class="sale">-8%</span>
                                                <span class="new">Sale</span>
                                                </span>
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="assets/images/product-image/6.webp" alt="Product" />
                                                        <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="category"><a href="#">Accessories</a></span>
                                                    <h5 class="title"><a href="single-product.html">Smart Table Camera
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                    <span class="old">$138.50</span>
                                                    <span class="new">$112.50</span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                            class="pe-7s-like"></i></button>
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                            class="pe-7s-refresh-2"></i></button>
                                                </div>
                                            </div> -->
                            <!-- </div>
                                        <div class="swiper-slide"> -->
                            <!-- Single Prodect -->
                            <!-- <div class="product">
                                                <span class="badges">
                                                <span class="new">Sale</span>
                                                </span>
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="assets/images/product-image/7.webp" alt="Product" />
                                                        <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="category"><a href="#">Accessories</a></span>
                                                    <h5 class="title"><a href="single-product.html">Round Pocket Router
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                    <span class="new">$38.50</span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                            class="pe-7s-like"></i></button>
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                            class="pe-7s-refresh-2"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide"> -->
                            <!-- Single Prodect -->
                            <!-- <div class="product">
                                                <span class="badges">
                                                <span class="sale">-5%</span>
                                                </span>
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="assets/images/product-image/8.webp" alt="Product" />
                                                        <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="category"><a href="#">Accessories</a></span>
                                                    <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                    <span class="old">$260.00</span>
                                                    <span class="new">$238.50</span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                            class="pe-7s-like"></i></button>
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                            class="pe-7s-refresh-2"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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
