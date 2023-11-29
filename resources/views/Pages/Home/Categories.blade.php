<div class="banner-area style-two pt-100px pb-100px">
    <div class="container">
        <div class="row">

            @foreach ($categories as $category)
                @php
                    $categoryIds = $category->id;
                @endphp
                <div class="col-md-6 mb-3">
                    <div class="single-banner nth-child-2 fixalign ">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">{{ $category->name }}</h3>
                            <span class="category">From @if ($lowestPrices->where('category_id', $categoryIds)->isNotEmpty())
                                JOD {{ $lowestPrices->where('category_id', $categoryIds)->first()->lowest_price }}
                                @endif
                            </span>
                            <a href="{{ route('shop', ['category_id' => $categoryIds]) }}" class="shop-link">Shop Now
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>
                        @if ($category->image)
                            <img src="{{ asset($category->image) }}" alt=""
                                style="height: 250px; width: 200px;padding: 15px;">
                        @else
                            No Image Available
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
