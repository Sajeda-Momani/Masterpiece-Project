<!-- Product Area Start -->
<div class="product-area pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">New Products</h2>
                        <p>Discover our latest collection of products that have just arrived</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="row mb-n-30px">
                        @foreach ($products->take(8) as $product)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-50px mt-20px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="{{ url('singleproduct', $product->id) }}" class="image">
                                            <img src="{{ asset($product->image1) }}" alt="Product" />
                                            <img class="hover-image" src="{{ asset($product->image2) }}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category">{{ $product->category->name }}</span>
                                        <h5 class="title"><a
                                                href="{{ url('singleproduct', $product->id) }}">{{ $product->name }}</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">JOD {{ $product->price }}</span>
                                        </span>
                                    </div>
                                    <div class="actions">

                                        <form action="/cart/add/{{ $product->id }}" method="post">
                                            @csrf
                                            <input type="hidden" name="productId" value="{{ $product->id }}">
                                            <button class="action add-to-cart"><i class="pe-7s-shopbag"></i></button>
                                        </form>


                                        <form action="{{ url('singleproduct', $product->id) }}" method="get">
                                            <button class="action quickview"><i class="pe-7s-look"></i></button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->