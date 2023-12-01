<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="smrtify Product eCommerce">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/tab logo.png') }}" />
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font.awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}">
        <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        
</head>


<body>
    <div class="main-wrapper">
        <header>
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{ url('home') }}">
                                    <img src="{{ asset('images/logo/logo.png') }}" alt="Site Logo"
                                        class="logosizenav" />
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="{{ url('search') }}" method="GET" role="search">
                                    <input type="text" placeholder="Search" name='search' value="" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                           
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">{{ \App\Models\Cart::count() }}</span>
                                </a>
                                
                                <!-- User Profile Dropdown -->
                                <div class="dropdown">
                                    {{-- <a href="#" class="dropdown-toggle" id="userDropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user fa-lg"></i>
                                </a> --}}
                                    {{-- <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('account') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('login') }}">Register</a>
                                    <a class="dropdown-item" href="{{ route('login') }}">Logout</a> --}}
                                    {{-- </div> --}}
                                </div>
                                <!-- End User Profile Dropdown -->

                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>


                                @if (Auth::check())
                                    <li><a href="{{ url('/profile') }}" style="color: white;"><i class="fa fa-user fa-lg" style="color: white;"></i> 
                                            </a></li>
                                    <li><a href="{{ route('logout') }}" style="color: white;" ><i class="fas fa-sign-out-alt fa-lg" style="color: white;"></i>
                                            Logout</a></li>
                                @else
                                    <li><a href="{{ route('login') }}" style="color: white;" ><i class="fas fa-sign-in-alt fa-lg" style="color: white;"></i>
                                            Login</a></li>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->

            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{ url('home') }}"><img src="{{ asset('images/logo/logo.png') }}"
                                        alt="Site
                                        Logo"
                                        class="logosizenavsm" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">03</span>
                                </a>
                                <!-- User Profile Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="userDropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user fa-lg"></i>
                                    </a>
                                    {{-- <div class="dropdown-menu" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('account') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                        <a class="dropdown-item" href="{{ route('login') }}">Register</a>
                                        <a class="dropdown-item" href="{{ route('login') }}">Logout</a>
                                    </div> --}}
                                </div>
                                <!-- End User Profile Dropdown -->
                                <!-- Mobile Menu Button -->
                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                                <!-- End Mobile Menu Button -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header action area end -->


            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li><a href="{{ url('home') }}">Home <i class="fa fa-angle"></i></a>
                                    <!-- <li class="dropdown position-static"><a href="about.html">Pages <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block"> -->
                                    <!-- <li class="title"><a href="#">Inner Pages</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon Page</a></li> -->
                                    <!-- </ul>
                                            <ul class="d-block"> -->
                                    <!-- <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li> -->
                                    <!-- </ul>
                                            <ul class="d-block"> -->
                                    <!-- <li class="title"><a href="#">Related Shop Pages</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                                <li><a href="thank-you-page.html">Thank You Page</a></li> -->
                                    <!-- </ul>
                                            <ul
                                                class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html">
                                                        <img class="img-responsive w-100" src="assets/images/banner/menu-banner.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="dropdown position-static"><a href="{{ route('shop') }}">Shop
                                        </i></a>
                                    <!-- <i
                                            class="fa fa-angle-down"> -->
                                    <!-- <ul class="mega-menu d-block"> -->
                                    <!-- <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                </li>
                                            </ul> -->
                                    <!-- <ul class="d-block"> -->
                                    <!-- <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="single-product-group.html">Product Group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li> -->
                                    <!-- </ul> -->
                                    <!-- <ul class="d-block"> -->
                                    <!-- <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                <li><a href="single-product-gallery-right.html">Product Gallery
                                                        Right</a> </li>
                                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                                </li>
                                                <li><a href="cart.html">Cart Page</a></li> -->
                                    <!-- </ul> -->
                                    <!-- <ul class="d-block p-0 border-0"> -->
                                    <!-- <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li> -->
                                    <!-- </ul> -->
                                    <!-- </li> -->
                                    <!-- </ul> -->
                                    <!-- </li> -->
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Wishlist Start -->
        <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
            <div class="inner">
                <div class="head">
                    <span class="title">Wishlist</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">

                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/1.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Apple TV 4K 128GB</a>
                                <span class="quantity-price">1 x <span class="amount">$100.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/2.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Blink Outdoor Wire</a>
                                <span class="quantity-price">1 x <span class="amount">$19.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/3.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Arlo Wired Wi-Fi Video
                                    Doorbell</a>
                                <span class="quantity-price">1 x <span class="amount">$114.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="{{ route('wishlist') }}" class="btn btn-dark btn-hover-primary mt-30px">view
                            wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Wishlist End -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">

                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/1.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Apple TV 4K 128GB</a>
                                <span class="quantity-price">1 x <span class="amount">$100.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/2.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Blink Outdoor Wire</a>
                                <span class="quantity-price">1 x <span class="amount">$19.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/singleproduct/{id}') }}" class="image"><img
                                    src="{{ asset('imagesproduct-image/3.png') }}" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ url('/singleproduct/{id}') }}" class="title">Arlo Wired Wi-Fi Video
                                    Doorbell</a>
                                <span class="quantity-price">1 x <span class="amount">$114.50</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="{{ url('singleproduct') }}" class="btn btn-dark btn-hover-primary mb-30px">view
                            cart</a>
                        <a href="{{ route('checkout') }}" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="{{ url('home') }}"><span class="menu-text">Home</span></a></li>
                        {{-- <li><a href="{{ route('about') }}">About</a></li> --}}
                        <li>
                            <!-- <a href="#"><span class="menu-text">Pages</span></a> -->
                            <ul class="sub-menu">
                                <!-- <li> -->
                                <!-- <a href="#"><span class="menu-text">Inner Pages</span></a> -->
                                <!-- <ul class="sub-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                    </ul> -->
                                <!-- </li> -->
                                <li>
                                    <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li> -->
                                <!-- <a href="#"><span class="menu-text">Related Shop Page</span></a> -->
                                <!-- <ul class="sub-menu">
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                        <li><a href="thank-you-page.html">Thank You Page</a></li>
                                    </ul> -->
                                <!-- </li> -->
                            </ul>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <!-- <a href="#"><span class="menu-text">Shop Page</span></a> -->
                                    <!-- <ul class="sub-menu">
                                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                        <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <!-- <a href="#"><span class="menu-text">product Details Page</span></a> -->
                                    <!-- <ul class="sub-menu">
                                        <li><a href="single-product-variable.html">Product Single</a></li>
                                        <li><a href="single-product-variable.html">Product Variable</a></li>
                                        <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                        <li><a href="single-product-group.html">Product Group</a></li>
                                        <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                        <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                        <li><a href="single-product-slider.html">Product Slider</a></li>
                                        <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </ul> -->
                                </li>
                                <li>
                                    <!-- <a href="#"><span class="menu-text">Single Product Page</span></a> -->
                                    <!-- <ul class="sub-menu">
                                        <li><a href="single-product-gallery-right.html">Product Gallery
                                                Right</a> </li>
                                        <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                        </li>
                                        <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                        </li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>

                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
