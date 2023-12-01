@extends('Layout.master')

@section('content')
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach ($searchProducts as $product)
                                                @php
                                                    $isProductNew = now()
                                                        ->subDays(1) // Subtracts 1 day from the current date and time
                                                        ->lte($product->created_at); // Compares if the product's creation date is less than or equal to the result of the subtraction
                                                @endphp

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px ">
                                                    <!-- Single Prodect -->
                                                    <div class="product" style="  height: 400px;">
                                                        @if ($isProductNew)
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        @endif
                                                        <div class="thumb">
                                                            <a href="{{ url('singleproduct', $product->id) }}"
                                                                class="image">
                                                                <img src="{{ asset($product->image1) }}"
                                                                    alt="{{ $product->name }}" />
                                                                <img class="hover-image" src="{{ asset($product->image2) }}"
                                                                    alt="{{ $product->name }}" />
                                                            </a>
                                                        </div>
                                                        <div class="content mt-30px">
                                                            <span class="category"><a
                                                                    href="{{ url('category.show', $product->category->id) }}">{{ $product->category->name }}</a></span>
                                                            <h5 class="title"><a
                                                                    href="{{ url('product.show', $product->id) }}">{{ $product->name }}</a>
                                                            </h5>

                                                            <span class="price">
                                                                <span class="new">${{ $product->price }}</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">

                                                            <form action="/cart/add/{{ $product->id }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="productId"
                                                                    value="{{ $product->id }}">
                                                                <button class="action add-to-cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                            </form>


                                                            <form action="{{ url('singleproduct', $product->id) }}"
                                                                method="get">
                                                                <button class="action quickview"><i
                                                                        class="pe-7s-look"></i></button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mb-n-30px" id="shop-list">
                                        @foreach ($searchProducts as $product)
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="{{ asset($product->image1) }}"
                                                                        alt="{{ $product->name }}" />
                                                                    <img class="hover-image"
                                                                        src="{{ asset($product->image2) }}"
                                                                        alt="{{ $product->name }}" />
                                                                </a>
                                                                <span class="badges">
                                                                    @if ($isProductNew)
                                                                        <span class="badges">
                                                                            <span class="new">New</span>
                                                                        </span>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category">
                                                                    <a
                                                                        href="{{ url('category.show', $product->category->id) }}">{{ $product->category->name }}</a>
                                                                </span>
                                                                <h5 class="title">
                                                                    <a
                                                                        href="{{ url('product.show', $product->id) }}">{{ $product->name }}</a>
                                                                </h5>
                                                                <p>{{ $product->description }}</p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                    <span class="new">${{ $product->price }}</span>
                                                                </span>
                                                                <div class="actions">

                                                                    <form action="/cart/add/{{ $product->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="productId"
                                                                            value="{{ $product->id }}">
                                                                        <button class="action add-to-cart"><i
                                                                                class="pe-7s-shopbag"></i></button>
                                                                    </form>


                                                                    <form
                                                                        action="{{ url('singleproduct', $product->id) }}"
                                                                        method="get">
                                                                        <button class="action quickview"><i
                                                                                class="pe-7s-look"></i></button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
               
            </div>
        </div>
    </div>




    <!-- Shop Page End  -->
@endsection
