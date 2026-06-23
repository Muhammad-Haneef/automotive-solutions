
 <header>
     <div class="header-middle py-3">
         <div class="container">
             <div class="row align-items-center no-gutters">
                 <div class="col-lg-3 col-md-12">
                     <div class="logo ">
                         <a href="home">
                             <img src="{{asset('front/img/venta-logo.png')}}" class="img-fluid" alt="venta.pk"></a>
                     </div>
                 </div>
                 <!-- Categorie Search Box Start Here -->
                 <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                     <div class="categorie-search-box">
                         <form action="#" class="position-relative w-100 ">
                             <div class="form-group position-absolute d-flex align-items-center m-0">
                                 <select class="bootstrap-select border-0 m-0" name="poscats">
                                     <option value="0">All categories</option>
                                     @foreach ($categories as $category)
                                     <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <input type="text" name="search" class="form-control py-0" placeholder="I’m shopping for..." required />
                             <button class="btn position-absolute p-0 m-0 text-white">
                                 <i class="lnr lnr-magnifier"></i>
                             </button>
                         </form>
                     </div>
                 </div>
                 <!-- Categorie Search Box End Here -->
                 <!-- Cart Box Start Here -->
                 <div class="col-lg-4 col-md-12">
                     <div class="cart-box ">
                         <ul class="nav d-flex justify-content-lg-end justify-content-center align-items-center text-capitalize small">
                             <li>
                                 <a href="#" class="text-secondary">
                                     <i class="lnr lnr-cart"></i>
                                     <span class="my-cart text-secondary ">
                                         <span class="total-pro d-block text-white text-center  bg-primary d-block">{{count($cart)}}</span>
                                         <span class="d-block">cart</span>
                                     </span>
                                 </a>
                                 <ul class="nav cart-dropdown cart-box-width p-0 position-absolute bg-white">

                                     @if(count($cart))
                                     <li class="p-3">
                                         <!-- Cart Items -->
                                         @foreach ($cart as $id => $item)
                                         <div class="single-cart-box mb-2 pb-2 border-bottom border-gray position-relative">
                                             <div class="cart-img pr-2 position-relative float-left">
                                                 <a href="#"><img src="{{ asset($item['image'] ?? 'front/img/products/placeholder.jpg') }}" alt="cart-image" class="img-fluid"></a>
                                                 <span class="quantity pro-quantity rounded-circle position-absolute text-center text-white bg-primary">{{ $item['quantity'] }}X</span>
                                             </div>
                                             <div class="cart-content float-left">
                                                 <h6 class="text-capitalize">
                                                     <a href="#" class="d-block text-secondary">{{ $item['name'] ?? 'Product' }}</a>
                                                 </h6>
                                                 <span class="cart-price d-block float-none text-primary">${{ number_format($item['price'], 2) }}</span>
                                                 @if(!empty($item['size']))
                                                 <span class="d-block">Size: {{ $item['size'] }}</span>
                                                 @endif
                                                 @if(!empty($item['color']))
                                                 <span class="d-block">Color: {{ $item['color'] }}</span>
                                                 @endif
                                             </div>
                                             <a class="del-icone position-absolute" href="{{ route('cart.remove', $id) }}">
                                                 <i class="ion-close text-secondary"></i>
                                             </a>
                                         </div>
                                         @endforeach

                                         <!-- Cart Totals -->
                                         @php
                                         $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
                                         $shipping = 7.00;
                                         $taxes = 0.00;
                                         $total = $subtotal + $shipping + $taxes;
                                         @endphp

                                         <div class="cart-footer">
                                             <ul class="price-content pl-4 pb-2">
                                                 <li>Subtotal <span class="float-right">${{ number_format($subtotal, 2) }}</span></li>
                                                 <li>Shipping <span class="float-right">${{ number_format($shipping, 2) }}</span></li>
                                                 <li>Taxes <span class="float-right">${{ number_format($taxes, 2) }}</span></li>
                                                 <li>Total <span class="float-right">${{ number_format($total, 2) }}</span></li>
                                             </ul>
                                             <div class="cart-actions text-center">
                                                 <a href="{{ route('checkout') }}" class="btn bg-secondary text-white btn-block btn-sm">Checkout</a>
                                             </div>
                                         </div>
                                     </li>
                                     @else
                                     <li class="p-3 text-center">
                                         Sorry! your cart is empty,<br>
                                         <a href="/" class="text-primary">Start shopping</a>
                                     </li>
                                     @endif
                                 </ul>

                             </li>

                             {{-- Wishlist --}}
                             <li>
                                 <a href="{{ auth()->check() ? route('wishlist') : route('user-login') }}" class="text-secondary">
                                     <i class="lnr lnr-heart"></i>
                                     <span class="my-cart text-secondary">
                                         <span class="d-block">Wish</span>
                                         <span>list (0)</span>
                                     </span>
                                 </a>
                             </li>

                             {{-- User/Login Link --}}
                             <li>
                                 @auth
                                 <a href="{{ route('profile') }}" class="text-secondary">
                                     <i class="lnr lnr-user"></i>
                                     <span class="my-cart text-secondary">
                                         <span class="d-block"><strong>Welcome</strong></span>
                                         <span>{{ auth()->user()->name }}</span>
                                     </span>
                                 </a>
                                 @else
                                 <a href="{{ route('user-login') }}" class="text-secondary">
                                     <i class="lnr lnr-user"></i>
                                     <span class="my-cart text-secondary">
                                         <span class="d-block"><strong>Sign in</strong> Or</span>
                                         <span>Join My Site</span>
                                     </span>
                                 </a>
                                 @endauth
                             </li>


                         </ul>
                     </div>
                 </div>
                 <!-- Cart Box End Here -->
             </div>
             <!-- Row End -->
         </div>
         <!-- Container End -->
     </div>
     <div class="header-bottom  header-sticky">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-3 col-lg-4 col-md-6 vertical-nav-dropdown d-none d-lg-block">
                     <span class="categorie-title">Shop by Categories</span>
                 </div>
                 <div class="col-xl-9 col-lg-8 col-md-12 ">
                     <nav class="d-none d-lg-block navbar navbar-expand-lg py-0" id="main-nav">
                         <ul class="navbar-nav header-bottom-list d-flex text-capitalize">
                             <li class="nav-item active">
                                 <a href="{{route('home')}}" class="nav-link">home</a>
                             </li>
                             <li>
                                 <a href="{{route('shop')}}" class="nav-link">shop</a>
                                 <ul>
                                     @foreach($categories as $category)
                                     <li><a href="{{ route('category', [$category->slug])}}">{{ $category->title }}</a></li>
                                     @endforeach
                                 </ul>
                             </li>
                             <li>
                                 <a href="{{route('blog')}}" class="nav-link">blog</a>
                             </li>
                             <li>
                                 <a href="{{route('about')}}" class="nav-link">About us</a>
                             </li>
                             <li>
                                 <a href="{{route('contact')}}" class="nav-link">contact us</a>
                             </li>
                         </ul>
                     </nav>
                     <div class="mobile-menu d-block d-lg-none">
                         <nav style="display: block;">
                             <ul>
                                 <li class="nav-item active"><a href="{{route('home')}}">home</a></li>
                                 <li><a href="{{route('shop')}}">shop</a>
                                     <ul>
                                         @foreach($categories as $category)
                                         <li><a href="{{ route('category', [$category->slug])}}">{{ $category->title }}</a></li>
                                         @endforeach
                                     </ul>
                                     <!-- Mobile Menu Dropdown End -->
                                 </li>
                                 <li>
                                     <a href="{{route('blog')}}" class="nav-link">blog</a>
                                 </li>
                                 <li>
                                     <a href="{{route('about')}}" class="nav-link">About us</a>
                                 </li>
                                 <li>
                                     <a href="{{route('contact')}}" class="nav-link">contact us</a>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
             <!-- Row End -->
         </div>
         <!-- Container End -->
     </div>
     <div class="container d-block d-lg-none">
         <div class="vertical-menu mt-30">
             <span class="categorie-title mobile-categorei-menu">Shop by Categories</span>
             <nav>
                 <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden " style="display: block;">
                     <ul>
                         @foreach ($categories as $category)
                         <li class="has-sub {{ $loop->first ? 'open' : '' }}">
                             <a href="#">{{ $category->name }}</a>

                             @if ($category->children && count($category->children))
                             <ul class="category-sub" style="{{ $loop->first ? 'display: block;' : '' }}">
                                 @foreach ($category->children as $child)
                                 <li class="{{ $child->children && count($child->children) ? 'has-sub' : '' }}">
                                     <a href="#">{{ $child->name }}</a>

                                     @if ($child->children && count($child->children))
                                     <ul class="category-sub" style="display: none;">
                                         @foreach ($child->children as $subchild)
                                         <li><a href="{{ route('shop.category', $subchild->slug ?? '#') }}">{{ $subchild->name }}</a></li>
                                         @endforeach
                                     </ul>
                                     @endif
                                 </li>
                                 @endforeach
                             </ul>
                             @endif
                         </li>
                         @endforeach
                     </ul>

                 </div>
                 <!-- category-menu-end -->
             </nav>
         </div>
     </div>
 </header>