<x-layouts.frontend>


    <div class="main-page-banner pb-4 off-white-bg pt-4">
        <div class="container">

            <!-- Row End -->
            <div class="row  mt-3">
                <div class="col-lg-8 ">
                    <div class="row border rounded mb-3  mx-0">
                        <div class="col-lg-3 text-center">
                            <img src="{{asset('front/img/thankyou.jpg')}}" class="img-fluid w-100 mx-auto d-block" alt="thankyou">


                        </div>
                        <div class="col-lg-9 border-start py-2">
                            <small class="text-primary fw-bold"> Order #3658156</small>
                            <h2 class="fs-5 fw-bold mb-0">Your Order is Confirmed</h2>
                            <p class="mb-0">You'll receive a confirmation email with your order number shortly</p>
                        </div>
                    </div>

                    <div class="border rounded p-4">
                        <h2 class="fs-4 fw-bold border-bottom pb-2 mb-4">Customer Information</h2>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <h3 class="fs-5 fw-bold">Contact Information</h3>
                                <p>customer@example.com</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h3 class="fs-5 fw-bold">Payment Method</h3>
                                <p><img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa" width="40"> ending with 1234</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h3 class="fs-5 fw-bold">Shipping Address</h3>
                                <p>Customer Name<br>1600 Pennsylvania Ave<br>Washington DC 19345<br>United States</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h3 class="fs-5 fw-bold">Billing Address</h3>
                                <p>Customer Name<br>1600 Pennsylvania Ave<br>Washington DC 19345<br>United States</p>
                            </div>
                            <div class="col-12">
                                <h3 class="fs-5 fw-bold">Shipping Method</h3>
                                <p>First Class Package</p>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <i class="fa-solid fa-circle-question text-muted"></i> Need to Help? | Contact Us
                        </div>


                        <div class="col-lg-5 px-0 text-end">
                            <a href="#" class="btn bg-primary text-white fw-semibold px-4 me-2 mb-2 rounded-0">Back to Home </a>
                            <a href="#" class="btn bg-secondary  text-white fw-semibold px-4 me-2 mb-2 rounded-0">Go to Shop </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="bg-white p-4 rounded  border h-100">
                        <!-- Product Item -->
                        <div class="row align-items-center mb-3 cp-list checkout-product-list">
                            <div class="col-4 col-lg-3 d-flex checkout-product-thumb">
                                <a href="product.html" class="position-relative cp-img">
                                    <img class="primary-img card-img-top" src="{{asset('front/img/products/18.jpg')}}"
                                        alt="single-product">
                                </a>
                            </div>
                            <div class="col-8 col-lg-7">
                                <div>Smart watches wood edition - Black</div>
                            </div>

                            <div class="col-lg-2 checkout-product-price">$599.00</div>
                        </div>
                        <!-- Subtotal -->
                        <div class="d-flex justify-content-between py-3">
                            <span class="fw-semibold">Subtotal</span>
                            <span class="fw-semibold text-secondary">$599.00</span>
                        </div>

                        <!-- Shipping -->
                        <div class="d-flex mb-2">
                            <div class="col-5 fw-semibold mb-1">Shipping</div>
                            <div class="col-7">
                                <div class=" form-check text-end fw-semibold">
                                    $20.00

                                </div>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="d-flex justify-content-between border-top border-bottom py-3 mb-4 ">
                            <span class="fw-semibold fs-5">Total</span>
                            <span class="fw-semibold text-secondary fs-5">$619.00</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row  mt-5">
                <div class="col-lg-8 ">

                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>


</x-layouts.frontend>