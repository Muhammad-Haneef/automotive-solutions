<x-layouts.frontend>



    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>

    <div class="main-page-banner pb-4 bg-light pt-4">
        <div class="filter-sidebar-overlay d-lg-none" id="filter-sidebarOverlay"></div>
        <div class="container position-relative">
            <!-- Overlay (only for mobile) -->

            <div class=" d-lg-none mb-3 ms-auto text-end" id="toggleSidebarBtn">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Menu / Menu_Alt_01">
                        <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#000" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg> Show Sidebar
            </div>
            <div class="row shadow ">
                <!-- Sidebar -->
                <div class="col-lg-3 bg-white accountSidebar py-4 px-0 offcanvas-sidebar d-lg-block bg-white"
                    id="responsiveSidebar">
                    <!-- Close Button (visible only on mobile) -->
                    <button class="btn bg-secondary text-white ms-auto d-lg-none mb-3" id="closeSidebarBtn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <h3 class="fw-bold text-secondary px-3">Account</h3>

                    <ul class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-link active" id="v-pills-overview-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-overview" type="button" role="tab" aria-controls="v-pills-overview"
                            aria-selected="true">Overview</li>
                        <li class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders"
                            aria-selected="false">Orders</li>
                        <li class="nav-link" id="v-pills-refunds-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-refunds" type="button" role="tab" aria-controls="v-pills-refunds"
                            aria-selected="false">Returns/refunds</li>
                        <li class="nav-link" id="v-pills-wishlist-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist"
                            aria-selected="false">Wishlist</li>
                        <li class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile Update</li>
                        <li class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Message Center</li>
                        <li class="nav-link">Logout</li>
                    </ul>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 content">

                    <div class="tab-content h-100" id="v-pills-tabContent">
                        <div class="tab-pane fade show active h-100" id="v-pills-overview" role="tabpanel"
                            aria-labelledby="v-pills-overview-tab" tabindex="0">
                            <div class="overview-header h-100 mb-4 shodow bg-white p-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 userImg">
                                        <img src="{{asset('front/img/user-icon.png')}}" alt="user-icon">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="fs-4 fw-bold">M Adnan</div>
                                    </div>
                                </div>
                                <div class="row pt-4 border-top mt-3">
                                    <div class="col-6 col-lg-3 col-lg-3">
                                        <a href="#" class="nav-link text-center">
                                            <span class="wishlist d-block py-3">
                                                <svg viewBox="0 0 1024 1024" width="34px" height="34px"
                                                    fill="currentColor" aria-hidden="false" focusable="false">
                                                    <path
                                                        d="M466.666667 892.586667a71.914667 71.914667 0 0 0 85.802666 2.56l4.565334-3.306667 21.162666-14.762667 24.661334-17.578666 15.018666-10.965334a1625.813333 1625.813333 0 0 0 128.917334-105.322666c68.693333-62.634667 122.88-124.949333 157.632-186.026667l1.984-3.157333 3.050666-5.482667 6.058667-12.010667 0.554667-0.746666 1.216-2.410667c4.949333-9.877333 9.152-19.306667 12.693333-28.586667l2.56-6.912c10.794667-29.013333 16.298667-55.978667 16.298667-81.749333l-0.085334-3.904-0.277333 2.901333c0.554667-5.12 0.853333-9.493333 0.853333-14.656C949.333333 244.8 829.418667 117.333333 681.088 117.333333l-5.162667 0.106667c-46.784 1.984-100.650667 30.826667-163.946666 84.864l-7.04-5.973333C442.282667 144.192 389.034667 117.333333 342.912 117.333333 194.517333 117.333333 74.666667 244.736 74.666667 400.469333l0.064 3.776 0.170666 3.669334 0.469334 5.546666-0.042667 2.602667c0 26.218667 5.504 54.122667 16.149333 83.178667l3.989334 10.474666 1.130666 2.645334c1.813333 4.565333 4.373333 10.368 7.125334 16.213333 32.64 69.013333 92.672 140.736 172.522666 213.76a1642.730667 1642.730667 0 0 0 109.482667 91.306667l23.232 17.536 23.210667 16.938666 27.690666 19.776 6.826667 4.693334zM681.088 181.333333c112.085333 0 204.245333 97.962667 204.245333 219.136 0 1.685333-0.064 3.242667-0.213333 5.013334l-0.618667 6.058666 0.341334 3.946667v0.64c0 17.578667-3.989333 37.162667-12.48 59.946667l-2.624 7.04c-1.813333 4.693333-3.84 9.386667-6.08 14.208l-3.050667 6.229333-1.045333 1.813333-3.114667 6.293334-3.498667 6.826666-1.642666 2.965334-1.664 2.688c-31.722667 55.68-81.834667 113.28-145.962667 171.776a1524.736 1524.736 0 0 1-105.514667 87.424l-24.064 17.941333-37.952 27.136-19.754666 13.845333a7.872 7.872 0 0 1-8.490667 1.088l-2.026667-1.28-34.56-24.64-28.309333-20.693333a1620.565333 1620.565333 0 0 1-123.562667-101.610667c-74.261333-67.925333-129.450667-133.888-157.866666-193.92l-3.242667-7.125333-3.541333-8.405333c-9.557333-24.042667-14.506667-45.226667-15.338667-64.042667l-0.085333-6.4 0.170666-3.349333-0.682666-6.784-0.170667-3.178667-0.021333-1.450667C138.666667 279.232 230.784 181.333333 342.912 181.333333c23.744 0 57.002667 15.104 98.368 46.208l11.477333 8.874667c7.808 6.186667 15.850667 12.906667 24.149334 20.16a53.333333 53.333333 0 0 0 70.186666 0l6.613334-5.738667C608.64 203.946667 652.010667 181.333333 681.088 181.333333z"
                                                        data-spm-anchor-id="a2g0o.new_account_index.0.i0.244d25b931A8X2">
                                                    </path>
                                                </svg>
                                            </span>
                                            Wish List
                                        </a>
                                    </div>
                                    <div class="col-6 col-lg-3 col-lg-3">
                                        <a href="#" class="nav-link text-center">
                                            <span class="viewed  d-block py-3">
                                                <svg viewBox="0 0 1024 1024" width="34px" height="34px"
                                                    fill="currentColor" aria-hidden="false" focusable="false">
                                                    <path
                                                        d="M512 106.666667v64C323.477333 170.666667 170.666667 323.477333 170.666667 512s152.810667 341.333333 341.333333 341.333333c186.261333 0 337.706667-149.205333 341.269333-334.613333L853.333333 512h64c0 223.850667-181.482667 405.333333-405.333333 405.333333S106.666667 735.850667 106.666667 512C106.666667 290.56 284.266667 110.570667 504.789333 106.730667L512 106.666667z m32.490667 192.661333v181.333333h181.333333v64h-213.333333a32 32 0 0 1-31.850667-28.906666l-0.149333-3.093334v-213.333333h64z m282.666666 81.322667l59.050667-24.64c6.485333 15.509333 11.968 31.424 16.469333 47.658666l3.2 12.224-62.208 15.146667a338.346667 338.346667 0 0 0-12.586666-40.533333l-3.925334-9.856 59.050667-24.64-59.050667 24.64z m-55.253333-89.92l48.704-41.514667c10.922667 12.8 21.013333 26.261333 30.272 40.32l6.762667 10.645333-54.549334 33.493334c-7.402667-12.096-15.573333-23.68-24.426666-34.752l-6.762667-8.192 48.704-41.514667-48.704 41.514667z m-80.533333-69.184l33.685333-54.421334c14.293333 8.853333 28.032 18.581333 41.130667 29.141334l9.685333 8.064-41.685333 48.554666a342.805333 342.805333 0 0 0-33.877334-25.6l-8.938666-5.76 33.685333-54.4-33.685333 54.4zM593.6 180.48l15.253333-62.165333c16.384 4.032 32.469333 9.066667 48.149334 15.061333l11.712 4.693333-24.768 59.029334a338.56 338.56 0 0 0-40.064-13.930667l-10.282667-2.688 15.253333-62.165333-15.253333 62.165333z">
                                                    </path>
                                                </svg>
                                            </span>
                                            Viewed
                                        </a>
                                    </div>
                                    <div class="col-6 col-lg-3 col-lg-3">
                                        <a href="#" class="nav-link text-center">
                                            <span class="coupons  d-block py-3">
                                                <svg viewBox="0 0 1024 1024" width="34px" height="34px"
                                                    fill="currentColor" aria-hidden="false" focusable="false">
                                                    <path
                                                        d="M96 256h832a32 32 0 0 1 31.850667 28.928L960 288v149.333333a32 32 0 0 1-28.928 31.850667l-6.250667 0.256a42.666667 42.666667 0 0 0 0 85.12l6.250667 0.256a32 32 0 0 1 28.8 28.778667L960 586.666667V768h-64v-154.218667a106.709333 106.709333 0 0 1-4.437333-202.069333l4.437333-1.493333V320H648.064a32 32 0 1 1-58.794667 0H128v90.218667a106.709333 106.709333 0 0 1 4.437333 202.069333L128 613.76V704h522.666667v64h-554.666667a32 32 0 0 1-31.850667-28.928L64 736v-149.333333a32 32 0 0 1 28.928-31.850667l6.250667-0.256a42.666667 42.666667 0 0 0 0-85.12l-6.250667-0.256a32 32 0 0 1-28.8-28.778667L64 437.333333v-149.333333a32 32 0 0 1 28.928-31.850667L96 256h832-832zM618.666667 608a32 32 0 1 1-0.021334 64.021333A32 32 0 0 1 618.666667 608z m0-102.442667a32 32 0 1 1-0.021334 64.021334A32 32 0 0 1 618.666667 505.557333z m0-102.442666a32 32 0 1 1-0.021334 64 32 32 0 0 1 0.021334-64z">
                                                    </path>
                                                </svg>
                                            </span>
                                            Coupons
                                        </a>
                                    </div>
                                    <div class="col-6 col-lg-3 col-lg-3">
                                        <a href="#" class="nav-link text-center">
                                            <span class="shopping  d-block py-3">
                                                <svg viewBox="0 0 1024 1024" width="34px" height="34px"
                                                    fill="currentColor" aria-hidden="false" focusable="false">
                                                    <path
                                                        d="M704 470.528c129.6 0 234.666667 105.066667 234.666667 234.666667s-105.066667 234.666667-234.666667 234.666666-234.666667-105.066667-234.666667-234.666666 105.066667-234.666667 234.666667-234.666667z m0 53.333333c-100.149333 0-181.333333 81.184-181.333333 181.333334 0 100.16 81.184 181.333333 181.333333 181.333333s181.333333-81.173333 181.333333-181.333333c0-100.149333-81.184-181.333333-181.333333-181.333334z m5.333333 37.333334a26.666667 26.666667 0 0 1 26.613334 24.917333l0.053333 1.749333 0.010667 20.373334a110.346667 110.346667 0 0 1 51.765333 32.042666 26.666667 26.666667 0 0 1-38.229333 37.152l-1.322667-1.376c-9.813333-10.848-23.786667-17.653333-39.317333-18.666666-17.226667-1.152-32.106667 3.04-40.170667 10.986666a9.28 9.28 0 0 0-2.048 4.938667l-0.042667 1.258667c0.010667 0.394667 0.085333 0.533333 0.202667 0.661333 1.792 2.016 4.618667 3.701333 8.714667 5.034667l2.848 0.810666 1.941333 0.469334 2.986667 0.576 2.272 0.32 4.224 0.437333 10.858666 0.896 8.746667 0.213333 10.389333 0.778667 2.485334 0.213333 4.693333 0.501334c6.24 0.725333 12.021333 1.781333 17.728 3.349333 14.293333 3.925333 26.645333 10.730667 36.288 21.578667 9.941333 11.189333 14.613333 25.642667 13.461333 41.141333-1.045333 14.709333-7.68 29.184-17.813333 39.146667-11.125333 10.944-25.12 18.410667-40.661333 22.56L736 833.205333a26.666667 26.666667 0 0 1-53.28 1.749334L682.666667 833.194667v-17.888a110.72 110.72 0 0 1-62.442667-34.517334 26.666667 26.666667 0 0 1 38.218667-37.152l1.333333 1.365334c9.813333 10.848 23.786667 17.653333 39.317333 18.677333 17.216 1.152 32.096-3.050667 40.170667-10.997333 0.853333-0.832 1.898667-3.125333 2.026667-4.992l0.042666-0.725334-0.021333-0.8a0.586667 0.586667 0 0 0-0.149333-0.32c-2.058667-2.314667-5.461333-4.192-10.56-5.589333l-1.994667-0.522667-1.92-0.426666-2.026667-0.362667-2.282666-0.32-4.224-0.437333-12.128-1.034667-7.488-0.074667-10.378667-0.789333-4.853333-0.448-2.325334-0.256a118.741333 118.741333 0 0 1-17.696-3.338667c-14.325333-3.925333-26.666667-10.741333-36.266666-21.546666-9.984-11.178667-14.634667-25.632-13.525334-41.184 1.045333-14.72 7.712-29.194667 17.813334-39.146667 13.621333-13.408 31.562667-21.589333 51.36-24.853333v-17.653334a26.666667 26.666667 0 0 1 26.666666-26.666666zM821.333333 170.666667c63.776 0 115.658667 50.88 117.290667 114.261333L938.666667 288v192a32 32 0 0 1-63.946667 1.877333L874.666667 480v-53.333333H149.333333v309.333333a53.333333 53.333333 0 0 0 51.018667 53.28L202.666667 789.333333h192a32 32 0 0 1 1.877333 63.946667L394.666667 853.333333H202.666667c-63.776 0-115.658667-50.88-117.290667-114.261333L85.333333 736V288c0-63.776 50.88-115.658667 114.261334-117.290667L202.666667 170.666667h618.666666zM384 606.805333a32 32 0 1 1 0 64H245.333333a32 32 0 0 1 0-64h138.666667zM821.333333 234.666667H202.666667a53.333333 53.333333 0 0 0-53.28 51.018666L149.333333 288v74.666667h725.333334v-74.666667a53.333333 53.333333 0 0 0-51.018667-53.28L821.333333 234.666667z">
                                                    </path>
                                                </svg>
                                            </span>
                                            Shopping credit
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade h-100" id="v-pills-orders" role="tabpanel"
                            aria-labelledby="v-pills-orders-tab" tabindex="0">
                            <div class="overview-header mb-4 shodow bg-white p-3 h-100">
                                <ul class="nav nav-underline" id="orderTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-secondary active" id="to-pay-tab" data-bs-toggle="tab"
                                            data-bs-target="#to-pay" type="button" role="tab" aria-controls="to-pay"
                                            aria-selected="true">
                                            To Pay <span class="badge bg-secondary">6</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-secondary" id="processed-tab" data-bs-toggle="tab"
                                            data-bs-target="#processed" type="button" role="tab"
                                            aria-controls="processed" aria-selected="false">
                                            Processed <span class="badge bg-secondary">4</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-secondary" id="to-ship-tab" data-bs-toggle="tab"
                                            data-bs-target="#to-ship" type="button" role="tab" aria-controls="to-ship"
                                            aria-selected="false">
                                            To Ship <span class="badge bg-secondary">0</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-secondary" id="shipped-tab" data-bs-toggle="tab"
                                            data-bs-target="#shipped" type="button" role="tab" aria-controls="shipped"
                                            aria-selected="false">
                                            Shipped <span class="badge bg-secondary">0</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-secondary" id="completed-tab" data-bs-toggle="tab"
                                            data-bs-target="#completed" type="button" role="tab" aria-controls="completed"
                                            aria-selected="false">
                                            Completed <span class="badge bg-secondary">0</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content p-2 border-0 h-100" id="orderTabsContent">
                                    <div class="tab-pane fade show active  h-100" id="to-pay" role="tabpanel"
                                        aria-labelledby="to-pay-tab">
                                        <div class="fs-5 fw-bold pb-3 mt-4 border-bottom mb-4">
                                            Waiting for Payment
                                        </div>
                                        <div class="OrdersList mt-4 pe-0 pe-lg-4">
                                            <!-- Order Card 1 -->
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/17.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/12.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade  h-100" id="processed" role="tabpanel"
                                        aria-labelledby="processed-tab">
                                        <div class="fs-5 fw-bold pb-3 mt-4 border-bottom mb-4">
                                            Waiting for Approvement
                                        </div>
                                        <div class="OrdersList mt-4 pe-0 pe-lg-4">
                                            <!-- Order Card 1 -->
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade  h-100" id="to-ship" role="tabpanel"
                                        aria-labelledby="to-ship-tab">
                                        <div class="fs-5 fw-bold pb-3 mt-4 border-bottom mb-4">
                                            Waiting for Shipment
                                        </div>
                                        <div class="OrdersList mt-4 pe-0 pe-lg-4">
                                            <!-- Order Card 1 -->
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade  h-100" id="shipped" role="tabpanel"
                                        aria-labelledby="shipped-tab">
                                        <div class="fs-5 fw-bold pb-3 mt-4 border-bottom mb-4">
                                            Order On the Way
                                        </div>
                                        <div class="OrdersList mt-4 pe-0 pe-lg-4">
                                            <!-- Order Card 1 -->
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/18.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Order Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade  h-100" id="completed" role="tabpanel"
                                        aria-labelledby="completed-tab">
                                        <div class="fs-5 fw-bold pb-3 mt-4 border-bottom mb-4">
                                            Order Completed
                                        </div>
                                        <div class="OrdersList mt-4 pe-0 pe-lg-4">
                                            <!-- Order Card 1 -->
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/11.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-card mb-2 border-bottom">
                                                <div class="row mt-3 pb-2 justify-content-between border-top border-bottom bg-light py-2 px-3">
                                                    <div class="col-lg-9 order-date d-block">
                                                        Order ID: 1111969554428721 <a href="">Copy</a> <br>
                                                        <small>Order date: Mar 26, 2025</small>

                                                    </div>
                                                    <div class="col-lg-3 order-view text-end pt-2">
                                                        Order details
                                                    </div>
                                                </div>
                                                <div class="row py-3 mx-0">
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="d-flex">
                                                            <img src="{{asset('front/img/products/19.jpg')}}" class="order-image me-3"
                                                                alt="Product" />
                                                            <div>
                                                                <div class="order-title">Laptop 15.6 Inch IPS Screen
                                                                    16GB RAM Intel 11th N5095 Business Netbook ...</div>
                                                                <div class="text-muted small">
                                                                    Qty: 1<br>
                                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                                </div>
                                                                <div class="fw-bold mt-1">Rs 5002.75</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 text-center mt-2 mt-lg-0 px-0">
                                                        <button
                                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">add
                                                            to cart</button>
                                                        <button
                                                            class="btn btn-secondary w-100  rounded-0 px-2">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade bg-white p-4 h-100 overflow-hidden" id="v-pills-refunds"
                            role="tabpanel" aria-labelledby="v-pills-refunds-tab" tabindex="0">
                            <div class="fs-5 fw-bold pb-3 border-bottom mb-4">
                                Returns/Refunds
                            </div>
                            <div class="refundbox mt-4">
                                <!-- Tabs -->
                                <div class="mb-3">
                                    <a href="#" class="text-secondary me-2 tab-link active">In progress <span
                                            class="ms-1"> (0)</span></span></a>
                                    <a href="#" class="text-secondary tab-link">Awaiting returns <span class="ms-1">
                                            (0)</a>
                                </div>

                                <!-- Filter Form -->
                                <form class="row g-2 align-items-center">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Order number">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Store name">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select rounded-0">
                                            <option selected>Complete</option>
                                            <option>Pending</option>
                                            <option>Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <button type="submit" class="btn btn-secondary w-100 rounded-0">Search</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Header Row -->
                            <div class="row fw-bold mt-3 mb-2 pb-2 border-bottom">
                                <div class="col-md-8">Order information</div>
                            </div>
                            <div class="OrdersList mt-4  pe-4">

                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom">
                                    <div class="fw-semibold py-3">Shop1104194675 Store <span
                                            class="text-muted">&rsaquo;</span></div>
                                    <div class="col-md-8 col-lg-6">

                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>
                                                <div class="text-muted small">
                                                    Qty: 1<br>
                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                    Order ID: 1108982568908721
                                                </div>
                                                <div class="fw-bold mt-1">Rs 2000.74</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 my-3 my-md-2 my-lg-0">
                                        <div><strong>Status: Complete</strong></div>
                                        <div class="text-muted small mb-2">Submission time: 2024-12-05 23:20:19</div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">Refund
                                            details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Contact Seller</button>
                                    </div>
                                </div>
                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom">
                                    <div class="fw-semibold py-3">Shop1104194675 Store <span
                                            class="text-muted">&rsaquo;</span></div>
                                    <div class="col-md-8 col-lg-6">

                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/19.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>
                                                <div class="text-muted small">
                                                    Qty: 1<br>
                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                    Order ID: 1108982568908721
                                                </div>
                                                <div class="fw-bold mt-1">Rs 2000.74</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 my-3 my-md-2 my-lg-0">
                                        <div><strong>Status: Complete</strong></div>
                                        <div class="text-muted small mb-2">Submission time: 2024-12-05 23:20:19</div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">Refund
                                            details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Contact Seller</button>
                                    </div>
                                </div>
                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom">
                                    <div class="fw-semibold py-3">Shop1104194675 Store <span
                                            class="text-muted">&rsaquo;</span></div>
                                    <div class="col-md-8 col-lg-6">

                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/15.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>
                                                <div class="text-muted small">
                                                    Qty: 1<br>
                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                    Order ID: 1108982568908721
                                                </div>
                                                <div class="fw-bold mt-1">Rs 2000.74</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 my-3 my-md-2 my-lg-0">
                                        <div><strong>Status: Complete</strong></div>
                                        <div class="text-muted small mb-2">Submission time: 2024-12-05 23:20:19</div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">Refund
                                            details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Contact Seller</button>
                                    </div>
                                </div>
                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom">
                                    <div class="fw-semibold py-3">Shop1104194675 Store <span
                                            class="text-muted">&rsaquo;</span></div>
                                    <div class="col-md-8 col-lg-6">

                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/19.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>
                                                <div class="text-muted small">
                                                    Qty: 1<br>
                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                    Order ID: 1108982568908721
                                                </div>
                                                <div class="fw-bold mt-1">Rs 2000.74</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 my-3 my-md-2 my-lg-0">
                                        <div><strong>Status: Complete</strong></div>
                                        <div class="text-muted small mb-2">Submission time: 2024-12-05 23:20:19</div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">Refund
                                            details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Contact Seller</button>
                                    </div>
                                </div>
                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom">
                                    <div class="fw-semibold py-3">Shop1104194675 Store <span
                                            class="text-muted">&rsaquo;</span></div>
                                    <div class="col-md-8 col-lg-6">

                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/19.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>
                                                <div class="text-muted small">
                                                    Qty: 1<br>
                                                    16GB RAM 2TB SSD, Laptop keyboard film<br>
                                                    Order ID: 1108982568908721
                                                </div>
                                                <div class="fw-bold mt-1">Rs 2000.74</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 my-3 my-md-2 my-lg-0">
                                        <div><strong>Status: Complete</strong></div>
                                        <div class="text-muted small mb-2">Submission time: 2024-12-05 23:20:19</div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">Refund
                                            details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Contact Seller</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade bg-white p-4 h-100 overflow-hidden" id="v-pills-wishlist"
                            role="tabpanel" aria-labelledby="v-pills-wishlist-tab" tabindex="0">
                            <div class="fs-5 fw-bold pb-3 border-bottom mb-4">
                                Wishlist
                            </div>
                            <div class="refundbox mt-4">
                                <!-- Tabs -->
                                <div class="mb-3">
                                    <a href="#" class="text-secondary me-2 tab-link active">my list<span
                                            class="ms-1"> (8)</span></span></a>
                                </div>
                            </div>

                            <div class="OrdersList mt-4  pe-4">
                                <!-- Order Card 1 -->
                                <div class="order-card row mb-2 border-bottom pb-2">
                                    <div class="col-md-8 col-lg-10">
                                        <div class="d-flex">
                                            <img src="{{asset('front/img/products/25.jpg')}}" class="order-image me-3" alt="Product" />
                                            <div>
                                                <div class="order-title">Laptop 15.6 Inch IPS Screen 16GB RAM Intel 11th
                                                    N5095 Business Netbook ...</div>


                                                <div class="d-flex align-items-center fs-6 text-secondary fw-bold mt-3 mb-2">Rs 2000.74
                                                    <div class="product-rating d-flex border-start ms-3 ps-3 ">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class=" text-secondary fw-bold mb-1"><del class="text-light">Rs 300.00</del> <span class="small  fw-bold text-primary">-13% OFF <i class="fa fa-arrow-down pl-1" aria-hidden="true"></i></span> </p>
                                                <div class="text-muted small">
                                                    Free shipping over PKR 3,180
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2 text-end px-0">
                                        <button
                                            class="btn bg-primary text-white btn-refund mb-2  w-100 rounded-0 px-2">View
                                            Details</button>
                                        <button class="btn btn-secondary w-100  rounded-0 px-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade bg-white p-4 h-100" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="fs-5 fw-bold pb-3 border-bottom mb-4">
                                Profile Update
                            </div>
                            <div class="row box py-3 text-center align-items-center">
                                <div class="col-lg-3">
                                    <!-- Profile Image Preview -->
                                    <img id="profilePreview" src="{{asset('front/img/user-icon.png')}}" alt="Profile" class="img-fluid profile-img mb-3">
                                </div>
                                <div class="col-lg-3">
                                    <!-- File Input -->
                                    <div class="mb-1">
                                        <label for="profileImage" class="form-label btn bg-primary text-white rounded-0 w-100">
                                            Change Image
                                            <input type="file" id="profileImage" class="form-control  d-none" accept="image/*">
                                        </label>
                                    </div>
                                    <button class="btn btn-secondary w-100  rounded-0 px-2">Remove Image</button>
                                </div>
                            </div>


                            <form>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control rounded-0" id="first-name"
                                            value="John Doe">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="last-name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control rounded-0" id="last-name"
                                            value="John Doe">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control rounded-0" id="email"
                                            value="john.doe@example.com">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control rounded-0" id="phone"
                                            value="+123 456 7890">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control rounded-0" id="address"
                                            rows="3">123 Main Street, City, Country</textarea>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-secondary rounded-0 px-4">Save Changes</button>
                            </form>


                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="chat-app">
                                <!-- Sidebar -->
                                <div class="chat-sidebar bg-white h-100">
                                    <div class="chat-header bg-white d-flex align-items-center">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" style="transform: none;">
                                            <path fill="#191919" fill-rule="evenodd"
                                                d="M9.895 10.234h-3.71v1.5h2.11c.884 0 1.6-.671 1.6-1.5"
                                                clip-rule="evenodd" data-spm-anchor-id="0.0.0.i22.311b3db55ZtdND">
                                            </path>
                                            <mask id="a" width="3" height="3" x="11" y="10" maskUnits="userSpaceOnUse"
                                                style="mask-type: luminance;">
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M13.387 11.093a1 1 0 1 1-2 0 1 1 0 1 1 2 0Z" clip-rule="evenodd">
                                                </path>
                                            </mask>
                                            <g mask="url(#a)">
                                                <path fill="#191919" fill-rule="evenodd" d="M13.887 12.593h-3v-3h3v3Z"
                                                    clip-rule="evenodd"></path>
                                            </g>
                                            <mask id="b" width="3" height="3" x="14" y="10" maskUnits="userSpaceOnUse"
                                                style="mask-type: luminance;">
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M16.78 11.093a1 1 0 1 1-2 0 1 1 0 1 1 2 0Z" clip-rule="evenodd">
                                                </path>
                                            </mask>
                                            <g mask="url(#b)">
                                                <path fill="#191919" fill-rule="evenodd" d="M17.28 12.593h-3v-3h3v3Z"
                                                    clip-rule="evenodd"></path>
                                            </g>
                                            <path stroke="#191919" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 5.06a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 .75.75v11.458a.75.75 0 0 1-.75.75h-5.417L9.167 20.31v-3.043H3.75a.75.75 0 0 1-.75-.75V5.06Z">
                                            </path>
                                        </svg>
                                        Messages
                                    </div>
                                    <ul class="chat-list h-100">
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Hier ist Coupon...</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/9.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/14.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Secure your...</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Yes</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/14.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Secure your...</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/14.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Secure your...</div>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/14.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">Secure your...</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <img src="{{asset('front/img/products/17.jpg')}}" alt="Logo" />
                                            <div class="w-100">
                                                <div class="chat-name d-flex justify-content-between w-100">Global Seals
                                                    Store <small class="text-muted fw-normal">07/28 17:02</small> </div>
                                                <div class="chat-msg">No</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Main Chat Area -->
                                <div class="chat-main">
                                    <div class="chat-header  bg-white d-flex align-items-center">Global Seals Store
                                    </div>

                                    <div class="chat-body">
                                        <div class="message received  d-flex">
                                            <div class="sallerimgchatting ms-2"><img src="{{asset('front/img/products/17.jpg')}}"
                                                    alt="Product " class="me-2 p-1 border rounded-circle"></div>
                                            <div class="bubble ">Dear. Welcome to HQPA Global Seals Official Store</div>
                                        </div>

                                        <div class="message received  d-flex">
                                            <div class="sallerimgchatting ms-2"><img src="{{asset('front/img/products/17.jpg')}}"
                                                    alt="Product" class="me-2 p-1  border rounded-circle"></div>
                                            <div class="product-card">
                                                <img src="{{asset('front/img/products/9.jpg')}}" alt="Product" />
                                                <div class="info">
                                                    <div class="title">KYB KAYABA KFP51 GEAR PUMP KIT/OVERHAUL KIT/R...
                                                    </div>
                                                    <div class="price">Rs 1005.00</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="message sent d-flex">
                                            <div class="bubble">hi</div>
                                            <div class="userimgchatting ms-2"><img src="{{asset('front/img/user-icon.png')}}"
                                                    alt="user-icon" class=" p-1  border rounded-circle"></div>
                                        </div>

                                        <div class="message sent  d-flex">
                                            <div class="bubble">is it original kyaba pump seal kit. ?</div>
                                            <div class="userimgchatting ms-2"><img src="{{asset('front/img/user-icon.png')}}"
                                                    alt="user-icon" class=" p-1  border rounded-circle"></div>
                                        </div>
                                    </div>



                                    <div class="chat-footer">
                                        <div class="input-wrapper">
                                            <input type="text" placeholder="Write your questions here">
                                            <button class="send-icon">
                                                <!-- SVG send icon -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5 14a.5.5 0 0 1-.948-.09l-1.408-4.225-4.225-1.408a.5.5 0 0 1-.09-.948l14-5a.5.5 0 0 1 .561.13zM6.432 8.568l1.082.361.361 1.082L13.47 2.53 6.432 8.568z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>



</x-layouts.frontend>