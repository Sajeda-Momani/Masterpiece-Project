@extends('Layout.master')


{{-- @section('title', 'home') --}}
@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                    data-bg-image="assets/images/hero/bg/hero-bg-2-1.webp">
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1">Easy Your Life <br>
                                        with Smart Device </h2>
                                    <span class="price">
                                        <span class="mini-title"> from</span>
                                        <span class="amount">$140.99</span>
                                    </span>
                                    <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop
                                        All Devices</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <img src="assets/images/hero/inner-img/image (2).png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                    data-bg-image="assets/images/hero/bg/hero-bg-2-1.webp">
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1">Easy Your Life <br>
                                        with Smart Device </h2>
                                    <span class="price">
                                        <span class="mini-title"> from</span>
                                        <span class="amount">$180.50</span>
                                    </span>
                                    <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop
                                        All Devices</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <img src="assets/images/hero/inner-img/image (1).png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->
    <!-- Banner Area Start -->
    <div class="banner-area style-two pt-100px pb-100px">
        <div class="container">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="single-banner nth-child-2 fixalign ">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smart Assistants</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Smart Assistants.png" alt=""
                            style="height: 250px; width: 200px;padding: 15px;">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="single-banner nth-child-2 fixalign">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Security Cameras</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Security Cameras.png" alt=""
                            style="height: 250px; width: 200px;padding: 15px;">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="single-banner nth-child-2 fixalign">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smart Entry</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Smart Entry.png" alt=""
                            style="height: 250px; width: 250px;padding: 15px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner nth-child-2 fixalign">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smart Lights</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Smart Lights.png" alt=""
                            style="height: 250px; width: 250px;padding: 10px;">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="single-banner nth-child-2 fixalign ">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Smart Switches</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Smart Switches.png" alt=""
                            style="height: 250px; width: 250px;padding: 10px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner nth-child-2 fixalign">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Streaming Devices</h3>
                            <span class="category">From $95.00</span>
                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        <img src="assets/images/banner/Streaming Devices.png" alt=""
                            style="height: 250px; width: 80px; margin-right: 20px;padding: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Banner Area End -->
    <!-- Product Area Start -->
    <div class="product-area pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">New Products</h2>
                        <p>Discover our latest collection of products that have just arrived</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="row mb-n-30px">
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/1.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Streaming Devices</a></span>
                                    <h5 class="title"><a href="single-product.html">Apple TV 4K 128GB</a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">$199.50</span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/2.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/2.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Security Cameras
                                        </a></span>
                                    <h5 class="title"><a href="single-product.html">Blink Outdoor Wire
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">$129.50</span>
                                        <span class="new">$119.50</span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/3.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/3.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Smart Entry
                                        </a></span>
                                    <h5 class="title"><a href="single-product.html">Arlo Wired Wi-Fi Video Doorbell

                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">$114.50</span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/4.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/4.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Smart Lights
                                        </a></span>
                                    <h5 class="title"><a href="single-product.html">Smart Night Light Bulb
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/5.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/5.jpg"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Smart Assistants</a></span>
                                    <h5 class="title"><a href="single-product.html">Smart speaker with Alexa
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">$68.25 </span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-8%</span>
                                    <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/6.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/6.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Security Cameras
                                        </a></span>
                                    <h5 class="title"><a href="single-product.html">Smart Table Camera
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">$299.99
                                        </span>
                                        <span class="new">$279.99
                                        </span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/7.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/7.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Smart Switches </a></span>
                                    <h5 class="title"><a href="single-product.html">Wink Relay

                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">$39.99
                                        </span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-5%</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/8.png" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/8.png"
                                            alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Smart Switches</a></span>
                                    <h5 class="title"><a href="single-product.html">Gosund Mini Smart Plug
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="old">$25.99 </span>
                                        <span class="new">$20.99</span>
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
                                        data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px"> -->
                        <!-- Single Prodect -->
                        <!-- <div class="product">
                                            <span class="badges">
                                            </span>
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="assets/images/product-image/9.png" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9.png"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <span class="category"><a href="#"> Smart Assistants</a></span>
                                                <h5 class="title"><a href="single-product.html">Amazon Echo Dot
         
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$79.99</span>
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
                                        </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    <!-- Banner Area Start -->
    <!-- <div class="banner-area style-three pb-100px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-banner mb-lm-30px">
                                    <img src="assets/images/banner/8.webp" alt="">
                                    <div class="banner-content nth-child-3">
                                        <h3 class="title">Smart Watch For <br>
                                            Your Hand</h3>
                                        <span class="category">From $69.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-banner">
                                    <img src="assets/images/banner/9.webp" alt="">
                                    <div class="banner-content nth-child-2">
                                        <h3 class="title">Smart Watch For <br>
                                            Your Hand</h3>
                                        <span class="category">From $95.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Banner Area End -->
    <!-- Feature product area start -->
    <div class="feature-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title"> Smartify Packages</h2>
                        <p>Discover our Packages of advanced electronic devices,that needed to create a smarter home. </p>
                    </div>

                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/3.png" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ooma 11-Sensor Home Security System </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$150.99</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Kit Size : <span>11-piece kit</span></li>
                                    <li>Motion Sensors : <span>Yes</span></li>
                                    <li>Operating : <span>Indoor</span></li>
                                    <li>Colour: <span> White</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/4.png" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Night Owl Wired 12-CH 1TB DVR Security
                                        System </a></h5>
                                <span class="price">
                                    <span class="new">$279.99</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Kit Size : <span>8-piece kit</span></li>
                                    <li>Connection : <span>Wired</span></li>
                                    <li>Operating : <span>Indoor & Outdoor</span></li>
                                    <li>Colour: <span> Black; White</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/1.png" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ring Alarm 9-Piece Security Kit (2nd
                                        Gen)</a></h5>
                                <span class="price">
                                    <span class="new">$279.99</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Kit Size : <span>9-piece kit</span></li>
                                    <li>Motion Sensors : <span>Yes</span></li>
                                    <li>Operating : <span>Indoor</span></li>
                                    <li>Colour: <span> White</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/2.png" alt="">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Eufy eufyCam 2 Pro Wireless Security
                                        System </a></h5>
                                <span class="price">
                                    <span class="new">$279.99</span>
                                </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Kit Size : <span>3-piece kit</span></li>
                                    <li>Connection : <span>Wire-Free</span></li>
                                    <li>Operating : <span>Outdoor</span></li>
                                    <li>Colour: <span> White</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature product area End -->
    <!-- Fashion Area Start -->
    <!-- <div class="fashion-area" data-bg-image="assets/images/fashion/fashion-bg.webp">
                    <div class="container h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-12 text-center">
                                <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize m-auto">Shop All
                                    Devices</a>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Fashion Area End -->
    <!-- Feature Area Srart -->
    <div class="feature-area  pb-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
    <!-- Blog area start from here -->
    <!-- <div class="main-blog-area pb-100px">
                    <div class="container"> -->
    <!-- section title start -->
    <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center mb-30px0px">
                                    <h2 class="title">Latest Blog</h2>
                                    <p> There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div> -->
    <!-- section title start -->
    <!-- <div class="row">
                            <div class="col-lg-6 col-sm-6 mb-xs-30px">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/1.webp"
                                                class="img-responsive w-100" alt=""></a>
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-athor-date line-height-1">
                                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                                2030</span>
                                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                        aria-hidden="true"></i> Wild Nick</a></span>
                                        </div>
                                        <h5 class="blog-heading"><a class="blog-heading-link"
                                                href="blog-single-left-sidebar.html">10 Quick Tips About Smart Product</a></h5>
                                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut
                                            labore</p>
                                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                                    </div>
                                </div>
                            </div> -->
    <!-- End single blog -->
    <!-- <div class="col-lg-6 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/2.webp"
                                                class="img-responsive w-100" alt=""></a>
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-athor-date line-height-1">
                                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                                2030</span>
                                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                                        aria-hidden="true"></i> Oaklee Odom</a></span>
                                        </div>
                                        <h5 class="blog-heading"><a class="blog-heading-link"
                                                href="blog-single-left-sidebar.html">5 Real-Life Lessons About Smart Product</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut
                                            labore</p>
                                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                                    </div>
                                </div>
                            </div> -->
    <!-- End single blog -->
    <!-- </div>
                    </div> -->
    <!-- </div> -->
    <!-- Blog area end here -->

    <!-- <img src="assets/images/banner/Villa-removebg.png" style="display: block;height: auto;width: 100%;padding:5% ;"> -->
    <div class="brand-area  pb-100px">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2 class="title"> Brands</h2>
                </div>
            </div>
            <div class="brand-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/1.png"
                                alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/2.png"
                                alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/3.png"
                                alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/4.png"
                                alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/5.png"
                                alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="assets/images/partner/6.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area Start -->

    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                            class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/5.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/5.webp" alt="">
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
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
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
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis
                                    aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="assets/images/icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
