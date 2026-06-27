@php
$selectedCategories = (array) session('product_filters.category', []);
@endphp
<header>
    <div class="header-middle py-3">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class=" col-md-12 col-lg-3">
                    <div class="logo ">
                        <a href="{{route('home')}}">
                            <img src="{{asset('front/img/venta-logo.png')}}" class="img-fluid" alt="venta.pk">
                        </a>
                    </div>
                </div>
                <!-- Categorie Search Box Start Here -->
                <div class="col-md-5 col-lg-5  d-sm-block d-none">
                    <div class="categorie-search-box">
                        <form action="{{ route('products') }}" method="POST" class="position-relative w-100 ">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="search"
                                    class="form-control py-0"
                                    value="{{ session('product_filters.search') }}"
                                    placeholder="I’m shopping for...">


                                <select class="bootstrap-select m-0" name="category[]">
                                    <option value="">All categories</option>
                                    @if($categories)
                                    @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}"
                                        {{ in_array($category['id'], $selectedCategories) ? 'selected' : '' }}>
                                        {{ $category['title'] }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                                <button type="submit"
                                    class="btn p-0 m-0 text-white bg-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4  d-sm-block d-none">
                    <div class="cart-box position-relative">
                        <ul class="nav d-flex justify-content-lg-end justify-content-center align-items-center text-capitalize small">
                            <li>
                                <a href="#" class="text-secondary">
                                    <i class="fa fa-cart-arrow-down"></i>
                                    <span class="my-cart">
                                        <span class="total-pro d-block text-white text-center cart-count  bg-primary">{{ cartCount() }}</span>
                                        <span class="d-block">cart</span>
                                    </span>
                                </a>
                                @include('cart-dropdown')
                            </li>
                            <li>
                                <a href="{{ auth()->check() ? route('profile') : route('user-login') }}" class="text-black">
                                    <i class="fa-regular fa-heart"></i>
                                    <span class="my-cart text-black">
                                        <span class="d-block">Wish</span>
                                        <span>list (0)</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}" class="text-black d-flex align-items-center">
                                    <i class="fa-regular fa-user"></i>
                                    <span class="my-cart text-black ms-2">
                                        @auth
                                        <span class="d-block">
                                            <strong>Welcome</strong>
                                        </span>
                                        <span>{{ auth()->user()->name }}</span>
                                        @else
                                        <span class="d-block">
                                            <strong>Sign in</strong> Or
                                        </span>
                                        <span>Join My Site</span>
                                        @endauth
                                    </span>
                                </a>
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
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg py-0 justify-content-between justify-content-lg-center">

                <?php /*
                ========================================
                TO OPEN SIDEBAR MENU IN MOBILE VIEW
                ========================================
                this will be used for sidebar categories menu in mobile view, currently we are showing categories in main menu, 
                so this is not needed, but we can use it in future if we want to have a separate sidebar menu for categories in 
                mobile view
                <div class="text-black me-3 bg-primary text-white py-1 ps-2 pe-4 fw-bold" id="openSidebarBtn">
                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Menu_Alt_01">
                            <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg> Shop By Categories
                </div>
                */ ?>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
                    <ul class="navbar-nav flex-wrap py-2">
                        @if($categories)
                        @php $x = 0; @endphp
                        @foreach ($categories as $category)
                        @if($x >= 6) @break @endif
                        <li class="nav-item">
                            <a class="nav-link p-3" href="{{ route('category', $category['slug']) }}">
                                {{ $category['title'] }}
                            </a>
                        </li>
                        @php $x++; @endphp
                        @endforeach
                        @endif

                        @if($menu)
                        @foreach ($menu as $key => $value)
                        <li class="nav-item">
                            <a class="nav-link p-3" href="{{ route(strtolower($key)) }}">
                                {{ $value }}
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>

            </nav>


        </div>
        <!-- Container End -->
    </div>
</header>
<!-- Overlay -->
<div id="overlay" style="display:none; position: fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.4); z-index: 1050;"></div>