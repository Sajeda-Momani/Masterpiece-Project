@extends('Layout.master')

@section('title', 'Shop')

@section('header_title', 'Shop')

@section('content')
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>({{ $products->count() }})</span> Product Found
                            <span>({{ $products->count() }})</span>
                        </p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'name_asc']) }}">Name, A to
                                            Z</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'name_desc']) }}">Name, Z to
                                            A</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'price_low_high']) }}">Price,
                                            low to high</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'price_high_low']) }}">Price,
                                            high to low</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'created_at_new']) }}">Sort By
                                            new</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.sort', ['sort_option' => 'created_at_old']) }}">Sort By
                                            old</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-40px mt-20px product-item"
                                                    data-category="{{ $product->category->name }}, {{ $product->brand }}">
                                                    <!-- Single Prodect -->
                                                    <div class="product" style="  height: 400px;">

                                                        <div class="thumb">
                                                            <a href="{{ url('singleproduct', $product->id) }}"
                                                                class="image">
                                                                <img src="{{ asset($product->image1) }}"
                                                                    alt="{{ $product->name }}" />
                                                                <img class="hover-image"
                                                                    src="{{ asset($product->image2) }}"
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
                                                                <span class="new">JOD {{ $product->price }}</span>
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
                                        @foreach ($products as $product)
                                            <div class="shop-list-wrapper mb-30px product-item"
                                                data-category="{{ $product->category->name }}, {{ $product->brand }}">

                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="{{ url('singleproduct', $product->id) }}" class="image">
                                                                    <img src="{{ asset($product->image1) }}"
                                                                        alt="{{ $product->name }}" />
                                                                    <img class="hover-image"
                                                                        src="{{ asset($product->image2) }}"
                                                                        alt="{{ $product->name }}" />
                                                                </a>
                                                                <span class="badges">

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
                                                                    <span class="new">JOD {{ $product->price }}</span>
                                                                </span>
                                                                <div class="actions">

                                                                    <form action="/cart/add/{{ $product->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="productId"
                                                                            value="{{ $product->id }}">
                                                                        <button class="action add-to-cart"><i
                                                                                class="pe-7s-shopbag "></i></button>
                                                                    </form>

                                                                    <br>
                                                                    <form
                                                                        action="{{ url('singleproduct', $product->id) }}"
                                                                        method="get">
                                                                        <button class="action quickview"
                                                                            style="
                                                                        margin-left: 20px;
                                                                    "><i
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
                                    {{-- Previous Page Link --}}
                                    @if ($products->onFirstPage())
                                        <li class="li disabled"><span><i class="fa fa-angle-left"></i></span></li>
                                    @else
                                        <li class="li"><a class="page-link"
                                                href="{{ $products->previousPageUrl() }}"><i
                                                    class="fa fa-angle-left"></i></a></li>
                                    @endif

                                    {{-- Pagination Links --}}
                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        <li class="li"><a
                                                class="page-link {{ $page == $products->currentPage() ? 'active' : '' }}"
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($products->hasMorePages())
                                        <li class="li"><a class="page-link" href="{{ $products->nextPageUrl() }}"><i
                                                    class="fa fa-angle-right"></i></a></li>
                                    @else
                                        <li class="li disabled"><span><i class="fa fa-angle-right"></i></span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <!-- Add this to your HTML file -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <li>
                                        <a href="#" class="selected m-0" onclick="filterProducts('All')"> All
                                            <span>({{ $products->count() }})</span> </a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="#" class=""
                                                onclick="filterProducts('{{ $category->name }}')">{{ $category->name }}
                                                <span>({{ $category->products->count() }})</span> </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Brands</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    @foreach ($products->groupBy('brand') as $brand => $productsByBrand)
                                        <li>
                                            <a href="#" class=""
                                                onclick="filterProducts('{{ $brand }}')">{{ $brand }}
                                                <span>({{ $productsByBrand->count() }})</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                    function filterProducts(category) {
                        // Hide all product items
                        $('.product-item').hide();

                        // Show product items that belong to the selected category
                        if (category === 'All') {
                            $('.product-item').show();
                        } else {
                            $(`.product-item[data-category*="${category}"]`).show();
                        }
                    }
                </script>

            </div>
        </div>
    </div>




    <!-- Shop Page End  -->
@endsection
