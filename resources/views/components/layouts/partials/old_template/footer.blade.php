<footer class="off-white-bg2 pt-95 bdr-top pt-sm-55">
    <!-- Footer Top Start -->
    <div class="footer-top py-5">
        <div class="container">
            <x-news-letter-signup />
            <div class="row">

                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="font-weight-bold mb-3">Shop by Category</h6>
                    <ul class="nav flex-column">
                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <a href="{{route('category',[$category['slug']])}}" class="nav-link text-secondary px-0">
                                {{ $category['title'] }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="font-weight-bold mb-3">Information</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-secondary px-0">About Us</a></li>
                        <li class="nav-item"><a href="{{route('delivery-information')}}" class="nav-link text-secondary px-0">Delivery Information</a></li>
                        <li class="nav-item"><a href="{{route('privacy-policy')}}" class="nav-link text-secondary px-0">Privacy Policy</a></li>
                        <li class="nav-item"><a href="{{route('terms-conditions')}}" class="nav-link text-secondary px-0">Terms &amp; Conditions</a></li>
                        <li class="nav-item"><a href="{{route('web-faqs')}}" class="nav-link text-secondary px-0">FAQs</a></li>
                        <li class="nav-item"><a href="{{route('return-policy')}}" class="nav-link text-secondary px-0">Return Policy</a></li>
                    </ul>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="font-weight-bold mb-3">Extras</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{route('brands')}}" class="nav-link text-secondary px-0">Brands</a></li>
                        <li class="nav-item"><a href="{{route('gifts')}}" class="nav-link text-secondary px-0">Gift Certificates</a></li>
                        <li class="nav-item"><a href="{{route('affiliate')}}" class="nav-link text-secondary px-0">Affiliate</a></li>
                        <li class="nav-item"><a href="{{route('specials')}}" class="nav-link text-secondary px-0">Specials</a></li>
                    </ul>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class=" mb-3">My Account</h6>
                    <div class="footer-content">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="{{ auth()->check() ? route('my-orders') : route('user-login') }}" class="nav-link text-secondary px-0">My Account</a></li>
                            <li class="nav-item"><a href="{{ auth()->check() ? route('wishlist') : route('user-login') }}" class="nav-link text-secondary px-0">Wish List</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h6 class="font-weight-bold mb-3">My Account</h6>
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item py-2"><i class="lnr lnr-map-marker"></i> <a href="https://www.venta.pk" class="text-secondary">https://www.venta.pk</a></li>
                            <li class="nav-item py-2"><i class="lnr lnr-envelope"></i> <a href="mailto:sale@venta.com" class="text-secondary"> sale@venta.com </a></li>
                            <li class="nav-item py-2">
                                <i class="lnr lnr-phone-handset"></i> <a href="tel:+923213345991" class="text-secondary">(+92)  321 334 5991</a>
                            </li>
                        </ul>
                        <div class="payment mt-3 border-top pt-3">
                            <a href="#"><img class="img" src="{{asset('front/img/payment/1.png')}}" alt="payment-image"></a>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Top End -->
    <!-- Footer Middle Start -->
    <div class="footer-middle text-center">
        <div class="container">
            <div class="d-flex justify-content-center py-3">
                <ul class=" nav">
                    <li class="nav-item"><a href="https://www.facebook.com/venta.pk" class="nav-link text-secondary"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li class="nav-item"><a href="https://twitter.com/venta.pk" class="nav-link text-secondary"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li class="nav-item"><a href="https://plus.google.com/venta.pk" class="nav-link text-secondary"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    <li class="nav-item"><a href="https://www.linkedin.com/venta.pk" class="nav-link text-secondary"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li class="nav-item"><a href="#" class="px-3"><img src="{{asset('front/img/icon/social-img1.png')}}" alt="google play"></a></li>
                    <li class="nav-item"><a href="#" class="px-3"><img src="{{asset('front/img/icon/social-img2.png')}}" alt="app store"></a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Middle End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom pb-30">
        <div class="container">

            <div class="copyright-text text-center">
                <p class="text-secondary">Copyright <i class="fa fa-at" aria-hidden="true"></i> 2025 <a target="_blank" href="#" class="text-secondary">Truemart</a> All Rights Reserved.</p>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Bottom End -->
</footer>