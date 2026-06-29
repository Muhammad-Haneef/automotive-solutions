<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg p-0 d-none d-sm-block border-top border-bottom bg-white">
    <div class="container px-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" data-bs-toggle="offcanvas" data-bs-target="#categoryDrawer">
                        <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M4 6H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M4 18H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg> All Categories
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Home
                    </a>
                </li>
                <?php /*
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="{{route('products')}}" id="shopMegaMenu" role="button">
                        Shop
                    </a>

                    <div class="dropdown-menu mega-menu border-0 shadow-lg p-4">
                        <div class="container">
                            <div class="row">

                                <!-- Column 1 -->
                                <div class="col">
                                    <a href="#" class="mega-title lightgray-text">Shop List</a>
                                    <ul class="nav  flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Shop
                                                Default</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shop Right
                                                Sidebar</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shop Wide</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Filters
                                                Area</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">List Left
                                                Sidebar</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Load More
                                                Button</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Infinite
                                                Scrolling</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Image Hover –
                                                Zoom</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Image Hover –
                                                Slider</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Image Hover –
                                                Flip</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Stock
                                                Progress Bar</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sale
                                                Countdown</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2 -->
                                <div class="col">
                                    <a href="#" class="mega-title lightgray-text">Product Detail</a>
                                    <ul class="nav  flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Product
                                                Default</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product
                                                Variable</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product
                                                Grouped</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product
                                                External</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product Zoom
                                                Image</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product With
                                                Video</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Thumbnails
                                                Left</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Gallery 1
                                                Column</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Gallery 2
                                                Columns</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Carousel 2
                                                Columns</a></li>
                                    </ul>
                                </div>

                                <!-- Column 3 -->
                                <div class="col">
                                    <a href="#" class="mega-title lightgray-text">Product Features</a>
                                    <ul class="nav  flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Buy Now
                                                Button</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Order on
                                                WhatsApp</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Stock
                                                Progress Bar</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sale
                                                Countdown</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sticky Add to
                                                Cart</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sticky Tab
                                                Titles</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Reviews
                                                Without Tab</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Product Full
                                                Width</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sticky
                                                Description</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Vertical
                                                Tabs</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Accordion
                                                Tabs</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Accordion in
                                                Content</a></li>
                                    </ul>
                                </div>

                                <!-- Column 4 -->
                                <div class="col">
                                    <a href="#" class="mega-title lightgray-text">Shop Pages</a>
                                    <ul class="nav  flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Compare</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">My
                                                Account</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Order
                                                Tracking</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Wishlist</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Catalog
                                                Mode</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Featured
                                                Products</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Best Selling
                                                Products</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Stock
                                                Status</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shipping
                                                Class</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shop by
                                                Brand</a></li>
                                    </ul>
                                </div>
                                <!-- Column 4 -->
                                <div class="col">
                                    <a href="#" class="mega-title lightgray-text">Shop Layout</a>
                                    <ul class="nav  flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Compare</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">My
                                                Account</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Order
                                                Tracking</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Wishlist</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Catalog
                                                Mode</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Featured
                                                Products</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Best Selling
                                                Products</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Stock
                                                Status</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shipping
                                                Class</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shop by
                                                Brand</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                */ ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">
                        All Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('brands')}}">
                        Brands
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories')}}">
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blogs')}}">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact-us')}}">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav right-navbar ms-auto">

                <li class="nav-item dropdown best-seller-dropdown">
                    <a class="fw-semibold  nav-link best-seller-toggle" href="#">
                        <img src="front/images/discount.svg" alt="" width="20">
                        Best Seller
                        <span class="badge bg-danger ms-2">Sale</span>
                    </a>

                    <div class="best-seller-mega-menu">

                        <div class="container">
                            <div class="row py-4">

                                <!-- Col 1 -->
                                <div class="col  best-seller-col">
                                    <div class="product-card">
                                        <span class="product-badge">
                                            -17%
                                        </span>
                                        <span class="product-wishlist position-absolute">
                                            <img src="front/images/wishlist.svg" alt="" class="img-fluid">
                                        </span>
                                        <div class="product-img">
                                            <img src="front/images/products/01-59.webp" alt=""
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
                                <div class="col">
                                    <div class="product-card">
                                        <span class="product-badge">
                                            -13%
                                        </span>
                                        <span class="product-wishlist position-absolute">
                                            <img src="front/images/wishlist.svg" alt="" class="img-fluid">
                                        </span>
                                        <div class="product-img">
                                            <img src="front/images/products/01-22.webp" alt=""
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
                                                <span class="score fw-semibold ms-2 text-black">3.68</span>
                                                <span class="total-rating">(3)</span>
                                            </div>
                                        </div>

                                        <h2 class="product-title fw-medium">
                                            Goodyear Eagle Exhilarate UHP All Season 245_45ZR17 99Y XL Passenger
                                            Tire
                                        </h2>
                                        <div class="mb-3">
                                            <bdi class="fw-bold product-price oswald">
                                                198.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                299.88
                                            </del>
                                        </div>
                                        <button class="btn btn-primary py-1 font-small w-100">
                                            Add To Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-card">
                                        <span class="product-badge">
                                            -13%
                                        </span>
                                        <span class="product-wishlist position-absolute">
                                            <img src="front/images/wishlist.svg" alt="" class="img-fluid">
                                        </span>
                                        <div class="product-img">
                                            <img src="front/images/products/01-57.webp" alt=""
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
                                                <span class="score fw-semibold ms-2 text-black">3.68</span>
                                                <span class="total-rating">(3)</span>
                                            </div>
                                        </div>

                                        <h2 class="product-title fw-medium">
                                            YADA 1080P Roadcam, Full-HD Day or Night, Smart G-sensor Recording
                                            24_7, Motion Detection, SD Card Included, BT533146
                                        </h2>
                                        <div class="mb-3">
                                            <bdi class="fw-bold product-price oswald">
                                                75.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                89.88
                                            </del>
                                        </div>
                                        <button class="btn btn-primary py-1 font-small w-100">
                                            Add To Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-card">
                                        <span class="product-badge">
                                            -13%
                                        </span>
                                        <span class="product-wishlist position-absolute">
                                            <img src="front/images/wishlist.svg" alt="" class="img-fluid">
                                        </span>
                                        <div class="product-img">
                                            <img src="front/images/products/01-56.webp" alt=""
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
                                                <span class="score fw-semibold ms-2 text-black">3.68</span>
                                                <span class="total-rating">(3)</span>
                                            </div>
                                        </div>

                                        <h2 class="product-title fw-medium">
                                            Vauxhall Zafira MK2 2008-2014 Tail Back Rear Light Lamp Lens Right
                                            Side
                                        </h2>
                                        <div class="mb-3">
                                            <bdi class="fw-bold product-price oswald">
                                                75.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                89.15
                                            </del>
                                        </div>
                                        <button class="btn btn-primary py-1 font-small w-100">
                                            Add To Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-card">
                                        <span class="product-badge">
                                            -13%
                                        </span>
                                        <span class="product-wishlist position-absolute">
                                            <img src="front/images/wishlist.svg" alt="" class="img-fluid">
                                        </span>
                                        <div class="product-img">
                                            <img src="front/images/products/01-55.webp" alt=""
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
                                                <span class="score fw-semibold ms-2 text-black">3.68</span>
                                                <span class="total-rating">(3)</span>
                                            </div>
                                        </div>

                                        <h2 class="product-title fw-medium">
                                            TYPE S – Remote-Controlled 194_T10 Multicolor LED Mini Bulb Set
                                        </h2>
                                        <div class="mb-3">
                                            <bdi class="fw-bold product-price oswald">
                                                7.55
                                            </bdi>
                                            <del class="product-price-discount oswald ms-1">
                                                9.99
                                            </del>
                                        </div>
                                        <button class="btn btn-primary py-1 font-small w-100">
                                            Add To Cart
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </li>

            </ul>

        </div>
    </div>
</nav>