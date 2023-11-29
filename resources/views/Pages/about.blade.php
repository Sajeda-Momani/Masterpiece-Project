@extends('Layout.master')


{{-- @section('title', '404') --}}
@section('content')
    <!-- About section Start -->
    <div class="about-area pt-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrapper text-center">
                        <div class="about-contant">

                            <h2 class="breadcrumb-title">About Us</h2>
                            <br>
                            <p>Smartify is a pioneering company dedicated to transforming homes into intelligent living
                                spaces through a range of cutting-edge smart products. Our mission is to simplify and
                                enhance the way people interact with their homes, making everyday living more convenient,
                                energy-efficient, and secure. With a passion for innovation and a commitment to excellence,
                                Smartify is leading the way in the smart home revolution.</p>
                        </div>

                        <div class="promo-video">
                            <img src="{{ asset('images/about/Smart-home-devices.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section End -->
    <!-- Team Area Start -->
    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title line-height-1">Founder</h2>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n-30px">
                <div class="col-xl-12 col-lg-4 col-md-6 col-sm-6 mb-lm-30px mb-lg-30px mb-md-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper text-center">
                        <div class="team-image overflow-hidden mx-auto">
                            <!-- Added mx-auto class for horizontal centering -->
                            <img src="{{ asset('images\profile\image.png') }}" alt=""
                                style="height: 200px; width: 200px;">
                            <ul class="team-social d-flex">
                                <li>
                                    <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer"
                                        href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a title="linkedin" target="_blank" rel="noopener noreferrer"
                                        href="https://www.linkedin.com/in/sajeda-momani/"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Email" target="_blank" rel="noopener noreferrer"
                                        href="mailto:sajeda.momani20@gmail.com">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a title="github" target="_blank" rel="noopener noreferrer"
                                        href="https://github.com/Sajeda-Momani"><i class="fa fa-github"
                                            aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-inner">
                            <div class="team-content">
                                <h6 class="title">Sajeda Momani</h6>
                                <span class="sub-title">Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Team -->
                </div>
            </div>


        </div>
    </div>
    </div>
    <!-- Team Area End -->
    <!-- Feature Area Srart -->
    <br>
    <br>
    <!-- Feature Area End -->
    <!-- Testimonial area start -->
    <div class="trstimonial-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Client Feedback</h2>
                        <p>Impressive value! Clear video, loud siren, night vision. Easy phone playback, police/fire
                            connection. With backup batteries. Strongly recommend from Smartify.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper-container content-top slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Impressive value! Clear video, loud siren, night vision. Easy phone playback,
                                            police/fire connection. With backup batteries. Smartify devices, are highly
                                            recommended for their
                                            outstanding performance and
                                            reliability.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images\profile\Sajeda.png') }}"
                                                alt="" height="50px" width="50px">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name"> Nina Dobrev<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Exceptional value! The video quality is superb, the siren is attention-grabbing,
                                            and night vision works seamlessly. Smartify devices, come highly recommended for
                                            their overall performance and
                                            reliability.</p>

                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images\profile\Sajeda.png') }}"
                                                alt="" height="50px" width="50px">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Caroline Forbes<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Outstanding value! The video clarity is remarkable, the siren is impressively
                                            loud, and night vision ensures visibility even in low light.
                                            Smartify devices, are a strong recommendation for their
                                            reliability and performance.</p>

                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images\profile\Sajeda.png') }}"
                                                alt="" height="50px" width="50px">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Bonnie Bennett<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Remarkable value! The video is crystal clear, the siren is impressively loud, and
                                            night vision is exceptional. Smartify devices, are highly recommended for their
                                            outstanding performance and
                                            reliability.</p>

                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images\profile\Sajeda.png') }}"
                                                alt="" height="50px" width="50px">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Tyler Lockwood<span>Client</span></h4>
                                        </div>
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
        </div>
    </div>
    <div class="feature-area pt-100px pb-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/1.png') }}" alt="">
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
                            <img src="{{ asset('images/icons/2.png') }}" alt="">
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
                            <img src="{{ asset('images/icons/3.png') }}" alt="">
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
    <br>
    
@endsection
