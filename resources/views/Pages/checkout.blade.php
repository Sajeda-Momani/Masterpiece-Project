@extends('Layout.master')

@section('content')
    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <form method="POST" action="{{ route('cart.checkout') }}">
                            @csrf
                            <!-- Add a CSRF token for security -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-select mb-4">
                                        <label for="city">City</label>
                                        <select name="city" id="city">
                                            <option>Select a city</option>
                                            <option>Amman</option>
                                            <option>Irbid</option>
                                            <option>Ajloun</option>
                                            <option>Madaba</option>
                                            <option>Aqaba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label for="street">Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name"
                                            type="text" name="street" />
                                        <label for="department_number">Apartment Number</label>
                                        <input placeholder="Apartment, suite, unit etc." type="text"
                                            name="department_number" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <h4>Additional information</h4>
                                <div class="additional-info">
                                    <label for="additional_information">Order notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery." name="additional_information"
                                        id="additional_information"></textarea>
                                </div>
                            </div>
                            <!-- Submit button to send the form data -->
                            <div class="Place-order mt-25">
                                <button class="cust" type="submit">Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="col-lg-5 mt-md-30px mt-lm-30px">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul> --}}
                                        {{-- @foreach ($orderItems as $orderItem)
                                            <li>
                                                <span class="order-middle-left">{{ $orderItem->product->name }} X {{ $orderItem->quantity }}</span>
                                                <span class="order-price">${{ $orderItem->unit_price * $orderItem->quantity }}</span>
                                            </li>
                                        @endforeach --}}
                                    {{-- </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        {{-- <li>${{ $order->total_price }}</li> --}}
                                    {{-- </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-3">Cash on delivery</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}} 
                        {{-- </div>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    <!-- checkout area end -->
@endsection
