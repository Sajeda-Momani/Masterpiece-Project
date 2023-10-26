@extends('Layout.master')

@section('content')
    <div class="thank-you-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="inner_complated">
                        <div class="img_cmpted"><img src="{{ asset('images/icons/cmpted_logo.png') }}" alt=""></div>
                        <p class="dsc_cmpted">Thank you for ordering in our store. You will receive a confirmation email shortly.</p>
                        <div class="btn_cmpted">
                            <a href="{{ route('shop') }}" class="shop-btn" title="Go To Shop">Continue Shopping</a>
                        </div>
                    </div>
                    <!-- You can add additional content here if needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
