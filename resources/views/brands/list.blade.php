<x-layouts.frontend>



  <section class="py-4 border-bottom">
    <div class="container">
      <h1 class="h2 product_title display-5 mt-3 text-center">Brands</h1>
    </div>
  </section>

  <x-product-values />

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 shop-sidebar offcanvas offcanvas-start category-drawer"
          tabindex="-1"
          id="mobilefilter">
          <div class="bg-white">
            <div class="offcanvas-header site-drawer-header d-block d-sm-none">
              <h4 class="entry-title">Menu</h4>

              <button type="button" class="btn-close mt-1" data-bs-dismiss="offcanvas"></button>
            </div>
            <h5 class="mb-0 fw-semibold py-3 border-bottom">
              Product Categories
            </h5>
            <div class=" mt-3 accordion accordion-flush mb-3" id="categoryAccordion">
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="air">
                <label class="form-check-label" for="air">
                  Air Condition
                </label>
              </div>

              <!-- Bearings -->

              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="bearing">
                <label class="form-check-label" for="bearing">
                  Bearings
                </label>
              </div>

              <!-- Body -->

              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="body">
                <label class="form-check-label" for="body">
                  Body
                </label>
              </div>

              <!-- Brakes -->

              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="brakes">
                <label class="form-check-label" for="brakes">
                  Brakes
                </label>
              </div>

              <!-- Car Accessories -->

              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Car Accessories
                </label>
              </div>
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Engine cooling system
                </label>
              </div>
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Engine oil
                </label>
              </div>
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Filters
                </label>
              </div>
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Gearbox
                </label>
              </div>




              <div class="accordion-item border-0">
                <div class="accordion-header border-0">
                  <div class="accordion-button px-0 py-2  collapsed" data-bs-toggle="collapse" data-bs-target="#headlight">
                    <input class="form-check-input me-2" type="checkbox">
                    Headlights & Lighting
                  </div>
                </div>
                <div id="headlight"
                  class="accordion-collapse collapse"
                  data-bs-parent="#categoryAccordion">

                  <div class="accordion-body py-2">

                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="day">
                      <label class="form-check-label" for="day">
                        Daytime Running Lights
                      </label>
                    </div>

                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="fog">
                      <label class="form-check-label" for="fog">
                        Fog Lights
                      </label>
                    </div>

                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="interior">
                      <label class="form-check-label" for="interior">
                        Interior Lights
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="reflector">
                      <label class="form-check-label" for="reflector">
                        Reflectors
                      </label>
                    </div>

                  </div>

                </div>
              </div>

              <!-- Tires -->

              <div class="accordion-item border-0">
                <h2 class="accordion-header  border-0">
                  <button class="accordion-button px-0 py-2  collapsed" data-bs-toggle="collapse" data-bs-target="#tires">
                    <input class="form-check-input me-2" type="checkbox">
                    Tires & Wheels
                  </button>
                </h2>
                <div id="tires" class="accordion-collapse collapse" data-bs-parent="#categoryAccordion">

                  <div class="accordion-body py-2">
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="allseason">
                      <label class="form-check-label" for="allseason">
                        All Season
                      </label>
                    </div>

                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="alloy">
                      <label class="form-check-label" for="alloy">
                        Alloy Wheels
                      </label>
                    </div>

                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="competition">
                      <label class="form-check-label" for="competition">
                        Competition Tire
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="summer">
                      <label class="form-check-label" for="summer">
                        Summer Tires
                      </label>
                    </div>

                  </div>

                </div>

              </div>
              <div class="form-check px-0 py-1">
                <input class="form-check-input" type="checkbox" id="car">
                <label class="form-check-label" for="car">
                  Tools & Equipment
                </label>
              </div>
            </div>
            <!-- noUiSlider CSS -->
            <link href="https://cdn.jsdelivr.net/npm/nouislider@15.8.1/dist/nouislider.min.css" rel="stylesheet">

            <div class="shop-sidebar">

              <!-- Price Filter -->
              <div class="filter-widget mb-5">

                <h5 class="widget-title">
                  Filter by price
                </h5>

                <div id="price-slider" class="mb-4"></div>

                <div class="row g-2 align-items-center mb-4">

                  <div class="col-5">
                    <input
                      type="number"
                      id="min-price"
                      class="form-control"
                      value="0">
                  </div>

                  <div class="col-2 text-center fw-semibold">
                    -
                  </div>

                  <div class="col-5">
                    <input
                      type="number"
                      id="max-price"
                      class="form-control"
                      value="860">
                  </div>

                </div>

                <div class="d-flex justify-content-between align-items-center">

                  <div class="price-text">
                    Price:
                    <strong>$<span id="price-min">0</span></strong>
                    —
                    <strong>$<span id="price-max">860</span></strong>
                  </div>

                  <button class="btn btn-filter">
                    Filter
                  </button>

                </div>

              </div>

              <!-- Color Filter -->

              <div class="filter-widget">

                <h5 class="widget-title">
                  Filter by Color
                </h5>

                <ul class="color-list">

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color black"></span>

                      <span>Black</span>

                    </label>

                    <small>(6)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color blue"></span>

                      <span>Blue</span>

                    </label>

                    <small>(5)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color brown"></span>

                      <span>Brown</span>

                    </label>

                    <small>(5)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color gray"></span>

                      <span>Gray</span>

                    </label>

                    <small>(3)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color green"></span>

                      <span>Green</span>

                    </label>

                    <small>(3)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color red"></span>

                      <span>Red</span>

                    </label>

                    <small>(5)</small>

                  </li>

                  <li>

                    <label>

                      <input type="checkbox">

                      <span class="color yellow"></span>

                      <span>Yellow</span>

                    </label>

                    <small>(6)</small>

                  </li>

                </ul>

              </div>
            </div>

            <!-- noUiSlider -->
            <script src="https://cdn.jsdelivr.net/npm/nouislider@15.8.1/dist/nouislider.min.js"></script>

            <!-- Brands -->
            <div class="filter-widget mb-5">
              <h5 class="fw-bold mb-3">Brands</h5>

              <ul class="list-unstyled m-0 brand-list">
                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand1">
                    <label class="form-check-label" for="brand1">AKKON</label>
                  </div>
                  <small>(2)</small>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand2">
                    <label class="form-check-label" for="brand2">AutoShack</label>
                  </div>
                  <small>(4)</small>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand3">
                    <label class="form-check-label" for="brand3">Castrol</label>
                  </div>
                  <small>(2)</small>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand4">
                    <label class="form-check-label" for="brand4">Goodyear</label>
                  </div>
                  <small>(6)</small>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand5">
                    <label class="form-check-label" for="brand5">Spyder</label>
                  </div>
                  <small>(7)</small>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="brand6">
                    <label class="form-check-label" for="brand6">Yokohama</label>
                  </div>
                  <small>(3)</small>
                </li>
              </ul>
            </div>
            <!-- Product Status -->
            <div class="filter-widget">
              <h5 class="fw-bold mb-3">Product Status</h5>

              <ul class="list-unstyled m-0">
                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="stock">
                    <label class="form-check-label" for="stock">In Stock</label>
                  </div>
                </li>

                <li class="filter-check d-flex justify-content-between">
                  <div class="form-check ps-0">
                    <input class="form-check-input" type="checkbox" id="sale">
                    <label class="form-check-label" for="sale">On Sale</label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="py-3 before-shop-loop mb-3">
            <div class="row align-items-center g-3">
              <!-- LEFT SIDE -->
              <div class="col-3 col-lg-6 d-flex align-items-center gap-3 flex-wrap">
                <!-- Filter Button (Mobile) -->
                <button class="btn btn-outline-secondary filter-btn d-lg-none d-flex align-items-center gap-2" data-bs-toggle="offcanvas" data-bs-target="#mobilefilter">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-down-icon lucide-arrow-up-down">
                    <path d="m21 16-4 4-4-4"></path>
                    <path d="M17 20V4"></path>
                    <path d="m3 8 4-4 4 4"></path>
                    <path d="M7 4v16"></path>
                  </svg>
                  Filter
                </button>


                <!-- Result Count -->
                <p class="mb-0 text-muted small d-none d-sm-block">
                  Showing 1–12 of 60 results
                </p>

              </div>

              <!-- RIGHT SIDE -->
              <div class="col-9 col-lg-6 d-flex justify-content-lg-end flex-wrap gap-3 align-items-center">

                <!-- Sort -->
                <div class="d-flex align-items-center gap-2">

                  <span class="text-muted small  d-none d-sm-block">Sort:</span>

                  <select class="form-select form-select-sm sorting">
                    <option selected>Default sorting</option>
                    <option>Sort by popularity</option>
                    <option>Sort by average rating</option>
                    <option>Sort by latest</option>
                    <option>Sort by price: low to high</option>
                    <option>Sort by price: high to low</option>
                  </select>

                </div>

                <!-- Per Page -->
                <select class="form-select form-select-sm items">
                  <option>12 Items</option>
                  <option>24 Items</option>
                  <option>36 Items</option>
                  <option>48 Items</option>
                </select>

                <!-- View Buttons -->
                <div class="btn-group view-toggle  d-none d-sm-block">
                  <a href="#"
                    class="btn btn-light active"
                    data-bs-toggle="tooltip"
                    title="Grid View">

                    <!-- grid icon -->
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5">
                      <rect x="3" y="3" width="7" height="7"></rect>
                      <rect x="14" y="3" width="7" height="7"></rect>
                      <rect x="14" y="14" width="7" height="7"></rect>
                      <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>

                  </a>

                  <a href="#"
                    class="btn btn-light"
                    data-bs-toggle="tooltip"
                    title="List View">

                    <!-- list icon -->
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5">
                      <line x1="8" y1="6" x2="21" y2="6"></line>
                      <line x1="8" y1="12" x2="21" y2="12"></line>
                      <line x1="8" y1="18" x2="21" y2="18"></line>
                      <rect x="3" y="5" width="2" height="2"></rect>
                      <rect x="3" y="11" width="2" height="2"></rect>
                      <rect x="3" y="17" width="2" height="2"></rect>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -13%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-56.webp')}}" alt="" class="img-fluid">
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

                </div>
                <button class="btn btn-primary py-1 font-small w-100">
                  Add To Cart
                </button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -25%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-55.webp')}}" alt="" class="img-fluid">
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
                </div>
                <button class="btn btn-primary py-1 font-small w-100 mt-2">Add To Cart</button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -28%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-52.webp')}}" alt="" class="img-fluid">
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
                  Sylvania H11 SilverStar ULTRA Halogen Headlight Bulb, 2 Pack, Compatible with Multiple Cars
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
                </div>
                <button class="btn btn-primary py-1 font-small w-100 mt-2">Add To Cart</button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -13%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-51.webp')}}" alt="" class="img-fluid">
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
                </div>
                <button class="btn btn-primary py-1 font-small w-100 mt-2">Add To Cart</button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -22%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-50.webp')}}" alt="" class="img-fluid">
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
                </div>
                <button class="btn btn-primary py-1 font-small w-100 mt-2">Add To Cart</button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -17%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-59.webp')}}" alt="" class="img-fluid">
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
                    <span class="score fw-semibold ms-2 text-black">3.33</span>
                    <span class="total-rating">(3)</span>
                  </div>
                </div>

                <h2 class="product-title fw-medium">
                  Zerex G05 Phosphate Free Antifreeze Coolant
                </h2>
                <div class="mb-3">
                  <bdi class="fw-bold product-price oswald">
                    $33.43
                  </bdi>
                  <del class="product-price-discount oswald ms-1">
                    $40.00
                  </del>
                </div>

                <button class="btn btn-primary py-1 font-small w-100">
                  Add To Cart
                </button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -13%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-51.webp')}}" alt="" class="img-fluid">
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
                    <span class="score fw-semibold ms-2 text-black">4.33</span>
                    <span class="total-rating">(3)</span>
                  </div>
                </div>

                <h2 class="product-title fw-medium">
                  Sylvania 9005 XtraVision Halogen Headlight Bulb, 1 Pack
                </h2>
                <div class="mb-3">
                  <bdi class="fw-bold product-price oswald">
                    19.50
                  </bdi>
                  <del class="product-price-discount oswald ms-1">
                    22.40
                  </del>
                </div>
                <button class="btn btn-primary py-1 font-small w-100">
                  Add To Cart
                </button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -28%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-30.webp')}}" alt="" class="img-fluid">
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
                    <span class="score fw-semibold ms-2 text-black">3.33</span>
                    <span class="total-rating">(3)</span>
                  </div>
                </div>

                <h2 class="product-title fw-medium">
                  Oil Filter – Compatible with 2011 – 2022 Ford
                </h2>
                <div class="mb-3">
                  <bdi class="fw-bold product-price oswald">
                    65.33
                  </bdi>
                  <del class="product-price-discount oswald ms-1">
                    89.99
                  </del>
                </div>

                <button class="btn btn-primary py-1 font-small w-100">
                  Add To Cart
                </button>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-4">
              <div class="product-card my-2">
                <span class="product-badge">
                  -17%
                </span>
                <span class="product-wishlist position-absolute">
                  <img src="{{asset('front/images/wishlist.svg')}}" alt="" class="img-fluid">
                </span>
                <div class="product-img">
                  <img src="{{asset('front/images/products/01-43.webp')}}" alt="" class="img-fluid">
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
                    <span class="score fw-semibold ms-2 text-black">3.33</span>
                    <span class="total-rating">(3)</span>
                  </div>
                </div>

                <h2 class="product-title fw-medium">
                  Shock Absorbers for Nissan,ECCPP Front Rear Shock Absorbers
                </h2>
                <div class="mb-3">
                  <bdi class="fw-bold product-price oswald">
                    113.98
                  </bdi>
                  <del class="product-price-discount oswald ms-1">
                    136.14
                  </del>
                </div>

                <button class="btn btn-primary py-1 font-small w-100">
                  Add To Cart
                </button>
              </div>
            </div>
          </div>
          <div class="shop-pagination mx-auto mt-5 mb-4">
            <nav aria-label="...">
              <ul class="pagination     justify-content-center">
                <li class="page-item">
                  <a href="#" class="page-link">
                    <svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(0)">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000"></path>
                      </g>
                    </svg>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#" aria-current="page">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(180)">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000"></path>
                      </g>
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </section>


</x-layouts.frontend>