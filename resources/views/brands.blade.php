<x-layouts.frontend>


    <div class="main-page-banner pb-4 off-white-bg pt-4">
        <div class="container py-4">




            <!-- Overlay (only for mobile) -->
            <div class="filter-sidebar-overlay d-lg-none" id="filter-sidebarOverlay"></div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <!-- Sidebar Start -->
                    <div class="offcanvas-sidebar d-lg-block bg-white" id="responsiveSidebar">
                        <!-- Close Button (visible only on mobile) -->
                        <button class="btn bg-secondary text-white ms-auto d-lg-none mb-3" id="closeSidebarBtn">
                            Close
                        </button>
                        <!-- Filter by Color -->
                        <h5 class="widget-title text-uppercase fw-semibold">Electronics</h5>
                        <div class="filter-section scrollbar pb-4 pe-3 mb-3 scroll">
                            <div class="d-flex align-items-center py-2">Mobile Phones</div>
                            <div class="d-flex align-items-center py-2">Home Appliances</div>
                            <div class="d-flex align-items-center py-2">Smart Watches</div>
                            <div class="d-flex align-items-center py-2">Digital Cameras</div>
                            <div class="d-flex align-items-center py-2">Photo Studio Kits</div>
                            <div class="d-flex align-items-center py-2">Smart Home</div>

                        </div>
                        <h5 class="widget-title text-uppercase fw-semibold">Filter by Price</h5>
                        <div class="filter-section mt-4 pb-4 mb-3">
                            <div class="slider-container">
                                <div id="slider-range"></div>
                                <div class="d-flex justify-content-between align-items-center mt-3 py-0 ps-2 pe-0">
                                    <strong>Price</strong>
                                    <input type="text" id="amount" class="form-control border-0 fw-bold text-black py-0" readonly>
                                    <button class="btn btn-light btn-sm px-3">FILTER</button>
                                </div>
                            </div>
                        </div>

                        <!-- Filter by Color -->
                        <h5 class="widget-title text-uppercase fw-semibold">Product status</h5>
                        <div class="filter-section  pb-4  mb-3 ">
                            <form class="mt-2">

                                <div class=" form-check">
                                    <input type="checkbox" class="form-check-input" id="sale">
                                    <label class="form-check-label" for="sale">On sale</label>
                                </div>
                                <div class=" form-check">
                                    <input type="checkbox" class="form-check-input" id="stock">
                                    <label class="form-check-label" for="stock">In stock</label>
                                </div>
                            </form>

                        </div>
                        <!-- Filter by Color -->
                        <h5 class="widget-title text-uppercase fw-semibold">Filter by color</h5>
                        <div class="filter-section scrollbar pb-4 pe-3 mb-3 scroll">
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-beige"></span><span class="ms-1">Beige</span><span class="ms-auto">(14)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-black"></span><span class="ms-1">Black</span><span class="ms-auto">(36)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-blue"></span><span class="ms-1">Blue</span><span class="ms-auto">(23)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-brown"></span><span class="ms-1">Brown</span><span class="ms-auto">(18)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-gray"></span><span class="ms-1">Gray</span><span class="ms-auto">(29)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-green"></span><span class="ms-1">Green</span><span class="ms-auto">(19)</span></div>
                            <div class="d-flex align-items-center py-2"><span class="color-circle color-orange"></span><span class="ms-1">Orange</span><span class="ms-auto">(19)</span></div>
                        </div>

                        <!-- Filter by Size -->
                        <div class="filter-section mt-4 pb-4 mb-3">
                            <h5 class="widget-title text-uppercase fw-semibold">FILTER BY SIZE</h5>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">XS <span class="fw-normal text-center">18</span></a>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">S <span class="fw-normal text-center">21</span></a>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">M <span class="fw-normal text-center">23</span></a>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">L <span class="fw-normal text-center">15</span></a>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">XL <span class="fw-normal text-center">17</span></a>
                            <a href="#" class="productSize text-dark fw-semibold d-flex justify-content-between align-items-center py-2 w-100">XXL <span class="fw-normal text-center">12</span></a>
                        </div>

                        <!-- Filter by Brand -->
                        <div class="filter-section mt-4 pb-4 mb-3">
                            <h5 class="widget-title text-uppercase fw-semibold mb-4">FILTER BY BRAND</h5>
                            <div class="search-input position-relative">
                                <input type="text" class="form-control rounded-0" placeholder="Find a Brand" name="brand">
                                <i class="fa-solid fa-magnifying-glass search-icon position-absolute"></i>
                            </div>
                            <div class="brand-logo row g-3 m-0 justify-content-between">
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-alessi.png')}}" class="img-fluid d-block mx-auto" alt="ALESSI"></a>
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-flos.webp')}}" class="img-fluid d-block mx-auto" alt="FLOS"></a>
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-hay.webp')}}" class="img-fluid d-block mx-auto" alt="HAY"></a>
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-hay.webp')}}" class="img-fluid d-block mx-auto" alt="HAY"></a>
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-alessi.png')}}" class="img-fluid d-block mx-auto" alt="ALESSI"></a>
                                <a href="#" class="border p-2"><img src="{{asset('front/img/brand/brand-flos.webp')}}" class="img-fluid d-block mx-auto" alt="FLOS"></a>
                            </div>
                        </div>

                        <!-- Top Rated Products -->
                        <div class="filter-section mt-4 pb-4 mb-3">
                            <h5 class="widget-title text-uppercase fw-semibold mb-4">Top rated products</h5>
                            <div class="d-flex mb-3">
                                <img src="https://dummyimage.com/60x60/ddd/000&text=Bench" class="product-img me-2" alt="Indoor bench">
                                <div>
                                    <div class="top-product-title">Indoor bench</div>
                                    <div><span class="price-old">$699.00</span> <span class="price-new">$480.00</span></div>
                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="https://dummyimage.com/60x60/ddd/000&text=Chair" class="product-img me-2" alt="Fiber base chair">
                                <div>
                                    <div class="top-product-title">Fiber base chair</div>
                                    <div><span class="price-new">$299.00</span></div>
                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <img src="https://dummyimage.com/60x60/ddd/000&text=Chair" class="product-img me-2" alt="Euismod aliquam">
                                <div>
                                    <div class="top-product-title">Euismod aliquam</div>
                                    <div><span class="price-new">$599.00</span></div>
                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>
                <div class="col-md-9 col-lg-9">
                    <!-- Sidebar Toggle Button for Mobile (outside grid column) -->
                    <div class=" d-lg-none mb-3 ms-auto text-end" id="toggleSidebarBtn">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Menu / Menu_Alt_01">
                                <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg> Show Sidebar
                    </div>
                    <!-- Owl Carousel inside nav-tabs -->
                    <nav class="mt-4">
                        <div class="nav nav-tabs owl-carousel" id="nav-cat-tab" role="tablist">
                            <div class="item">
                                <button class="nav-link text-black border-0 active" id="nav-electronics-tab" data-bs-toggle="tab" data-bs-target="#nav-electronics"
                                    type="button" role="tab" aria-controls="nav-electronics" aria-selected="true">Electronics</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-women-fashion-tab" data-bs-toggle="tab" data-bs-target="#nav-women-fashion"
                                    type="button" role="tab" aria-controls="nav-women-fashion" aria-selected="false">Women's Fashion</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-mens-fashion-tab" data-bs-toggle="tab" data-bs-target="#nav-mens-fashion"
                                    type="button" role="tab" aria-controls="nav-mens-fashion" aria-selected="false">Men's Fashion</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-home&kitchen-tab" data-bs-toggle="tab" data-bs-target="#nav-home&kitchen"
                                    type="button" role="tab" aria-controls="nav-home&kitchen" aria-selected="false">Home & Kitchen</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-baby&maternity-tab" data-bs-toggle="tab" data-bs-target="#nav-baby&maternity"
                                    type="button" role="tab" aria-controls="nav-baby&maternity" aria-selected="false">Baby & Maternity</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-pet-supplies-tab" data-bs-toggle="tab" data-bs-target="#nav-pet-supplies"
                                    type="button" role="tab" aria-controls="nav-pet-supplies" aria-selected="false">Pet Supplies</button>
                            </div>
                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-jewelry-tab" data-bs-toggle="tab" data-bs-target="#nav-jewelry"
                                    type="button" role="tab" aria-controls="nav-jewelry" aria-selected="false">Jewelry & Watches</button>
                            </div>

                            <div class="item">
                                <button class="nav-link text-black border-0" id="nav-tools-tab" data-bs-toggle="tab" data-bs-target="#nav-tools"
                                    type="button" role="tab" aria-controls="nav-tools" aria-selected="false">Tools & Industrial</button>
                            </div>

                            <!-- Add more items here as needed -->
                        </div>
                    </nav>

                    <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-electronics" role="tabpanel" aria-labelledby="nav-electronics-tab" tabindex="0">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/18.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/19.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/20.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/21.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/22.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/23.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example mt-4 ">
                                <ul class="shop-pagination pagination mt- justify-content-center mt-5 pagination-lg">
                                    <li class="page-item ">
                                        <a class="page-link text-black fs-3 border-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link text-black border-0 px-3" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-black border-0  fs-3" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="nav-women-fashion" role="tabpanel" aria-labelledby="nav-women-fashion-tab" tabindex="0">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/1.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/2.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/3.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/4.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/5.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/6.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example mt-4 ">
                                <ul class="shop-pagination pagination justify-content-center mt-5 pagination-lg">
                                    <li class="page-item ">
                                        <a class="page-link text-black fs-3 border-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link text-black border-0 px-3" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-black border-0  fs-3" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="nav-mens-fashion" role="tabpanel" aria-labelledby="nav-mens-fashion-tab" tabindex="0">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/13.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/17.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/15.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/16.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example mt-4 ">
                                <ul class="shop-pagination pagination justify-content-center mt-5 pagination-lg">
                                    <li class="page-item ">
                                        <a class="page-link text-black fs-3 border-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link text-black border-0 px-3" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-black border-0  fs-3" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="nav-home&kitchen" role="tabpanel" aria-labelledby="nav-home&kitchen-tab" tabindex="0">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/31.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/32.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/38.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 mb-2">
                                    <div class="card product-itembox bg-white my-2">
                                        <a href="product.html" class="position-relative">
                                            <img class="primary-img card-img-top" src="{{asset('front/img/products/36.jpg')}}" alt="single-product">
                                        </a>
                                        <div class="card-body product-content p-3 position-relative bg-white">
                                            <div class="pro-info">
                                                <p class="card-title mb-1"><a href="product.html" class=" text-secondary">Flos Chasen S2 Suspension</a></p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="card-text mb-0"><span class=" price text-secondary fw-bold h5">$84.45</span>
                                                            <span class="discount-price h6 text-muted d-block">$300.50</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="product-discount fw-bold  text-primary text-end">25<span class="symbol-percent">% OFF</span><i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details  position-absolute px-2 w-100">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="btn w-100 btn-sm bg-secondary text-white mb-2"> + Add To Cart</a>
                                                </div>
                                                <div class="product-cart d-flex justify-content-between">
                                                    <a href="compare.html" class="d-flex align-items-center"><i class="fa fa-refresh text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add To Compare</span></a>
                                                    <a href="wishlist.html" class="d-flex align-items-center"><i class="fa-regular fa-heart text-secondary fa-lg me-1"></i> <span class="text-secondary d-inline-block pl-1">Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                                    </div>
                                </div>
                            </div>

                            <nav aria-label="Page navigation example mt-4 ">
                                <ul class="shop-pagination pagination justify-content-center mt-5 pagination-lg">
                                    <li class="page-item ">
                                        <a class="page-link text-black fs-3 border-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link text-black border-0 px-3" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-black border-0 px-3" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-black border-0  fs-3" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Container End -->
    </div>



</x-layouts.frontend>