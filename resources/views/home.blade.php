<x-layouts.frontend>


    <x-slider />

    <section class="Best-seller py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <h3 class="font-weight-bold">Best Seller</h3>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <ul class="nav nav-tabs justify-content-end border-0"
                        id="bestSeller" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active border-0"
                                id="electronics-tab" data-bs-toggle="tab"
                                data-bs-target="#electronics-tab-pane"
                                type="button" role="tab"
                                aria-controls="electronics-tab-pane"
                                aria-selected="true">Electronics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fashion-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#fashion-tab-pane"
                                type="button" role="tab"
                                aria-controls="fashion-tab-pane"
                                aria-selected="false">fashion</button>
                        </li>

                    </ul>
                </div>
                <div
                    class="col-12 col-md-2 col-lg-1 d-none d-sm-block"></div>
            </div>

            <div class="tab-content" id="bestSellerContent">
                <div class="tab-pane fade show active"
                    id="electronics-tab-pane" role="tabpanel"
                    aria-labelledby="electronics-tab" tabindex="0">
                    <div class="best-seller-pro-active owl-carousel ">
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/18.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/21.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/19.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/20.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/24.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/27.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fashion-tab-pane"
                    role="tabpanel" aria-labelledby="fashion-tab"
                    tabindex="0">
                    <div class="best-seller-pro-active owl-carousel ">
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/1.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/2.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/3.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/3.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/5.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/6.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="hot-Deal py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <h3 class="font-weight-bold">Hot Deal</h3>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <ul class="nav nav-tabs justify-content-end border-0"
                        id="bestSeller" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active border-0"
                                id="baby-kids-tab" data-bs-toggle="tab"
                                data-bs-target="#baby-kids-tab-pane"
                                type="button" role="tab"
                                aria-controls="baby-kids-tab-pane"
                                aria-selected="true">Baby/Kids</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="living-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#living-tab-pane"
                                type="button" role="tab"
                                aria-controls="living-tab-pane"
                                aria-selected="false">Living</button>
                        </li>

                    </ul>
                </div>
                <div
                    class="col-12 col-md-2 col-lg-1 d-none d-sm-block"></div>
            </div>

            <div class="tab-content" id="hotdealContent">
                <div class="tab-pane fade show active"
                    id="baby-kids-tab-pane" role="tabpanel"
                    aria-labelledby="baby-kids-tab" tabindex="0">
                    <div class="hot-deal owl-carousel ">
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/38.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/39.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/40.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/41.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/41.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/42.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="living-tab-pane"
                    role="tabpanel" aria-labelledby="living-tab"
                    tabindex="0">
                    <div class="best-seller-pro-active owl-carousel ">
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/31.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/32.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/33.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/34.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/35.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card product-itembox bg-white my-2">
                                <a href="product.html"
                                    class="position-relative">
                                    <img class="primary-img card-img-top"
                                        src="{{asset('front/img/products/36.jpg')}}"
                                        alt="single-product">
                                </a>
                                <div
                                    class="card-body product-content p-3 position-relative bg-white">
                                    <div class="pro-info">
                                        <p class="card-title mb-1"><a
                                                href="product.html"
                                                class=" text-secondary">Flos
                                                Chasen S2 Suspension</a></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p
                                                    class="card-text mb-0"><span
                                                        class=" price text-secondary fw-bold h5">$84.45</span>
                                                    <span
                                                        class="discount-price h6 text-muted d-block">$300.50</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div
                                                    class="product-discount fw-bold  text-primary text-end">25<span
                                                        class="symbol-percent">%
                                                        OFF</span><i
                                                        class="fa fa-arrow-down pl-1"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-details  position-absolute px-2 w-100">
                                        <div class="actions-primary">
                                            <a href="cart.html"
                                                class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                                + Add To Cart</a>
                                        </div>
                                        <div
                                            class="product-cart d-flex justify-content-between">
                                            <a href="compare.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    To Compare</span></a>
                                            <a href="wishlist.html"
                                                class="d-flex align-items-center"><i
                                                    class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                                <span
                                                    class="text-secondary d-inline-block pl-1">Add
                                                    to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="all-products py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h3 class="font-weight-bold">Just For You</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/35.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/18.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/26.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/11.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/12.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/38.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/26.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/15.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/22.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/18.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/38.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-2">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top"
                                src="{{asset('front/img/products/30.jpg')}}"
                                alt="single-product">
                        </a>
                        <div
                            class="card-body product-content p-3 position-relative bg-white">
                            <div class="pro-info">
                                <p class="card-title mb-1"><a
                                        href="product.html"
                                        class=" text-secondary">Flos Chasen
                                        S2 Suspension</a></p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="card-text mb-0"><span
                                                class=" price text-secondary fw-bold h5">$84.45</span>
                                            <span
                                                class="discount-price h6 text-muted d-block">$300.50</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="product-discount fw-bold  text-primary text-end">25<span
                                                class="symbol-percent">%
                                                OFF</span><i
                                                class="fa fa-arrow-down pl-1"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-details  position-absolute px-2 w-100">
                                <div class="actions-primary">
                                    <a href="cart.html"
                                        class="btn w-100 btn-sm bg-secondary text-white mb-2">
                                        + Add To Cart</a>
                                </div>
                                <div
                                    class="product-cart d-flex justify-content-between">
                                    <a href="compare.html"
                                        class="d-flex align-items-center"><i
                                            class="fa fa-refresh text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            To Compare</span></a>
                                    <a href="wishlist.html"
                                        class="d-flex align-items-center"><i
                                            class="fa-regular fa-heart text-secondary fa-lg me-1"></i>
                                        <span
                                            class="text-secondary d-inline-block pl-1">Add
                                            to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <span
                            class="product-label bg-primary text-white px-2 text-center text-uppercase rounded-circle position-absolute font-weight-bold">new</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <x-category-cards />
    <x-footer-banner />
    <x-news-letter-signup />

</x-layouts.frontend>