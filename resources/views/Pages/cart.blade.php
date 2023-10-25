@extends('Layout.master')

@section('content')
    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $key => $cartItem)
                                        <tr>
                                            <td>
                                                <img class="img-responsive ml-15px" src="{{ $cartItem['product']['image1'] }}"
                                                    alt="" style="width: 100px; height: 100px; margin-left: 40px;" />
                                            </td>
                                            <td>{{ $cartItem['product']['name'] }}</td>
                                            <td>${{ $cartItem['product']['price'] }}</td>
                                            
                                            <td>
                                                <div class="border">
                                                    <button type="button" style="display: inline-block;">
                                                        <a href="{{ route('decreaseQuantity', $cartItem->id) }}">-</a>
                                                    </button>
                                                    <p style="display: inline-block; margin: 0 30px;">{{ $cartItem['quantity'] }}</p>
                                                    <button type="button" style="display: inline-block;">
                                                        <a href="{{ route('increaseQuantity', $cartItem->id) }}">+</a>
                                                    </button>
                                                </div>
                                                
                                                
                                              </td>

                                            <td>
                                                {{ $cartItem['product']['price'] * $cartItem['quantity'] }}
                                            </td>
                                            <td>
                                                <form action="{{ route('cart.remove', ['itemId' => $cartItem['id']]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-button"><i
                                                            class="fa fa-times" style="color: #dc3545" ></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="/shop">Continue Shopping</a>
                                    </div>
                                    <div class="">
                                        <form action="{{ route('cart.removeAllItems') }}" method="post">
                                            @csrf
                                            <button style="background-color: #dc3545; border-radius: 0px; color: white; display: inline-block; font-size: 14px; font-weight: 600; line-height: 1; padding: 18px 63px 17px; text-transform: uppercase;">
                                                Clear Cart
                                            </button>
                                             </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form>
                                        <input type="text" required="" name="name" />
                                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lm-30px">

                        </div>
                        <br>
                        <?php
                        
                        $totalPrice = array_sum(array_column($carts->toArray(), 'total'));
                        
                        ?>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span>${{ $totalPrice }}</span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                    </ul>

                                </div>

                                <h4>Grand Total:   
                                    <span style="color: green; margin-left: 15%">${{ $totalPrice }}</span>
                                </h4>
                                <br>
                                <a  style="background-color: green; border-radius: 0px; color: white; display: inline-block; font-size: 14px; font-weight: 600; line-height: 1; padding: 18px 63px 17px; text-transform: uppercase;"href="{{ route('checkout') }}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Area End -->
@endsection
