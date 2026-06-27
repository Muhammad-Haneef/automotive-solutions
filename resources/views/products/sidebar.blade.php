<!-- Sidebar Start -->
 <div class="filter-sidebar-overlay d-lg-none" id="filter-sidebarOverlay"></div>
                    <div class="offcanvas-sidebar d-lg-block bg-white" id="responsiveSidebar">
                        <!-- Close Button (visible only on mobile) -->
                        <button class="btn bg-secondary text-white ms-auto d-lg-none mb-3" id="closeSidebarBtn">
                            Close
                        </button>
                        <h5 class="widget-title text-uppercase fw-semibold">Filter by price</h5>
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
                        <h5 class="widget-title text-uppercase fw-semibold">Filter by color</h5>
                        <div class="filter-section scrollbar pb-4 pe-3 mb-3" id="style-2">
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