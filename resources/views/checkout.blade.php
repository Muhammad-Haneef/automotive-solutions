<x-layouts.frontend>


    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>
    <div class="main-page-banner pb-4 off-white-bg pt-4">
        <div class="container py-5">
            <div class="row g-4">

                <!-- Billing Details -->
                <div class="col-lg-7">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h5 class="fw-semibold mb-4">Billing Details</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label fw-semibold">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="John">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label fw-semibold">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Doe">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone" class="form-label fw-semibold">Phone</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+91 9876543210">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="john@example.com">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label fw-semibold">Street Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="123 Main St">
                                </div>
                                <div class="col-md-5 mb-3"> <label for="country"
                                        class="form-label fw-semibold">Country</label> <select class="form-select"
                                        id="country" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3"> <label for="state" class="form-label fw-semibold">State</label>
                                    <select class="form-select" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip" class="form-label fw-semibold">ZIP Code</label>
                                    <input type="text" class="form-control" id="zip" placeholder="400001">
                                </div>
                                <hr class="my-4">
                                <div class="form-check"> <input type="checkbox" class="form-check-input"
                                        id="same-address">
                                    <label class="form-check-label" for="same-address">Shipping address is the same as
                                        my billing address</label>
                                </div>
                                <div class="form-check"> <input type="checkbox" class="form-check-input" id="save-info">
                                    <label class="form-check-label" for="save-info">Save this information for next
                                        time</label>
                                </div>
                                <hr class="my-4">
                                <label for="state" class="form-label fw-semibold">Order notes (optional)</label>
                                <textarea class="form-control order-note" id="address" placeholder="123 Main St">
                                </textarea>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-5 ">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <!-- Product Header -->
                        <div class="row fw-semibold border-bottom pb-2 mb-3">
                            <div class="col">PRODUCT</div>
                            <div class="col-auto">SUBTOTAL</div>
                        </div>

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
                                <div class="input-group input-group-sm mt-2 w-50">
                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="1"
                                        style="width: 45px;">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                            </div>

                            <div class="col-lg-2 checkout-product-price">$599.00</div>
                        </div>

                        <!-- Subtotal -->
                        <div class="d-flex justify-content-between border-top py-3">
                            <span class="fw-semibold">Subtotal</span>
                            <span class="fw-semibold text-secondary">$599.00</span>
                        </div>

                        <!-- Shipping -->
                        <div class="d-flex mb-2">
                            <div class="col-7 fw-semibold mb-1">Shipping</div>
                            <div class="col-5">
                                <div class=" form-check text-end">
                                    <label class="form-check-label" for="flatRate">
                                        Flat rate: <span class="text-secondary fw-semibold">$20.00</span>
                                    </label>
                                    <input class="form-check-input" type="radio" name="shipping" id="flatRate" checked>

                                </div>
                                <div class="form-check text-end">
                                    <label class="form-check-label" for="localPickup">
                                        Local pickup: <span class="text-secondary fw-semibold">$25.00</span>
                                    </label>
                                    <input class="form-check-input" type="radio" name="shipping" id="localPickup">

                                </div>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="d-flex justify-content-between border-top border-bottom py-3 mb-4">
                            <span class="fw-semibold fs-5">Total</span>
                            <span class="fw-semibold text-secondary fs-5">$619.00</span>
                        </div>

                        <!-- Payment Methods -->
                        <div class="mb-4">
                            <div class="form-check py-2 mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="bankTransfer" checked>
                                <label class="form-check-label fw-semibold" for="bankTransfer">
                                    Direct bank transfer
                                </label>
                                <div class="text-muted small mt-1">
                                    Make your payment directly into our bank account. Use your Order ID as the payment
                                    reference.
                                </div>
                            </div>

                            <div class="form-check py-2 mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="cheque">
                                <label class="form-check-label fw-semibold" for="cheque">
                                    Cheque Payment
                                </label>
                            </div>

                            <div class="form-check py-2 mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="cod">
                                <label class="form-check-label fw-semibold" for="cod">
                                    Cash on delivery
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center form-check mb-2 ">
                                <input class="form-check-input" type="radio" name="payment" id="paypal">
                                <label class="form-check-label fw-semibold ms-2" for="paypal">
                                    PayPal
                                    <img src="{{asset('front/img/payment.jpg')}}" alt="PayPal" class="ms-2 w-50">
                                </label>
                                <div class="small w-50 text-end text-primary">What is PayPal?</div>
                            </div>
                        </div>

                        <!-- Terms and Policy -->
                        <div class="small text-muted mb-3 border-top border-bottom py-3">
                            Your personal data will be used to process your order and support your experience throughout
                            this website. Read our <a href="#" class="fw-semibold text-secondary">privacy policy</a>.
                        </div>

                        <!-- Terms Agreement -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terms">
                            <label class="form-check-label" for="terms">
                                I have read and agree to the website <br> <a href="#" class="fw-semibold">terms and
                                    conditions</a> <span class="text-danger">*</span>
                            </label>
                        </div>

                        <!-- Place Order -->
                        <button class="btn bg-secondary text-white w-100 fw-semibold">PLACE ORDER</button>
                    </div>

                </div>
            </div>
        </div>
    </div>



</x-layouts.frontend>