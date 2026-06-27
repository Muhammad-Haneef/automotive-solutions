    @php
    $cartItems = app(\App\Services\CartService::class)->getItems();
    $subtotal = $cartItems->sum(fn($item) => $item->effective_price * $item->quantity);
    $shipping = 0.00;
    $taxes = 0.00;
    $total = $subtotal + $shipping + $taxes;
    @endphp

    <ul class="nav cart-dropdown cart-box-width p-0 position-absolute bg-white" id="cart-dropdown">
        @if($cartItems->count())
        <li class="p-3">
            <div id="cart-items">
                @foreach ($cartItems as $item)
                <div class="single-cart-box mb-2 pb-2 border-bottom border-gray position-relative d-flex overflow-hidden"
                    id="cart-item-{{ $item->id }}">
                    <div class="cart-img_ pe-2 position-relative">
                        <a href="{{ route('front-product', [$item->product->slug]) }}">
                            <img width="35" height="35" src="{{ Storage::url($item->product->thumbnail ?? '/img/placeholder_35x35.png') }}"
                                alt="cart-image" class="img-fluid">
                        </a>

                    </div>

                    <div class="cart-content">
                        <div class="text-capitalize  text-sm">
                            <a href="{{ route('front-product', [$item->product->slug]) }}" class="d-block text-sm text-black">
                                {{ $item->product->title ?? 'Product' }}
                            </a>
                        </div>
                        <span class="cart-price d-block text-primary fw-bold d-flex justify-content-between gap-1">
                            <div class="d-flex align-items-center gap-1">
                                {{ $item->quantity }} x
                                {{ number_format($item->effective_price, 0) }}
                            </div>
                            <div class="d-flex align-items-center gap-1 text-righr">
                                {{ number_format($item->effective_price * $item->quantity, 2) }}
                            </div>
                        </span>
                        @if(!empty($item->options['size']))
                        <span class="d-block">Size: {{ $item->options['size'] }}</span>
                        @endif
                        @if(!empty($item->options['color']))
                        <span class="d-block">Color: {{ $item->options['color'] }}</span>
                        @endif
                    </div>
                    <?php /*
                    {{-- Remove button --}}
                    <a class="del-icone position-absolute btn-cart-remove"
                        href="javascript:void(0)"
                        data-id="{{ $item->id }}"
                        data-url="{{ route('front-cart-remove', $item->id) }}">
                        <i class="ion-close text-secondary"></i>
                    </a>
                    */ ?>
                </div>
                @endforeach
            </div>

            {{-- Totals --}}
            <div class="cart-footer mt-3" id="cart-totals">
                <ul class="price-content pl-0">
                    <li class="d-flex justify-content-between py-1">
                        Subtotal <span id="cart-subtotal">{{ number_format($subtotal, 2) }}</span>
                    </li>
                    <li class="d-flex justify-content-between py-1">
                        Shipping <span>{{ number_format($shipping, 2) }}</span>
                    </li>
                    <li class="d-flex justify-content-between py-1">
                        Taxes <span>{{ number_format($taxes, 2) }}</span>
                    </li>
                    <li class="d-flex justify-content-between py-1 fw-bold border-top pt-2">
                        Total <span id="cart-total">{{ number_format($total, 2) }}</span>
                    </li>
                </ul>
                <div class="cart-actions text-center mt-1">
                    <a href="{{ route('front-cart') }}" class="btn bg-secondary text-white btn-block btn-sm">
                        View Cart
                    </a>
                    <a href="{{ route('front-checkout') }}" class="btn bg-success text-white btn-block btn-sm">
                        Checkout
                    </a>
                </div>
            </div>
        </li>
        @else
        <li class="p-3 text-center" id="cart-empty">
            Sorry! Your cart is empty.<br>
            <a href="/" class="text-primary">Start shopping</a>
        </li>
        @endif
    </ul>