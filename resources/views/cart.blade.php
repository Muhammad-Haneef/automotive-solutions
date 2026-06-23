<x-layouts.frontend>


    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>
    <div class="main-page-banner cart-page pb-4 off-white-bg pt-4">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-8">
                    <table class="table align-middle product-table-responsive  ">
                        <thead class="border-bottom">
                            <tr class="text-uppercase fw-semibold ">
                                <th scope="col" class="text-center product-remove"></th>
                                <th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart-product">
                                <td class="text-center  product-remove">
                                    <button class="btn btn-sm btn-link text-danger px-1">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <img src="{{asset('front/img/products/18.jpg')}}" width="40" alt="Product" class="img-fluid rounded">
                                </td>
                                <td class="product-name">
                                    <a href="#" class="text-decoration-none text-dark">Smart watches wood edition -
                                        Black</a>
                                </td>
                                <td class="product-price text-center">
                                    <span class="d-sm-none d-block">Price</span>
                                    <span>$599.00</span>
                                </td>
                                <td class="product-quantity text-center">
                                    <span class="d-sm-none d-block">Quantity</span>
                                    <div class="input-group input-group-sm justify-content-center"
                                        style="width: 100px; margin: 0 auto;">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="number" class="form-control text-center" value="1" min="1">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </td>
                                <td class="product-amount text-end fw-semibold text-black">
                                    <span class="d-sm-none d-block">Subtotal</span>
                                    
                                    $599.00
                                </td>
                            </tr>
                            <tr class="cart-product">
                                <td class="text-center  product-remove">
                                    <button class="btn btn-sm btn-link text-danger px-1">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <img src="{{asset('front/img/products/18.jpg')}}" width="40" alt="Product" class="img-fluid rounded">
                                </td>
                                <td class="product-name">
                                    <a href="#" class="text-decoration-none text-dark">Smart watches wood edition -
                                        Black</a>
                                </td>
                                <td class="product-price text-center">
                                    <span class="d-sm-none d-block">Price</span>
                                    <span>$599.00</span>
                                </td>
                                <td class="product-quantity text-center">
                                    <span class="d-sm-none d-block">Quantity</span>
                                    <div class="input-group input-group-sm justify-content-center"
                                        style="width: 100px; margin: 0 auto;">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="number" class="form-control text-center" value="1" min="1">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </td>
                                <td class="product-amount text-end fw-semibold text-black">
                                    <span class="d-sm-none d-block">Subtotal</span>
                                    
                                    $599.00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Coupon Row -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Coupon code">
                                <button class="btn bg-secondary text-white fw-semibold" type="button">Apply
                                    Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Order Summary -->
                <div class="col-lg-4 ">
                    <div class="bg-white p-4 rounded shadow-sm border">
                        <!-- Product Header -->
                        <h3 class="fs-5 fw-semibold">Cart Totals

                        </h3>
                        <!-- Subtotal -->
                        <div class="d-flex justify-content-between py-3">
                            <span class="fw-semibold">Subtotal</span>
                            <span class="fw-semibold text-secondary">$599.00</span>
                        </div>

                        <!-- Shipping -->
                        <div class="d-flex mb-2">
                            <div class="col-5 fw-semibold mb-1">Shipping</div>
                            <div class="col-7">
                                <div class=" form-check text-end">
                                    <label class="form-check-label" for="flatRate">
                                        Flat rate: <span class="text-secondary fw-semibold">$20.00</span>
                                    </label>
                                    <input class="form-check-input" type="radio" name="shipping" id="flatRate"
                                        checked="">

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











                        <button class="btn bg-secondary text-white w-100 fw-semibold py-2">
                            Proceed to checkout</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-layouts.frontend>