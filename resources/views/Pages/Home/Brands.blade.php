<div class="brand-area pb-100px">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2 class="title">Brands</h2>
                <p>Explore a curated collection of top-quality brands that redefine style and innovation. </p>
            </div>
        </div>
        <div class="brand-slider swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/1.png') }}" alt="" />
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/2.png') }}" alt="" />
                    </a>
                </div>
                <div class ="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/3.png') }}" alt="" />
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/4.png') }}" alt="" />
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/5.png') }}" alt="" />
                    </a>
                </div>
                <div class="swiper-slide brand-slider-item text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('images/partner/6.png') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const brandSlider = new Swiper('.brand-slider', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 1500,
        });
    });
</script>
