<x-layouts.frontend>

    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>

    <div class="main-page-banner py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col-md-8 col-lg-9">
                    <article class="postBox">
                        <img src="{{asset('front/img/blog/best-gaming-laptop-model-entry-header.webp')}}" class="card-img-top img-fluid w-100" alt="best-gaming-laptop-model-entry-header">


                        <h2 class=" mt-4">Best Gaming Laptop Models</h2>
                        <p>Ullamcorper condimentum erat pretium velit at ut a nunc id a adeu vestibulum nibh urna nam consequat erat molestie lacinia rhoncus. Nisi a diamida himenaeos condimentum laoreet pera neque habitant leo feugiat viverra nisl sagittis a curabitur parturient nisi adipiscing. A parturient dapibus pulvinar arcu a suspendisse sagittis mus mollis at a nec placerat sociosqu himenaeos litora fames habitant suscipit tempus scelerisque ridiculus mi ullamcorper per ridiculus proin condimentum.Nisi a diam id a himenaeos condimentum laoreet per a neque habitant leo feugiat viverra nisl sagittis a curabitur parturient nisi adipiscing. A parturient dapibus pulvinar arcu a suspendisse sagittis mus mollis at a nec placerat sociosqu himenaeos litora fames habitant suscipit tempus scelerisque ridiculus mi ullamcorper per ridiculus proin condimentum.</p>

                        <h3>Habitant leo</h3>
                        <p>Ullamcorper condimentum erat pretium velit at ut a nunc id a ad eu vestibulum nibh urna nam consequat erat molestie lacinia rhoncus. Nisi a diam id a himenaeos condimentum laoreet per a neque habitant leo feugiat viverra nisl sagittis a curabitur parturient nisi adipiscing. A parturient dapibus pulvinar arcu a suspendisse sagittis mus mollis at a nec placerat sociosqu himenaeos litora fames habitant suscipit tempus scelerisque ridiculus mi ullamcorper per ridiculus proin condimentum.</p>

                        <p>Nisi a diam id a himenaeos condimentum laoreet per a neque habitant leo feugiat viverra nisl sagittis a curabitur parturient nisi adipiscing. A parturient dapibus pulvinar arcu a suspendisse sagittis mus mollis at a nec placerat sociosqu himenaeos litora fames habitant suscipit tempus scelerisque ridiculus mi ullamcorper per ridiculus proin condimentum.</p>
                    </article>


                    <hr class="my-5">
                    <div class="commentSec mt-5">
                        <!-- Accordion Wrapper -->
                        <div class="accordion" id="writeComment">
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="blogComment">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="false" aria-controls="collapseComment">
                                        <i class="fa-solid fa-pen-to-square me-2 fa-2x"></i> Leave a Comment

                                    </button>
                                </h2>

                                <div id="collapseComment" class="accordion-collapse collapse" aria-labelledby="blogComment" data-bs-parent="#writeComment">
                                    <div class="accordion-body p-4">
                                        <!-- Comment Form -->
                                        <form>
                                            <div class="row">
                                                <div class="mb-3 col-lg-6">
                                                    <label for="commentName" class="form-label">Name</label>
                                                    <input type="text" class="form-control rounded-0" id="commentName" placeholder="Enter your name">
                                                </div>
                                                <div class="mb-3 col-lg-6">
                                                    <label for="commentEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control rounded-0" id="commentEmail" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="commentMessage" class="form-label">Comment</label>
                                                <textarea class="form-control rounded-0" id="commentMessage" rows="4" placeholder="Write your comment here..."></textarea>
                                            </div>
                                            <button type="submit" class="btn bg-secondary text-white rounded-0 px-4">Post Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Existing Comments -->
                        <h5 class=" mt-4 mb-4">2 Comments</h5>
                        <ul class="nav flex-column">
                            <li class=" d-flex pb-3 mb-3 border-bottom">
                                <div class="singleComment">
                                    <div class="singleCommentuser d-flex justify-content-between align-items-center">
                                        <div class="d-flex  align-items-center">
                                            <img src="{{asset('front/img/products/17.jpg')}}" class="rounded-circle align-self-start me-3 border p-1" alt="User Avatar">
                                            <h6 class="mb-0 fw-bold">John Doe</h6>
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
                                        I recently purchased this laptop and I'm genuinely impressed. It runs smoothly even with multiple tabs and apps open — perfect for both work and entertainment. The build quality feels premium, and yes — it’s an original product, not a copy or refurbished unit.
                                        Highly recommended for anyone looking for a reliable and fast machine!
                                    </p><a href="#" class="text-primary small">Reply</a>
                                </div>

                            </li>
                            <li class=" d-flex pb-3 mb-3 border-bottom">
                                <div class="singleComment">
                                    <div class="singleCommentuser d-flex justify-content-between align-items-center">
                                        <div class="d-flex  align-items-center">
                                            <img src="{{asset('front/img/products/17.jpg')}}" class="rounded-circle align-self-start me-3 border p-1" alt="User Avatar">
                                            <h6 class="mb-0 fw-bold">John Doe</h6>
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
                                        I recently purchased this laptop and I'm genuinely impressed. It runs smoothly even with multiple tabs and apps open — perfect for both work and entertainment. The build quality feels premium, and yes — it’s an original product, not a copy or refurbished unit.
                                        Highly recommended for anyone looking for a reliable and fast machine!
                                    </p><a href="#" class="text-primary small">Reply</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4 col-lg-3 blogSidebar">
                    <div class="postCats border-bottom mb-4 pb-3">
                        <h3 class="fs-5 fw-bold text-uppercase mb-4 ps-3">Related Categories</h3>
                        <ul class="nav flex-column">
                            <li class="d-flex mb-3">
                                <a href="#" class="text-secondary">
                                    Lenovo
                                </a>
                            </li>
                            <li class="d-flex mb-3">
                                <a href="#" class="text-secondary">
                                    Dell
                                </a>
                            </li>
                            <li class="d-flex mb-3">
                                <a href="#" class="text-secondary">
                                    Hp
                                </a>
                            </li>
                            <li class="d-flex mb-3">
                                <a href="#" class="text-secondary">
                                    Apple
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="postRelated-products border-bottom mb-4 pb-3">
                        <h3 class="fs-5 fw-bold text-uppercase mb-4 ps-3">Post Related Products</h3>
                        <div class="postRelated-slider owl-carousel ">
                            <div class="item">
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
                            <div class="item">
                                <div class="card product-itembox bg-white my-2">
                                    <a href="product.html" class="position-relative">
                                        <img class="primary-img card-img-top" src="{{asset('front/img/products/26.jpg')}}" alt="single-product">
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
                            <div class="item">
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
                        </div>
                    </div>

                    <div class="instaGallary border-bottom mb-3 pb-3">
                        <h3 class="fs-5 fw-bold text-uppercase mb-4 ps-3">Our Instagram</h3>
                        <ul class="nav  ">
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/21.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/22.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/2.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/3.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/4.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/5.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/6.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/7.jpg')}}" class="img-fluid" alt="products"></li>
                            <li class="me-1 mb-1 border p-1"><img src="{{asset('front/img/products/8.jpg')}}" class="img-fluid" alt="products"></li>
                        </ul>

                    </div>
                    <div class="recentPost border-bottom mb-4 pb-3">
                        <h3 class="fs-5 fw-bold text-uppercase mb-4 ps-3">Recent Posts</h3>
                        <ul class="nav flex-column">
                            <li class="d-flex mb-3">
                                <a href="#" class="flex-shrink-0 recentPost-img">
                                    <img src="{{asset('front/img/blog/best-gaming-laptop-model-entry-header.webp')}}" class=" img-fluid" alt="best-gaming-laptop-model-entry-header">
                                </a>
                                <a href="#" class="flex-grow-1 ms-2">
                                    <div class="recentPost-title">Best Gaming Laptop Models</div>
                                    <small class="text-secondary mt-2 d-block">July 29, 2025 28-7-2025</small>
                                </a>
                            </li>
                            <li class="d-flex mb-3">
                                <a href="#" class="flex-shrink-0 recentPost-img">
                                    <img src="{{asset('front/img/blog/best-gaming-laptop-model-entry-header.webp')}}" class=" img-fluid" alt="best-gaming-laptop-model-entry-header">
                                </a>
                                <a href="#" class="flex-grow-1 ms-2">
                                    <div class="recentPost-title">Best Gaming Laptop Models</div>
                                    <small class="text-secondary mt-2 d-block">July 29, 2025 28-7-2025</small>
                                </a>
                            </li>
                            <li class="d-flex mb-3">
                                <a href="#" class="flex-shrink-0 recentPost-img">
                                    <img src="{{asset('front/img/blog/best-gaming-laptop-model-entry-header.webp')}}" class=" img-fluid" alt="best-gaming-laptop-model-entry-header">
                                </a>
                                <a href="#" class="flex-grow-1 ms-2">
                                    <div class="recentPost-title">Best Gaming Laptop Models</div>
                                    <small class="text-secondary mt-2 d-block">July 29, 2025 28-7-2025</small>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>


</x-layouts.frontend>