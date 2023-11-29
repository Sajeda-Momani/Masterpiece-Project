<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                data-bg-image="{{ asset('images/hero/bg/hero-bg-2-1.webp') }}">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Easy Your Life
                                    with <br>Smart Cameras</h2>
                                <span class="price">
                                    <span class="mini-title"> from</span>
                                    <span class="amount">
                                        @if ($lowestPrices->where('category_id', 6)->isNotEmpty())
                                            JOD {{ $lowestPrices->where('category_id', 6)->first()->lowest_price }}
                                        @endif
                                    </span>
                                </span>
                                <a href="{{ url('shop') }}" class="btn btn-primary text-capitalize">Shop
                                    All Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                            <div class="show-case">
                                <div class="hero-slide-image slider-2">
                                    <img src="{{ asset('images/hero/inner-img/image (2).png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->

            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                data-bg-image="{{ asset('images/hero/bg/hero-bg-2-1.webp') }}">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h3 class="title-1">Easy Your Life
                                    with <br> Smart Assistants </h3>
                                <span class="price">
                                    <span class="mini-title"> from</span>
                                    <span class="amount">
                                        @if ($lowestPrices->where('category_id', 1)->isNotEmpty())
                                        JOD {{ $lowestPrices->where('category_id', 1)->first()->lowest_price }}
                                        @endif
                                    </span>
                                </span>
                                <a href="{{ url('shop') }}" class="btn btn-primary text-capitalize">Shop
                                    All Devices</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                            <div class="show-case">
                                <div class="hero-slide-image slider-2">
                                    <img src="{{ asset('images/hero/inner-img/image (1).png') }}" alt="" />
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

