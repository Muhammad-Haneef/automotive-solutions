        <div class="dropdown user">
            <div class="dropdown-toggle" id="user">
                <div class="d-flex icon_text_wraper align-items-center gap-2">
                    <div class="rounded-circle site-action-icon align-items-center d-flex justify-content-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                            <path
                                d="M2.4 22C2.17909 22 1.99892 21.8208 2.01032 21.6001C2.12334 19.4117 3.16095 17.3333 4.92893 15.7775C6.8043 14.1271 9.34783 13.2 12 13.2C14.6522 13.2 17.1957 14.1271 19.0711 15.7775C20.8391 17.3333 21.8767 19.4117 21.9897 21.6001C22.0011 21.8208 21.8209 22 21.6 22L12 22L2.4 22Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="">
                        <small class="d-block xsmall">Sign In</small>
                        <strong> Account </strong>
                    </div>
                </div>
            </div>

            <div class="dropdown-menu  p-3 shadow border-0">
                <ul class="list-unstyled my-2 mb-3">

                    <!-- ITEM 1 -->
                    <li class="mb-3 border-bottom pb-3">
                        <div class="d-flex align-items-start gap-3">

                            <!-- ICON -->
                            <div class="flex-shrink-0">
                                <img src="{{asset('front/images/login-svg.svg')}}" width="24" height="24" alt="">
                            </div>

                            <!-- CONTENT -->
                            <div class="safe">
                                <div class="label mb-1 fw-semibold">Safe payment options</div>
                                <p class="mb-0 ">
                                    We only work with the most secure payment systems.
                                </p>
                            </div>

                        </div>
                    </li>

                    <!-- ITEM 2 -->
                    <li>
                        <div class="d-flex align-items-start gap-3">

                            <div class="flex-shrink-0">
                                <img src="{{asset('front/images/login-svg2.svg')}}" width="24" height="24" alt="">
                            </div>

                            <div class="return">
                                <div class="label mb-1 fw-semibold">Product return within 30 days</div>
                                <p class="mb-0 ">
                                    We do our very best to keep our customers happy.
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>
                <a href="/my-account/" class="btn btn-primary w-100">
                    Log In
                </a>

            </div>
        </div>