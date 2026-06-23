<x-layouts.frontend>

    <div class="main-page-banner cart-page pb-4 off-white-bg pt-4">
        <div class="container">
            <div class="row">
                <!-- Carousel Column -->
                <div class="col-md-5">
                    <div class="owl-carousel product-gallery owl-theme mb-3 border p-3" id="main-carousel">
                        <div class="item"><img src="{{asset('front/img/single-product/watch-1.webp')}}" class="img-fluid" alt="watch 1"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-2.webp')}}" class="img-fluid" alt="watch 2"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-3.webp')}}" class="img-fluid" alt="watch 3"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-1.webp')}}" class="img-fluid" alt="watch 4"></div>
                    </div>
                    <!-- Thumbnail Carousel -->
                    <div class="owl-carousel thumb-carousel owl-theme" id="thumb-carousel">
                        <div class="item"><img src="{{asset('front/img/single-product/watch-1.webp')}}" class="img-fluid" alt="thumb 1"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-2.webp')}}" class="img-fluid" alt="thumb 2"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-3.webp')}}" class="img-fluid" alt="thumb 3"></div>
                        <div class="item"><img src="{{asset('front/img/single-product/watch-1.webp')}}" class="img-fluid" alt="thumb 4"></div>
                    </div>
                </div>
                <!-- Product Details Column -->
                <div class="col-md-7 ps-lg-4 ">
                    <div class="position-relative">
                        <h2 class="fw-bold mt-4 pe-5">Smart watches wood edition</h2>
                        <div class="single-product-whishlist position-absolute">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.96173 18.9109L9.42605 18.3219L8.96173 18.9109ZM12 5.50063L11.4596 6.02073C11.601 6.16763 11.7961 6.25063 12 6.25063C12.2039 6.25063 12.399 6.16763 12.5404 6.02073L12 5.50063ZM15.0383 18.9109L15.5026 19.4999L15.0383 18.9109ZM7.00061 16.4209C6.68078 16.1577 6.20813 16.2036 5.94491 16.5234C5.68169 16.8432 5.72758 17.3159 6.04741 17.5791L7.00061 16.4209ZM2.34199 13.4115C2.54074 13.7749 2.99647 13.9084 3.35988 13.7096C3.7233 13.5108 3.85677 13.0551 3.65801 12.6917L2.34199 13.4115ZM2.75 9.1371C2.75 6.98623 3.96537 5.18252 5.62436 4.42419C7.23607 3.68748 9.40166 3.88258 11.4596 6.02073L12.5404 4.98053C10.0985 2.44352 7.26409 2.02539 5.00076 3.05996C2.78471 4.07292 1.25 6.42503 1.25 9.1371H2.75ZM8.49742 19.4999C9.00965 19.9037 9.55954 20.3343 10.1168 20.6599C10.6739 20.9854 11.3096 21.25 12 21.25V19.75C11.6904 19.75 11.3261 19.6293 10.8736 19.3648C10.4213 19.1005 9.95208 18.7366 9.42605 18.3219L8.49742 19.4999ZM15.5026 19.4999C16.9292 18.3752 18.7528 17.0866 20.1833 15.4758C21.6395 13.8361 22.75 11.8026 22.75 9.1371H21.25C21.25 11.3345 20.3508 13.0282 19.0617 14.4798C17.7469 15.9603 16.0896 17.1271 14.574 18.3219L15.5026 19.4999ZM22.75 9.1371C22.75 6.42503 21.2153 4.07292 18.9992 3.05996C16.7359 2.02539 13.9015 2.44352 11.4596 4.98053L12.5404 6.02073C14.5983 3.88258 16.7639 3.68748 18.3756 4.42419C20.0346 5.18252 21.25 6.98623 21.25 9.1371H22.75ZM14.574 18.3219C14.0479 18.7366 13.5787 19.1005 13.1264 19.3648C12.6739 19.6293 12.3096 19.75 12 19.75V21.25C12.6904 21.25 13.3261 20.9854 13.8832 20.6599C14.4405 20.3343 14.9903 19.9037 15.5026 19.4999L14.574 18.3219ZM9.42605 18.3219C8.63014 17.6945 7.82129 17.0963 7.00061 16.4209L6.04741 17.5791C6.87768 18.2624 7.75472 18.9144 8.49742 19.4999L9.42605 18.3219ZM3.65801 12.6917C3.0968 11.6656 2.75 10.5033 2.75 9.1371H1.25C1.25 10.7746 1.66995 12.1827 2.34199 13.4115L3.65801 12.6917Z" fill="#1C274C"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="d-flex align-items-center fs-4 text-secondary fw-bold mt-3 mb-2">Rs 1599.00
                        <div class="product-rating d-flex border-start ms-3 ps-3 ">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <p class=" text-secondary fw-bold"><del class="text-light fs-6">Rs 1500.00</del> <span class="small fs-6 fw-bold text-primary">-13% OFF <i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></span> </p>
                    <p class="mt-4 mb-4">Himenaeos parturient nam a justo placerat lorem erat pretium a fusce pharetra pretium enim sagittis ut nunc neque torquent sem a leo. Dictumst himenaeos primis torquent ridiculus. Himenaeos parturient nam a justo placerat lorem erat pretium a fusce pharetra pretium enim sagittis ut nunc neque torquent sem a leo. Dictumst himenaeos primis torquent ridiculus.</p>

                    <div class="d-flex align-items-center mt-4 mb-4">
                        <span class="me-2 fw-bold">Color:</span>
                        <div class="single-product-color bg-light border me-1 px-3 py-2"></div>
                        <div class="single-product-color bg-dark border me-1 px-3 py-2"></div>
                        <div class="single-product-color bg-success border me-1 px-3 py-2"></div>
                        <div class="single-product-color bg-info border me-1 px-3 py-2"></div>
                    </div>
                    <div class="d-flex align-items-center mt-4 mb-4">
                        <span class="me-2 fw-bold">Size:</span>
                        <div class="single-product-size border me-1 px-3 py-2">S</div>
                        <div class="single-product-size border me-1 px-3 py-2">M</div>
                        <div class="single-product-size border me-1 px-3 py-2">L</div>
                        <div class="single-product-size border me-1 px-3 py-2">XL</div>
                    </div>

                    <div class="d-flex align-items-center mt-4 mb-4 single-product-quality">
                        <span class="me-2 fw-bold">Quantity</span>
                        <button class="btn btn-outline-secondary px-2 rounded-0">−</button>
                        <input type="text" class="form-control text-center  rounded-0" style="width: 60px;" value="1">
                        <button class="btn btn-outline-secondary px-2  rounded-0">+</button>
                    </div>
                    <div class="d-flex align-items-center mt-5 mb-3">
                        <button class="btn bg-primary text-white fw-semibold px-4 me-2 mb-2 rounded-0">Buy Now</button>
                        <button class="btn bg-secondary  text-white fw-semibold px-4 me-2 mb-2 rounded-0">Add To Cart</button>
                    </div>

                    <h4 class=" border-top pt-3 fs-5 text-secondary fw-bold mt-2 mb-1">Return & Warranty </h4>
                    <div class="d-flex align-items-center mt-2">
                        <a href="#" class="text-black">
                            <svg width="20px" height="20px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="bi bi-arrow-return-right">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                            </svg>
                            14 Days easy return</a> <span class="mx-2">|</span>
                        <a href="#" class="text-black">Warranty not available</a>
                    </div>

                    <!-- add compare, wishlist etc -->
                </div>
            </div>
        </div>
        <div class="container mt-5 pt-4 border-top singleProduct-tabs">
            <ul class="nav nav-tabs" id="product-into" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-dark text-uppercase fw-semibold fs-6 px-4 py-3" id="reviews-tab"
                        data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab"
                        aria-controls="reviews-tab-pane" aria-selected="false">Customer Reviews (35)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark text-uppercase fw-semibold fs-6 px-4 py-3" id="specifications-tab"
                        data-bs-toggle="tab" data-bs-target="#specifications-tab-pane" type="button" role="tab"
                        aria-controls="specifications-tab-pane" aria-selected="false">Specifications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link  text-dark text-uppercase fw-semibold fs-6 px-4 py-3" id="additional-info-tab"
                        data-bs-toggle="tab" data-bs-target="#additional-info-tab-pane" type="button" role="tab"
                        aria-controls="additional-info-tab-pane" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark text-uppercase fw-semibold fs-6 px-4 py-3" id="shipping-tab"
                        data-bs-toggle="tab" data-bs-target="#shipping-tab-pane" type="button" role="tab"
                        aria-controls="shipping-tab-pane" aria-selected="false">Shipping & Delivery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark text-uppercase fw-semibold fs-6 px-4 py-3" id="faqs-tab"
                        data-bs-toggle="tab" data-bs-target="#faqs-tab-pane" type="button" role="tab"
                        aria-controls="faqs-tab-pane" aria-selected="false">Product Realted FAQ's</button>
                </li>
            </ul>
            <div class="tab-content" id="product-intoContent">
                <div class="tab-pane fade border show active p-4" id="reviews-tab-pane" role="tabpanel"
                    aria-labelledby="reviews-tab" tabindex="0">
                    <ul class="nav ratingHead mb-3">
                        <li class="fs-5 fw-bold ms-2">Reviews | 4.1</li>
                        <li class=" ms-2">35 ratings</li>
                        <li class=" ms-2 reviews-rating"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></li>
                        <li class=" ms-2 text-success fw-bold verified-purchases"><i class="fa-solid fa-check fs-5 me-2"></i> All from verified purchases</li>
                    </ul>
                    <div class="commentSec mt-5">
                        <ul class="nav flex-column">
                            <li class=" d-flex pb-3 mb-3 border-bottom">
                                <div class="singleComment w-100">
                                    <div class="singleCommentuser d-flex justify-content-between align-items-center">
                                        <div class="d-flex  align-items-center">
                                            <img src="{{asset('front/img/products/17.jpg')}}" class="rounded-circle align-self-start me-3 border p-1" alt="User Avatar">
                                            <div class="d-block">
                                                <div class="text-success">Verified Purchase<img src="{{asset('front/img/verify-icon.png')}}" class="img-fluid ms-2 userVerify" alt="verify"> </div>
                                                <h6 class="mb-0 fw-bold">John Doe</h6>
                                            </div>

                                        </div>
                                        <div class="productRating">
                                            <div class=" d-flex justify-content-end">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <small class="text-muted">July 29, 2025 at 2:11 PM</small>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-1"> Excellent Performance and Genuine Product!
                                        I recently purchased this laptop and I'm genuinely impressed.
                                    </p>
                                </div>
                            </li>
                            <li class=" d-flex pb-3 mb-3 border-bottom">
                                <div class="singleComment w-100">
                                    <div class="singleCommentuser d-flex justify-content-between align-items-center">
                                        <div class="d-flex  align-items-center">
                                            <img src="{{asset('front/img/products/17.jpg')}}" class="rounded-circle align-self-start me-3 border p-1" alt="User Avatar">
                                            <div class="d-block">
                                                <div class="text-success">Verified Purchase<img src="{{asset('front/img/verify-icon.png')}}" class="img-fluid ms-2 userVerify" alt="verify"> </div>
                                                <h6 class="mb-0 fw-bold">John Doe</h6>
                                            </div>

                                        </div>
                                        <div class="productRating">
                                            <div class=" d-flex justify-content-end">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <small class="text-muted">July 29, 2025 at 2:11 PM</small>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-1"> Excellent Performance and Genuine Product!
                                        I recently purchased this laptop and I'm genuinely impressed.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade border p-4" id="specifications-tab-pane" role="tabpanel"
                    aria-labelledby="specifications-tab" tabindex="0">
                    <div class="row mx-0">
                        <!-- Row 1 -->
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Battery Included</div>
                        <div class="col-6 col-md-3 py-2 border">No</div>
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Power Source</div>
                        <div class="col-6 col-md-3 py-2 border">AC&DC</div>

                        <!-- Row 2 -->
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Inbox adaptor</div>
                        <div class="col-6 col-md-3 py-2 border">No</div>
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">High-concerned Chemical</div>
                        <div class="col-6 col-md-3 py-2 border">None</div>

                        <!-- Row 3 -->
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Lighting Type</div>
                        <div class="col-6 col-md-3 py-2 border">Ring Light</div>
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Color Temperature</div>
                        <div class="col-6 col-md-3 py-2 border">Other</div>

                        <!-- Row 4 -->
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Brand Name</div>
                        <div class="col-6 col-md-3 py-2 border">RNABAU</div>
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Origin</div>
                        <div class="col-6 col-md-3 py-2 border">Mainland China</div>

                        <!-- Row 5 -->
                        <div class="col-6 col-md-3 fw-semibold bg-light  bg-opacity-75 py-2 border">Power Source</div>
                        <div class="col-6 col-md-3 py-2 border">AC&DC</div>
                    </div>
                </div>
                <div class="tab-pane fade border p-4" id="additional-info-tab-pane" role="tabpanel"
                    aria-labelledby="additional-info-tab" tabindex="0">
                    <p>Screen size: 1.54 HD IPS, 240*240 Touch screen 2.5D fox surface capacitive full-fit touch screen.– CPU
                        chip: MTK2502– RAM/ROM: 34M/128M– Battery: built-in lithium battery, about 1-2 days working time.–
                        System requires Android 5.0 and above, IOS 9.0 and above.– Language support: English, Russian,
                        Portuguese, French, Spanish, Italian, Indonesian, Polish, Turkish, Hebrew, etc.Package included:T500
                        Smartwatch x 1Charger x 1User manual x 1</p>

                    <img src="{{asset('front/img/single-product/watch-1.webp')}}" class="img-fluid" alt="watch 1">

                    <div class="d-flex justify-content-center my-5">
                        <a href="#" class="btn btn-outline-secondary btn-lg rounded-0 px-5">Read More</a>
                    </div>
                </div>
                <div class="tab-pane fade border  p-4 border" id="shipping-tab-pane" role="tabpanel"
                    aria-labelledby="shipping-tab" tabindex="0">
                    <h4>MAECENAS IACULIS</h4>
                    <p>Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui adipiscing convallis bulum
                        parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque
                        adipiscing a vestibulum hendrerit et pharetra fames nunc natoque&nbsp;dui.</p>
                    <h4 class="mt-4">ADIPISCING CONVALLIS BULUM</h4>
                    <p>Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui adipiscing convallis bulum
                        parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque
                        adipiscing a vestibulum hendrerit et pharetra fames nunc natoque&nbsp;dui.</p>
                    <ul class="unordered-list">
                        <li>Vestibulum penatibus nunc dui adipiscing convallis bulum parturient suspendisse.</li>
                        <li>Abitur parturient praesent lectus quam a natoque adipiscing a vestibulum hendre.</li>
                        <li>Diam parturient dictumst parturient scelerisque nibh lectus.</li>
                    </ul>
                </div>
                <div class="tab-pane fade border  p-4 border" id="faqs-tab-pane" role="tabpanel"
                    aria-labelledby="faqs-tab" tabindex="0">
                    <h2 class="mb-4">Buyer Questions & Answers (4)</h2>
                    <ul class="nav flex-column">
                        <li class="mb-3">
                            <div class="fw-bold mb-2"> Q: "Is this watch original and high quality?"</div>
                            <div class=""> A: "Yes, this watch combines elegance with precision — truly a timeless piece that complements every occasion."</div>
                        </li>
                        <li class="mb-3">
                            <div class="fw-bold mb-2"> Q: How reliable is the craftsmanship of this watch?"</div>
                            <div class=""> A: The craftsmanship is outstanding, and the original quality makes it a reliable daily companion.</div>
                        </li>
                        <li class="mb-3">
                            <div class="fw-bold mb-2"> Q: When did you order the watch and how was the delivery?</div>
                            <div class=""> A: I ordered this watch last month, and the delivery was prompt. It arrived exactly as described, authentic and stylish.</div>
                        </li>
                        <li class="mb-3">
                            <div class="fw-bold mb-2"> Q: Is this watch worth the price?</div>
                            <div class=""> A: With its durable build and classic design, this watch exceeds expectations and is worth every penny.</div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <div class="container  my-5">
            <h3 class="font-weight-bold">Related Products</h3>
            <div class="related-product owl-carousel ">
                <div class="owl-item">
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
                <div class="owl-item">
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
                <div class="owl-item">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top" src="{{asset('front/img/products/33.jpg')}}" alt="single-product">
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
                <div class="owl-item">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top" src="{{asset('front/img/products/34.jpg')}}" alt="single-product">
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
                <div class="owl-item">
                    <div class="card product-itembox bg-white my-2">
                        <a href="product.html" class="position-relative">
                            <img class="primary-img card-img-top" src="{{asset('front/img/products/35.jpg')}}" alt="single-product">
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
                <div class="owl-item">
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
        </div>
    </div>

</x-layouts.frontend>