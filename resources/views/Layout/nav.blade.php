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
                                <div>
                                    <a
                                        href="{{ url('/cart') }}"class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                        <i class="pe-7s-shopbag"></i>
                                        <span class="header-action-num">{{ \App\Models\Cart::count() }}</span>
                                    </a>
                                </div>
                                @if (Auth::check())
                                    <li><a href="{{ url('/profile') }}" style="color: white;"><i
                                                class="fa fa-user fa-lg" style="color: white;"></i>
                                        </a></li>
                                    <li><a href="{{ route('logout') }}" style="color: white;"><i
                                                class="fas fa-sign-out-alt fa-lg" style="color: white;"></i>
                                            Logout</a></li>
                                @else
                                    <li><a href="{{ route('login') }}" style="color: white;"><i
                                                class="fas fa-sign-in-alt fa-lg" style="color: white;"></i>
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
                                <form action="{{ url('search') }}" method="GET" role="search">
                                    <input type="text" placeholder="Search" name='search' value="" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <div>
                                    <a
                                        href="{{ url('/cart') }}"class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                        <i class="pe-7s-shopbag"></i>
                                        <span class="header-action-num">{{ \App\Models\Cart::count() }}</span>
                                    </a>
                                </div>

                                <div class="">
                                    <a href="{{ url('/profile') }}" class="-toggle" id="" data-toggle=""
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user fa-lg"></i>
                                    </a>

                                </div>
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

                                <li class=" position-static"><a href="{{ route('shop') }}">Shop
                                        </i></a>
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
                        <form action="{{ url('search') }}" method="GET" role="search">
                            <input type="text" placeholder="Search" name='search' value="" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <br>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>

        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="{{ url('home') }}"><span class="menu-text">Home</span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="menu-text">Shop</span></a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
            </div>
        </div>
        <!-- OffCanvas Menu End -->
