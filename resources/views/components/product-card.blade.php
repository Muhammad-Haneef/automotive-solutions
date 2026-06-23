@props(['product'])
<div class="product-card-item col-6 col-md-4 col-lg-4 mb-2">
    
    <div class="card product-itembox bg-white my-2 product-id-{{$product->id}}">
        <a href="{{route('front-product', $product->slug)}}" class="position-relative">
            <img class="primary-img card-img-top" src="{{Storage::url($product->thumbnail)}}" alt="single-product">
        </a>
        <div class="card-body product-content p-3 position-relative bg-white">
            <div class="pro-info">
                <p class="card-title mb-1"><a href="{{route('front-product', $product->slug)}}" class=" text-secondary">{{$product->title}}</a></p>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="card-text mb-0">
                            <span class="discount-price text-secondary fw-bold h6">${{ number_format($product->sale_price, 2) }}</span>
                            <span class=" price h6 text-muted d-block text-decoration-line-through">${{ number_format($product->price, 2) }}</span>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        @php
                        $price = $product->price;
                        $sale = $product->sale_price;

                        $discount = ($price > 0 && $sale < $price)
                            ? round((($price - $sale) / $price) * 100)
                            : 0;
                            @endphp
                            <div class="product-discount fw-bold  text-primary text-end">{{ $discount }}<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
            <div class="product-details  position-absolute px-2 w-100">
                <div class="actions-primary">
                    <!-- <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a> -->
                    <button class="btn-add-cart btn w-100 btn-sm bg-secondary text-white mb-2"
                        data-id="{{ $product->id }}"
                        data-variation_id="1"
                        data-url="{{ route('front-cart-store') }}">
                        <i class="fa fa-shopping-cart "></i> Add to Cart
                    </button>
                </div>
                <div class="product-cart d-flex justify-content-between">

                    <a href="javascript:void(0)"
                        class="btn-compare d-flex align-items-center text-secondary"
                        data-id="{{ $product->id }}"
                        data-url="{{ route('front-compare-toggle') }}">
                        <i class="fa fa-refresh fa-lg me-1 {{ in_array($product->id, session('product_filters.compare')) ? 'text-success' : 'text-secondary' }}"></i>
                        <span class="d-inline-block pl-1">
                            {{ in_array($product->id, session('product_filters.compare')) ? 'Added to Compare' : 'Add To Compare' }}
                        </span>
                    </a>
                    <a href="javascript:void(0)"
                        class="btn-wishlist d-flex align-items-center text-secondary"
                        data-id="{{ $product->id }}"
                        data-url="{{ route('front-wishlist-toggle') }}">
                        <i class="fa-heart fa-lg me-1 {{ in_array($product->id, session('product_filters.wishlist')) ? 'text-success fa-solid' : 'fa-regular' }}"></i>
                        <span class="d-inline-block  pl-1">
                            {{ in_array($product->id, session('product_filters.wishlist')) ? 'Wishlisted' : 'Add to WishList' }}
                        </span>
                    </a>

                </div>
            </div>
         </div>
    </div>
    <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
</div>
