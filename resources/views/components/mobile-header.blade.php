
    <!-- MAIN Mobile HEADER -->
    <div class=" bg-light py-2 d-block d-sm-none">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-2 col-md-2 mobileDrawer">
                    <a class="nav-link fw-semibold" data-bs-toggle="offcanvas" data-bs-target="#mobileDrawer">
                        <div
                            class="rounded-circle site-action-icon justify-content-center align-items-center d-flex justify-content-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4 6H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4 18H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- LOGO -->
                <div class="col-8 col-md-8 siteLogo">
                    <a href="#" class="mx-auto">
                        <img src="{{asset('front/images/logo.png')}}" alt="Automotive Solutions" class="img-fluid logo-img mx-auto d-block">
                    </a>
                </div>

                <!-- ICONS -->
                <div class="col-2 col-md-2 dropdown">
                    <div class="dropdown d-inline-block ">

                        <a class="text-dark position-relative" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <div class="rounded-circle site-action-icon align-items-center d-flex justify-content-center">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16666 18.8334C7.6269 18.8334 7.99999 18.4603 7.99999 18C7.99999 17.5398 7.6269 17.1667 7.16666 17.1667C6.70642 17.1667 6.33333 17.5398 6.33333 18C6.33333 18.4603 6.70642 18.8334 7.16666 18.8334Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M16.3333 18.8334C16.7936 18.8334 17.1667 18.4603 17.1667 18C17.1667 17.5398 16.7936 17.1667 16.3333 17.1667C15.8731 17.1667 15.5 17.5398 15.5 18C15.5 18.4603 15.8731 18.8334 16.3333 18.8334Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M2.20833 2.20831H3.875L6.09166 12.8751C6.17298 13.2542 6.38389 13.593 6.68809 13.8333C6.99229 14.0736 7.37075 14.2004 7.75833 14.1918H15.9083C16.2876 14.1912 16.6554 14.0612 16.9509 13.8233C17.2463 13.5854 17.4518 13.2539 17.5333 12.8834L19.25 5.91666H4.66921"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger">
                                    0
                                </span>
                            </div>

                        </a>

                        <!-- Dropdown -->
                        <div class="cart dropdown-menu dropdown-menu-end py-4 px-3">

                            <!-- Empty Cart -->
                            <div class="text-center py-2">

                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="70" height="70"
                                    viewBox="0 0 231.523 231.523" fill="currentColor">
                                    <path
                                        d="M107.415 145.798a7.502 7.502 0 0 0 8.231 6.69 7.5 7.5 0 0 0 6.689-8.231l-3.459-33.468a7.5 7.5 0 0 0-14.92 1.542l3.459 33.467zM154.351 152.488a7.501 7.501 0 0 0 8.231-6.69l3.458-33.468a7.499 7.499 0 0 0-6.689-8.231c-4.123-.421-7.806 2.57-8.232 6.689l-3.458 33.468a7.5 7.5 0 0 0 6.69 8.232zM96.278 185.088c-12.801 0-23.215 10.414-23.215 23.215 0 12.804 10.414 23.221 23.215 23.221s23.216-10.417 23.216-23.221c0-12.801-10.415-23.215-23.216-23.215zm0 31.435c-4.53 0-8.215-3.688-8.215-8.221 0-4.53 3.685-8.215 8.215-8.215 4.53 0 8.216 3.685 8.216 8.215 0 4.533-3.686 8.221-8.216 8.221zM173.719 185.088c-12.801 0-23.216 10.414-23.216 23.215 0 12.804 10.414 23.221 23.216 23.221 12.802 0 23.218-10.417 23.218-23.221 0-12.801-10.416-23.215-23.218-23.215zm0 31.435c-4.53 0-8.216-3.688-8.216-8.221 0-4.53 3.686-8.215 8.216-8.215 4.531 0 8.218 3.685 8.218 8.215 0 4.533-3.686 8.221-8.218 8.221z">
                                    </path>
                                    <path
                                        d="M218.58 79.08a7.5 7.5 0 0 0-5.933-2.913H63.152l-6.278-24.141a7.5 7.5 0 0 0-7.259-5.612H18.876a7.5 7.5 0 0 0 0 15h24.94l6.227 23.946c.031.134.066.267.104.398l23.157 89.046a7.5 7.5 0 0 0 7.259 5.612h108.874a7.5 7.5 0 0 0 7.259-5.612l23.21-89.25a7.502 7.502 0 0 0-1.326-6.474zm-34.942 86.338H86.362l-19.309-74.25h135.895l-19.31 74.25zM105.556 52.851a7.478 7.478 0 0 0 5.302 2.195 7.5 7.5 0 0 0 5.302-12.805L92.573 18.665a7.501 7.501 0 0 0-10.605 10.609l23.588 23.577zM159.174 55.045c1.92 0 3.841-.733 5.306-2.199l23.552-23.573a7.5 7.5 0 0 0-.005-10.606 7.5 7.5 0 0 0-10.606.005l-23.552 23.573a7.5 7.5 0 0 0 5.305 12.8zM135.006 48.311h.002a7.5 7.5 0 0 0 7.5-7.498l.008-33.311A7.5 7.5 0 0 0 135.018 0h-.001a7.5 7.5 0 0 0-7.501 7.498l-.008 33.311a7.5 7.5 0 0 0 7.498 7.502z">
                                    </path>
                                </svg>
                                <h6 class="mt-3">No products in the cart</h6>
                                <p class="small text-muted">
                                    You don’t have any products in your cart yet.
                                </p>

                            </div>

                            <hr>

                            <!-- Free Shipping Progress -->
                            <div class="mt-2 text-center">
                                <p class="small mb-2">
                                    Add <strong>$500.00</strong> to get free shipping!
                                </p>

                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 0%"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
