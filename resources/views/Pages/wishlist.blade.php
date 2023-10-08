@extends('Layout.master')


{{-- @section('title', '404') --}}
@section('content')
    <!-- Wishlist Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your Wishlist items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px"
                                                    src="assets/images/product-image/3.png" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Arlo Wired Wi-Fi Video Doorbell</a></td>
                                        <td class="product-price-cart"><span class="amount">$114.50</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$114.50</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px"
                                                    src="assets/images/product-image/5.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Smart speaker with Alexa</a></td>
                                        <td class="product-price-cart"><span class="amount">$80.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$80.00</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px"
                                                    src="assets/images/product-image/6.png" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Smart Table Camera
                                            </a></td>
                                        <td class="product-price-cart"><span class="amount">$279.99</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$279.99</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Wishlist Area End -->
@endsection
