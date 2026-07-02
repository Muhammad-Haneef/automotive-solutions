<x-layouts.frontend>

    <x-home-slider />

    <x-brand-marquee />

   <x-product-values />

   <x-category-cards />

   <x-product-cards-slider />
   
    <x-find-auto-parts-form />

    <x-promotion-banner />

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Left Content -->
                <div class="col-lg-4">
                    <h6 class="text-uppercase text-secondary fw-bold mb-3">
                        Duis commodo at risus
                    </h6>
                    <h2 class="fw-extrabold display-6 mb-4">
                        Poskapet pred det vill säga polyliga
                        <span class="text-secondary">
                            dekavin eura
                        </span>
                    </h2>
                    <p class="text-muted mb-3">
                        Vestibulum condimentum libero elit, at pretium purus molestie ornare.
                        Sed turpis justo, facilisis cursus elit in, lobortis molestie.
                    </p>
                    <p class="text-muted mb-4">
                        Morbi sed rhoncus erat. Aenean quis lacus tellus. Duis commodo at risus
                        sit amet maximus molestie.
                    </p>
                    <a href="#" class="text-decoration-underline fw-semibold text-dark">
                        Read and Shop Now
                    </a>
                </div>
                <!-- Center Image -->
                <div class="col-lg-4 text-center">
                    <img src="{{asset('front/images/banner-02-1.jpg')}}" alt=""
                        class="img-fluid">
                </div>
                <!-- Right Content -->
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-2">
                        Reliable Parts for Unstoppable Rides.
                    </h5>
                    <p class="text-muted mb-5">
                        Vestibulum condimentum libero elit, at pretium purus molestie ornare.
                    </p>
                    <!-- Item 1 -->
                    <div class="d-flex mb-4 border-bottom pb-3">
                        <div class="me-3">
                            <span class="point-count">
                                01
                            </span>
                        </div>
                        <div>
                            <h6 class="fw-bold">
                                Maecenas tristique, tellus non tempor
                            </h6>
                            <p class="text-muted mb-0">
                                Cras porttitor non diam at fringilla. Mauris aliquam nulla et libero iaculis,
                                vitae sagittis.
                            </p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="d-flex mb-4 border-bottom pb-3">
                        <div class="me-3">
                            <span class="point-count">
                                02
                            </span>
                        </div>
                        <div>
                            <h6 class="fw-bold">
                                Maecenas tristique, tellus non tempor
                            </h6>
                            <p class="text-muted mb-0">
                                Cras porttitor non diam at fringilla. Mauris aliquam nulla et libero iaculis,
                                vitae sagittis.
                            </p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="d-flex ">
                        <div class="me-3">
                            <span class="point-count">
                                03
                            </span>
                        </div>
                        <div>
                            <h6 class="fw-bold">
                                Maecenas tristique, tellus non tempor
                            </h6>
                            <p class="text-muted mb-0">
                                Cras porttitor non diam at fringilla. Mauris aliquam nulla et libero iaculis,
                                vitae sagittis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <x-discount-banner />

    <section class="new-arrivals py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <h2 class="section-title mb-0">
                        New Arrivals
                    </h2>
                    <ul class="nav nav-tabs arrivals-tabs border-0" id="arrivalTabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#headlights">
                                Headlights & Lighting
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tires">
                                Tires & Wheels
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tools">
                                Tools & Equipment
                            </button>
                        </li>
                    </ul>
                </div>
                <a href="#" class="text-decoration-none fw-semibold text-primary-background fs-14">
                    View All
                </a>
            </div>
            <div class="tab-content">
                <!-- TAB 1 -->
                <div class="tab-pane fade show active" id="headlights">
                    <div class="swiper headlightsSwiper">
                        <div class="swiper-wrapper">
                            <!-- Product -->
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-56.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">3.68</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Vauxhall Zafira MK2 2008-2014 Tail Back Rear Light Lamp Lens Right Side
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                64.95
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                89.15
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -25%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-55.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        TYPE S – Remote-Controlled 194_T10 Multicolor LED Mini Bulb Set
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                7.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                9.99
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -28%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-52.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania H11 SilverStar ULTRA Halogen Headlight Bulb, 2 Pack, Compatible with
                                        Multiple Cars
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                20.19
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                28.66
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/16">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-51.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania 9005 XtraVision Halogen Headlight Bulb, 1 Pack
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                19.50
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                20.40
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -22%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-50.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder BMW E90 3-Series 06-08 4DR Headlights – Halogen Model Only – Black PRO
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                186.99
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                236.75
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/14">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-49.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder 15-17 Chevy Colorado Projector Headlights – Light Bar LED – Black
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                224.56
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                260.90
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next head-next">
              </div>
              <div class="swiper-button-prev head-prev">
              </div> -->
                        <div class="swiper-pagination head-pagination">
                        </div>

                    </div>
                </div>
                <!-- TAB 2 -->
                <div class="tab-pane fade" id="tires">
                    <div class="swiper tiresSwiper">
                        <div class="swiper-wrapper">
                            <!-- Product -->
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-56.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">3.68</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Vauxhall Zafira MK2 2008-2014 Tail Back Rear Light Lamp Lens Right Side
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                64.95
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                89.15
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -25%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-55.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        TYPE S – Remote-Controlled 194_T10 Multicolor LED Mini Bulb Set
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                7.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                9.99
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -28%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-52.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania H11 SilverStar ULTRA Halogen Headlight Bulb, 2 Pack, Compatible with
                                        Multiple Cars
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                20.19
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                28.66
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/16">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-51.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania 9005 XtraVision Halogen Headlight Bulb, 1 Pack
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                19.50
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                20.40
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -22%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-50.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder BMW E90 3-Series 06-08 4DR Headlights – Halogen Model Only – Black PRO
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                186.99
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                236.75
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/14">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-49.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder 15-17 Chevy Colorado Projector Headlights – Light Bar LED – Black
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                224.56
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                260.90
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next tire-next">
              </div>
              <div class="swiper-button-prev tire-prev">
              </div> -->
                    </div>
                </div>
                <!-- TAB 3 -->
                <div class="tab-pane fade" id="tools">
                    <div class="swiper toolsSwiper">
                        <div class="swiper-wrapper">
                            <!-- Product -->
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-56.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">3.68</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Vauxhall Zafira MK2 2008-2014 Tail Back Rear Light Lamp Lens Right Side
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                64.95
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                89.15
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -25%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-55.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        TYPE S – Remote-Controlled 194_T10 Multicolor LED Mini Bulb Set
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                7.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                9.99
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/15">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -28%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-52.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.00</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania H11 SilverStar ULTRA Halogen Headlight Bulb, 2 Pack, Compatible with
                                        Multiple Cars
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                20.19
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                28.66
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/16">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-51.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Sylvania 9005 XtraVision Halogen Headlight Bulb, 1 Pack
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                19.50
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                20.40
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -22%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-50.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder BMW E90 3-Series 06-08 4DR Headlights – Halogen Model Only – Black PRO
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                186.99
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                236.75
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/14">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <span class="product-badge">
                                        -13%
                                    </span>
                                    <span class="product-wishlist position-absolute">
                                        <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                                    </span>
                                    <div class="product-img">
                                        <img src="{{asset('front/images/products/01-49.webp')}}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-rating d-flex align-item-center mb-2">
                                        <div class="rating small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rating-score small">
                                            <span class="score fw-semibold ms-2">4.33</span>
                                            <span class="total-rating">(3)</span>
                                        </div>
                                    </div>
                                    <h2 class="product-title fw-medium">
                                        Spyder 15-17 Chevy Colorado Projector Headlights – Light Bar LED – Black
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <bdi class="fw-bold product-price oswald">
                                                224.56
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                260.90
                                            </del>
                                        </div>
                                        <button class="btn btn-primary cart-btn py-1 px-2 font-small">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-countdown bordered klb-countdown">
                                        <div class="site-countdown" data-date="2026/09/17">
                                            <p class="site-countdown-message">
                                                Time remaining in the campaign:
                                            </p>
                                            <div class="site-countdown-block">
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-days">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        d
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-hours">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        h
                                                    </span>
                                                </div>
                                                <div class="countdown-item">
                                                    <span class="countdown-time countdown-time-minutes">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        m
                                                    </span>
                                                </div>
                                                <div class="countdown-item seconds">
                                                    <span class="countdown-time countdown-time-seconds">
                                                        00
                                                    </span>
                                                    <span class="countdown-text">
                                                        s
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="countdown-expired">
                                                The campaign is over!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next tool-next">
                        </div>
                        <div class="swiper-button-prev tool-prev">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-call-back-request-banner />


    <section class="py-4">
        <div class="container">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap">
                <div>
                    <h2 class="fw-bold mb-1 section-title">
                        Featured Products
                    </h2>
                    <p class="text-muted mb-0">
                        Our most ordered products.
                    </p>
                </div>
                <a href="#" class="text-decoration-none fw-semibold text-primary-background fs-14">
                    View All
                </a>
            </div>
            <!-- Slider -->
            <div class="swiper featuredSwiper">
                <div class="swiper-wrapper">
                    <!-- Product 1 -->
                    <div class="swiper-slide">
                        <div class="card p-3 mb-3 hot-products">
                            <div class="row g-0 ">
                                <!-- Image -->
                                <div class="col-5 col-md-5 position-relative">
                                    <div class="border rounded">
                                        <img src="{{asset('front/images/products/01-41.webp')}}" class="img-fluid rounded-start"
                                            alt="Product">
                                    </div>
                                    <!-- Badge -->
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">
                                        -100%
                                    </span>
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-md-7">
                                    <div class="card-body pt-1">
                                        <h6 class="card-title fw-bold mb-2">
                                            Scott Drake C5ZZ-13A805-B Standard Wheel Horn Button Alternator
                                        </h6>
                                        <!-- Price -->
                                        <p class="card-text mb-2">
                                            <del class="text-muted">
                                                17.40
                                            </del>
                                            <span class="fw-bold text-danger ms-2">
                                                2,210.00
                                            </span>
                                        </p>
                                        <!-- Progress -->
                                        <div class="progress mb-2" style="height:5px;">
                                            <div class="progress-bar bg-danger" style="width:54%">
                                            </div>
                                        </div>
                                        <!-- Stock -->
                                        <div class="d-flex justify-content-between small text-muted">
                                            <span>
                                                Available:
                                                <b>14</b>
                                            </span>
                                            <span>
                                                Sold:
                                                <b>19</b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="swiper-slide">
                        <div class="card p-3 mb-3 hot-products">
                            <div class="row g-0 ">
                                <!-- Image -->
                                <div class="col-5 col-md-5 position-relative">
                                    <div class="border rounded">
                                        <img src="{{asset('front/images/products/01-29.webp')}}" class="img-fluid rounded-start"
                                            alt="Product">
                                    </div>
                                    <!-- Badge -->
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">
                                        -34%
                                    </span>
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-md-7">
                                    <div class="card-body pt-1">
                                        <h6 class="card-title fw-bold mb-2">
                                            JBL Clip 3 Portable Bluetooth Speaker with Carabiner – Gray
                                        </h6>
                                        <!-- Price -->
                                        <p class="card-text mb-2">
                                            <del class="text-muted">
                                                $19.99
                                            </del>
                                            <span class="fw-bold text-danger ms-2">
                                                $22.55
                                            </span>
                                        </p>
                                        <!-- Progress -->
                                        <div class="progress mb-2" style="height:5px;">
                                            <div class="progress-bar bg-danger" style="width:54%">
                                            </div>
                                        </div>
                                        <!-- Stock -->
                                        <div class="d-flex justify-content-between small text-muted">
                                            <span>
                                                Available:
                                                <b>17</b>
                                            </span>
                                            <span>
                                                Sold:
                                                <b> 20</b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="swiper-slide">
                        <div class="card p-3 mb-3 hot-products">
                            <div class="row g-0 ">
                                <!-- Image -->
                                <div class="col-5 col-md-5 position-relative">
                                    <div class="border rounded">
                                        <img src="{{asset('front/images/products/01-20.webp')}}" class="img-fluid rounded-start"
                                            alt="Product">
                                    </div>
                                    <!-- Badge -->
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">
                                        -34%
                                    </span>
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-md-7">
                                    <div class="card-body pt-1">
                                        <h6 class="card-title fw-bold mb-2">
                                            Garmin Edge 1050, Premium Cycling Computer, Vivid Color Touchscreen Display,
                                            Built-in Speaker
                                        </h6>
                                        <!-- Price -->
                                        <p class="card-text mb-2">
                                            <del class="text-muted">
                                                401.11
                                            </del>
                                            <span class="fw-bold text-danger ms-2">
                                                $599.99
                                            </span>
                                        </p>
                                        <!-- Progress -->
                                        <div class="progress mb-2" style="height:5px;">
                                            <div class="progress-bar bg-danger" style="width:54%">
                                            </div>
                                        </div>
                                        <!-- Stock -->
                                        <div class="d-flex justify-content-between small text-muted">
                                            <span>
                                                Available:
                                                <b>
                                                    17
                                                </b>
                                            </span>
                                            <span>
                                                Sold:
                                                <b>
                                                    20
                                                </b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="swiper-slide">
                        <div class="card p-3 mb-3 hot-products">
                            <div class="row g-0 ">
                                <!-- Image -->
                                <div class="col-5 col-md-5 position-relative">
                                    <div class="border rounded">
                                        <img src="{{asset('front/images/products/01-25.webp')}}" class="img-fluid rounded-start"
                                            alt="Product">
                                    </div>
                                    <!-- Badge -->
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">
                                        -34%
                                    </span>
                                </div>
                                <!-- Content -->
                                <div class="col-7 col-md-7">
                                    <div class="card-body pt-1">
                                        <h6 class="card-title fw-bold mb-2">
                                            JBL Clip 3 Portable Bluetooth Speaker
                                        </h6>
                                        <!-- Price -->
                                        <p class="card-text mb-2">
                                            <del class="text-muted">
                                                $22.55
                                            </del>
                                            <span class="fw-bold text-danger ms-2">
                                                $14.99
                                            </span>
                                        </p>
                                        <!-- Progress -->
                                        <div class="progress mb-2" style="height:5px;">
                                            <div class="progress-bar bg-danger" style="width:54%">
                                            </div>
                                        </div>
                                        <!-- Stock -->
                                        <div class="d-flex justify-content-between small text-muted">
                                            <span>
                                                Available:
                                                <b>
                                                    17
                                                </b>
                                            </span>
                                            <span>
                                                Sold:
                                                <b>
                                                    20
                                                </b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-home-faqs />

    <x-blog-cards />

    <x-subscriber-form />

    

</x-layouts.frontend>