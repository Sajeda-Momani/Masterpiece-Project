 <!-- Feature product area start -->
 <div class="feature-product-area pb-100px">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title text-center">
                     <h2 class="title">Smartify Packages</h2>
                     <p>Discover our Packages of advanced electronic devices, that are needed to create a smarter home.
                     </p>
                 </div>
             </div>
         </div>
         <div class="feature-product-slider swiper-container slider-nav-style-1">
             <div class="swiper-wrapper">
                 @foreach ($products as $product)
                     @if ($product->category_id == 6)
                         <div class="swiper-slide feature-right-content">
                             <div class="image-side">
                                 <img src="{{ asset($product->image1) }}" alt="Product" height="300px" />
                                 <form action="/cart/add/{{ $product->id }}" method="post">
                                     @csrf
                                     <input type="hidden" name="productId" value="{{ $product->id }}">
                                     <button class="action add-to-cart"><i class="pe-7s-shopbag"></i></button>
                                 </form>
                             </div>
                             <div class="content-side">
                                 <div class="prize-content">
                                     <h5 class="title"><a
                                             href="{{ url('singleproduct', $product->id) }}">{{ $product->name }}</a>
                                     </h5>
                                     <span class="price">
                                         <!-- Display the product price -->
                                         <span class="new">JOD {{ $product->price }}</span>
                                     </span>
                                 </div>
                                 <div class="product-feature">
                                     @php
                                         // Split the product description using a delimiter (e.g., '|')
                                         $descriptionParts = explode(',', $product->description);
                                     @endphp
                                     <ul>
                                         <li>{{ $descriptionParts[0] ?? '' }}</li>
                                         <li>{{ $descriptionParts[1] ?? '' }}</li>
                                         <li>{{ $descriptionParts[2] ?? '' }}</li>
                                         <li>{{ $descriptionParts[3] ?? '' }}</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     @endif
                 @endforeach
             </div>
             <!-- Add Arrows -->
             <div class="swiper-buttons">
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
         </div>
     </div>
 </div>
 <!-- Feature product area End -->
