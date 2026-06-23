@php
$bgcolorsClass=['bg-green', 'bg-blue', 'bg-yellow', 'bg-pink'];
@endphp
<footer class="{{$bgcolorsClass[array_rand($bgcolorsClass)]}} pt-5">
    <!-- Footer Top Start -->
    <div class="footer-top py-3">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h6 class="font-weight-bold mb-3">Shop by Category</h6>
                    <ul class="nav flex gap-3 flex-wrap">
                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <a href="{{route('category',[$category['slug']])}}" class="nav-link text-secondary px-0">
                                {{ $category['title'] }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="sperator"></div>
            </div>
            <div class="row g-4">

                {{-- About Us - 3 --}}
                <div class="col-12 col-md-3">
                    <h6 class="font-weight-bold mb-3">About Us</h6>
                    <p class="text-secondary">Welcome to Venta.pk – your trusted destination for original, branded products at unbeatable prices.
                        We specialize in offering a wide range of high-quality items across various categories, ensuring that you get the best....
                    </p>
                    <a href="{{ route('about') }}">Read More</a>
                </div>

                {{-- Middle 6 → 3 equal inner columns --}}
                @php
                $footerMenus = [
                        'Customer Service' => [
                            ['Contact Us', route('contact')],
                            ['Returns', route('return-policy')],
                            ['Order History', route('profile')],
                            ['Wish List', route('profile')],
                            ['Site Map', route('site-map')],
                            ['Gift wrap', route('gift-wrap-policy')],
                        ],
                        'Extras' => [
                            ['Brands', route('brands')],
                            ['Gift Certificates', route('gift-certificates')],
                            ['Affiliate', route('affiliate')],
                            ['Specials', route('specials')],
                            ['Site Map', route('site-map')],
                        ],
                        'My Account' => [
                            ['My Account', route('profile')],
                            ['Order History', route('profile')],
                            ['Wish List', route('profile')],
                            ['Returns', route('return-policy')],
                            ['Affiliate', route('affiliate-policy')],
                        ],
                ];
                @endphp

                <div class="col-12 col-md-6">
                    <div class="row g-4">
                        @foreach($footerMenus as $title => $links)
                        <div class="col-4">
                            <h6 class="font-weight-bold mb-3">{{ $title }}</h6>
                            <ul class="nav flex-column">
                                @foreach($links as [$label, $url])
                                <li class="nav-item">
                                    <a href="{{ $url }}" class="nav-link text-secondary px-0 py-1">{{ $label }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Contact & Payment - 3 --}}
                <div class="col-12 col-md-3">
                    <h6 class="font-weight-bold mb-3">Contact Us</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item py-2">
                            <i class="lnr lnr-map-marker me-2"></i>
                            169-C, Technohub, Dubai Silicon Oasis.
                        </li>
                        <li class="nav-item py-2">
                            <i class="lnr lnr-envelope me-2"></i>
                            <a href="mailto:support@webkeysolutions.com" class="text-secondary">
                                Support@webkeysolutions.com
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <i class="lnr lnr-phone-handset me-2"></i>
                            (+800) 123 456 789
                        </li>
                    </ul>
                    <div class="payment mt-3 border-top pt-3">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('front/img/payment/1.png') }}" alt="payment methods">
                        </a>
                    </div>
                </div>

            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Top End -->
    <!-- Footer Middle Start -->

    <div class="container footer-middle text-center social-media">
        <div class="d-flex justify-content-center py-3">
            <ul class=" nav">
                <li class="nav-item"><a href="https://www.facebook.com/"
                        class="nav-link text-secondary"><i
                            class="fa-brands fa-facebook-f fa-2x"></i></a></li>
                <li class="nav-item"><a href="https://twitter.com/"
                        class="nav-link text-secondary"><i
                            class="fa-brands fa-x-twitter fa-2x"></i></a></li>
                <li class="nav-item"><a href="https://instagram.com/"
                        class="nav-link text-secondary"><i
                            class="fa-brands fa-instagram fa-2x"></i></a></li>
                <li class="nav-item"><a href="https://tiktok.com/"
                        class="nav-link text-secondary"><i
                            class="fa-brands fa-tiktok fa-2x"></i></a></li>
                <li class="nav-item"><a href="#" class="px-3"><img
                            src="{{asset('front/img/icon/social-img1.png')}}"
                            alt="google play"
                            class="img-fluid"></a></li>
                <li class="nav-item"><a href="#" class="px-3"><img
                            src="{{asset('front/img/icon/social-img2.png')}}"
                            alt="app store" class="img-fluid"></a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->

    <!-- Footer Middle End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom pb-3">
        <div class="container">

            <div class="copyright-text text-center pb-3">
                <p class="text-secondary mb-0">Copyright <i class="fa fa-at"
                        aria-hidden="true"></i> 2018 <a target="_blank"
                        href="#" class="text-secondary">Truemart</a> All
                    Rights Reserved.</p>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Bottom End -->
</footer>
<x-layouts.partials.mobile-footer-navigation />