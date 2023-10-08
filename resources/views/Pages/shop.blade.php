@extends('Layout.master')


{{-- @section('title', '404') --}}
@section('content')
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>12</span> Product Found of <span>30</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px ">
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
                                                        <span class="category"><a href="#">Streaming
                                                                Devices</a></span>
                                                        <h5 class="title"><a href="single-product.html">Apple TV 4K 128GB
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$199.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
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
                                                        <span class="category"><a href="#">Security Cameras</a></span>
                                                        <h5 class="title"><a href="single-product.html">Blink Outdoor Wire
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="old">$48.50</span>
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="new">Sale</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/3.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/3.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart Entry</a></span>
                                                        <h5 class="title"><a href="single-product.html">Arlo Wired Wi-Fi
                                                                Video Doorbell

                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$90.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="new">New</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/4.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/4.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart Lights</a></span>
                                                        <h5 class="title"><a href="single-product.html">Smart Night Light
                                                                Bulb
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/5.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart
                                                                Assistants</a></span>
                                                        <h5 class="title"><a href="single-product.html">Smart speaker
                                                                with Alexa
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="sale">-8%</span>
                                                        <span class="new">Sale</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/6.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/6.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Security Cameras
                                                            </a></span>
                                                        <h5 class="title"><a href="single-product.html">Smart Table
                                                                Camera
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="old">$138.50</span>
                                                            <span class="new">$112.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="new">Sale</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/7.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/7.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart Switches</a></span>
                                                        <h5 class="title"><a href="single-product.html">Wink Relay
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="sale">-5%</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/8.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/8.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart Switches</a></span>
                                                        <h5 class="title"><a href="single-product.html">Gosund Mini Smart
                                                                Plug
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="old">$260.00</span>
                                                            <span class="new">$238.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px">
                                                <div class="product">
                                                    <span class="badges">
                                                        <span class="new">New</span>
                                                    </span>
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/9.png" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/9.png" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Smart
                                                                Assistants</a></span>
                                                        <h5 class="title"><a href="single-product.html">Amazon Echo Dot
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$79.50</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button title="Add To Cart" class="action add-to-cart"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                        <button class="action wishlist" title="Wishlist"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Wishlist"><i
                                                                class="pe-7s-like"></i></button>
                                                        <button class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i
                                                                class="pe-7s-look"></i></button>
                                                        <button class="action compare" title="Compare"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                        <div class="product">
                                                            <span class="badges">
                                                            <span class="new">New</span>
                                                            </span>
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/2.png" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/2.png" alt="Product" />
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone
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
                                                    </div> -->
                                            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                        <div class="product">
                                                            <span class="badges">
                                                            <span class="sale">-8%</span>
                                                            </span>
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/4.png" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/4.png" alt="Product" />
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                    </a>
                                                                </h5>
                                                                <span class="price">
                                                                <span class="old">$38.50</span>
                                                                <span class="new">$30.50</span>
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
                                                    </div> -->
                                            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                        <div class="product">
                                                            <span class="badges">
                                                            <span class="new">Sale</span>
                                                            </span>
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/3.png" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/3.png" alt="Product" />
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone
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
                                                    </div> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mb-n-30px" id="shop-list">
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/1.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/1.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Streaming
                                                                    Devices</a></span>
                                                            <h5 class="title"><a href="single-product.html">Apple TV 4K
                                                                    128GB</a></h5>
                                                            <p>Enjoy watching shows and movies in stunning 4K Dolby Vision
                                                                and HDR10+ with Apple TV (3rd Generation). Get theatre-like
                                                                Spatial Audio with Dolby Atmos that immerses you in sound.
                                                                Use it as a home hub to connect and control smart home
                                                                accessories. </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$199.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/2.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/2.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Security
                                                                    Cameras</a></span>
                                                            <h5 class="title"><a href="single-product.html">Blink Outdoor
                                                                    Wire </a></h5>
                                                            <p>Ease your mind at home with the Blink Outdoor security camera
                                                                system. Including 2 cameras, each weather-resistant
                                                                wire-free camera captures 1080p Full HD footage, has
                                                                infrared night vision, sends motion detection alerts, and
                                                                more. With Amazon Alexa, you can stream video and use voice
                                                                commands. The included AA lithium batteries can power the
                                                                cameras for up to 2 years.
                                                            </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/3.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/3.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart
                                                                    Entry</a></span>
                                                            <h5 class="title"><a href="single-product.html">Arlo Wired
                                                                    Wi-Fi Video Doorbell
                                                                </a></h5>
                                                            <p>Keep a track of your visitors, online deliveries, and more by
                                                                simply installing the Arlo wired Wi-Fi video doorbell. Ideal
                                                                for outdoors, this doorbell features HD camera with 1536 x
                                                                1536 resolution that displays your visitors in crystal-clear
                                                                clarity. It also sends a phone call directly to connected
                                                                smartphone whenever the bell is pressed, so you would never
                                                                get a chance to miss the visitor.</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$114.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/4.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/4.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart
                                                                    Lights</a></span>
                                                            <h5 class="title"><a href="single-product.html">Smart Night
                                                                    Light Bulb
                                                                </a></h5>
                                                            <p>Elevate your home lighting with DAYBETTER Smart Light Bulbs!
                                                                With easy WiFi setup, this set of 6 A19 E26 bulbs brings
                                                                vibrant 9W, 800-lumen lighting (60W equivalent). Customize
                                                                colors and brightness for any mood, without a hub. Movie
                                                                nights or parties, these bulbs set the perfect vibe. Upgrade
                                                                to DAYBETTER Smart Light Bulbs now! </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart Assistants
                                                                </a></span>
                                                            <h5 class="title"><a href="single-product.html">Smart speaker
                                                                    with Alexa
                                                                </a></h5>
                                                            <p>Open Box product. 3-month warranty. See more information
                                                                below.** Add simple yet powerful voice-assistance to any
                                                                room in an instant with the Amazon Echo Dot. It features a
                                                                redesigned look and richer, louder sound that’s great for
                                                                streaming audio and music. It’s also a big help around the
                                                                house. Ask it to play music, read the news, set alarms, dim
                                                                the lights, increase the temperature, or lock the front
                                                                door.
                                                            </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$68.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image ">
                                                                <img src="assets/images/product-image/7.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/7.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-10%</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart Switches

                                                                </a></span>
                                                            <h5 class="title"><a href="single-product.html">Wink Relay

                                                                </a></h5>
                                                            <p>Relay is a touchscreen control panel that brings the power
                                                                and convenience of Wink to your wall. Install it in place of
                                                                a standard light switch to create a command center in the
                                                                heart of your home for all your favorite smart products, and
                                                                now, third party experiences like Uber, Fitbit, and IFTTT.
                                                            </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="old">$38.50</span>
                                                                <span class="new">$30.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/8.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/8.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart Switches
                                                                </a></span>
                                                            <h5 class="title"><a href="single-product.html">Gosund Mini
                                                                    Smart Plug
                                                                </a></h5>
                                                            <p>Remote Control Smart Outlets, Voice Control (Apple HomeKit
                                                                Siri, Amazon Alexa, Google Assistant and SmartThings) Easy
                                                                Setup, Customize Scenes and Schedule Automations.
                                                            </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/9.png"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/9.png"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">Smart Assistants
                                                                </a></span>
                                                            <h5 class="title"><a href="single-product.html">Amazon Echo
                                                                    Dot
                                                                </a></h5>
                                                            <p>Enjoy listening to your favourite songs, audiobooks and
                                                                podcasts with rich and thumping bass offered by the Amazon
                                                                Echo Dot (5th Gen) smart speaker. Featuring clock and Amazon
                                                                Alexa, this speaker lets you to use your voice commands to
                                                                play music, get news and weather updates, set alarms, and
                                                                much more. Its LED display allows you to notice song titles,
                                                                alarms, and time at just a glance.
                                                            </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$79.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button title="Add To Cart" class="action add-to-cart"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                <button class="action wishlist" title="Wishlist"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                                <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-look"></i></button>
                                                                <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                        class="pe-7s-refresh-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <!-- <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                            <div class="product">
                                                                <div class="thumb">
                                                                    <a href="single-product.html" class="image">
                                                                        <img src="assets/images/product-image/2.png" alt="Product" />
                                                                        <img class="hover-image" src="assets/images/product-image/1.png" alt="Product" />
                                                                    </a>
                                                                    <span class="badges">
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                <!-- <div class="col-md-7 col-lg-7 col-xl-8">
                                                            <div class="content-desc-wrap">
                                                                <div class="content">
                                                                    <span class="category"><a href="#">Accessories</a></span>
                                                                    <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp</a></h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmodol tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veni quis nostrud
                                                                        exercitation ullamco laboris </p>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <span class="price">
                                                                    <span class="old">$58.50</span>
                                                                    <span class="new">$38.50</span>
                                                                    </span>
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
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <!-- <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                            <div class="product">
                                                                <div class="thumb">
                                                                    <a href="single-product.html" class="image">
                                                                        <img src="assets/images/product-image/3.png" alt="Product" />
                                                                        <img class="hover-image" src="assets/images/product-image/3.png" alt="Product" />
                                                                    </a>
                                                                    <span class="badges">
                                                                    <span class="new">New</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                <!-- <div class="col-md-7 col-lg-7 col-xl-8">
                                                            <div class="content-desc-wrap">
                                                                <div class="content">
                                                                    <span class="category"><a href="#">Accessories</a></span>
                                                                    <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmodol tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veni quis nostrud
                                                                        exercitation ullamco laboris </p>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <span class="price">
                                                                    <span class="new">$38.50</span>
                                                                    </span>
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
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <!-- <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                            <div class="product">
                                                                <div class="thumb">
                                                                    <a href="single-product.html" class="image">
                                                                        <img src="assets/images/product-image/4.png" alt="Product" />
                                                                        <img class="hover-image" src="assets/images/product-image/5.jpg" alt="Product" />
                                                                    </a>
                                                                    <span class="badges">
                                                                    <span class="new">Sale</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                <!-- <div class="col-md-7 col-lg-7 col-xl-8">
                                                            <div class="content-desc-wrap">
                                                                <div class="content">
                                                                    <span class="category"><a href="#">Accessories</a></span>
                                                                    <h5 class="title"><a href="single-product.html">Bluetooth Headphone </a></h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmodol tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veni quis nostrud
                                                                        exercitation ullamco laboris </p>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <span class="price">
                                                                    <span class="new">$38.50</span>
                                                                    </span>
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
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <!-- <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                            <div class="product">
                                                                <div class="thumb">
                                                                    <a href="single-product.html" class="image">
                                                                        <img src="assets/images/product-image/6.png" alt="Product" />
                                                                        <img class="hover-image" src="assets/images/product-image/7.png" alt="Product" />
                                                                    </a>
                                                                    <span class="badges">
                                                                    <span class="sale">-10%</span>
                                                                    <span class="new">New</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                <!-- <div class="col-md-7 col-lg-7 col-xl-8">
                                                            <div class="content-desc-wrap">
                                                                <div class="content">
                                                                    <span class="category"><a href="#">Accessories</a></span>
                                                                    <h5 class="title"><a href="single-product.html">Smart Music Box</a></h5>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmodol tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veni quis nostrud
                                                                        exercitation ullamco laboris </p>
                                                                </div>
                                                                <div class="box-inner">
                                                                    <span class="price">
                                                                    <span class="old">$48.50</span>
                                                                    <span class="new">$38.50</span>
                                                                    </span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <!--  Pagination Area Start -->
                        <br><br>
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <li><a href="#" class="selected m-0"> All
                                            <span>(65)</span> </a></li>
                                    <li><a href="#" class=""> Smart Assistants
                                            <span>(12)</span> </a></li>
                                    <li><a href="#" class=""> Security Cameras
                                            <span>(22)</span> </a></li>
                                    <li><a href="#" class=""> Smart Lights
                                            <span>(19)</span> </a></li>
                                    <li><a href="#" class=""> Smart Switches
                                            <span>(17)</span> </a></li>
                                    <li><a href="#" class=""> Smart Entry
                                            <span>(7)</span> </a></li>
                                    <li><a href="#" class=""> Streaming Devices
                                            <span>(9)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Brands</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    <li><a href="#" class="selected m-0"> Eufy<span>(5)</span> </a></li>
                                    <li><a href="#" class=""> Ooma <span>(4)</span></a></li>
                                    <li><a href="#" class=""> Amazon <span>(2)</span></a></li>
                                    <li><a href="#" class=""> Philips <span>(6)</span></a></li>
                                    <li><a href="#" class=""> Apple<span>(2)</span></a></li>
                                    <li><a href="#" class=""> Google<span>(2)</span></a></li>
                                    <li><a href="#" class=""> Blink<span>(6)</span></a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>

                        <!-- <div class="sidebar-widget">
                                    <h4 class="sidebar-title">Color</h4>
                                    <div class="sidebar-widget-color">
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#" class="color-1"></a></li>
                                            <li><a href="#" class="color-2"></a></li>
                                            <li><a href="#" class="color-3"></a></li>
                                            <li><a href="#" class="color-4"></a></li>
                                            <li><a href="#" class="color-5"></a></li>
                                            <li><a href="#" class="color-6"></a></li>
                                            <li><a href="#" class="color-7"></a></li>
                                            <li><a href="#" class="color-8"></a></li>
                                            <li><a href="#" class="color-9"></a></li>
                                            <li><a href="#" class="color-10"></a></li>
                                            <li><a href="#" class="color-11"></a></li>
                                            <li><a href="#" class="color-12"></a></li>
                                            <li><a href="#" class="color-13"></a></li>
                                            <li><a href="#" class="color-14"></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                        <!-- Sidebar single item -->
                        <!-- <div class="sidebar-widget">
                                    <h4 class="sidebar-title">Size</h4>
                                    <div class="sidebar-widget-size">
                                        <ul>
                                            <li><a href="#" class="selected m-0"> All
                                                    <span>(6)</span> </a></li>
                                            <li><a href="#" class=""> S <span>(12)</span> </a>
                                            </li>
                                            <li><a href="#" class=""> M <span>(21)</span> </a>
                                            </li>
                                            <li><a href="#" class=""> L <span>(16)</span> </a>
                                            </li>
                                            <li><a href="#" class=""> XL <span>(22)</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                        <!-- Sidebar single item -->

                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection
