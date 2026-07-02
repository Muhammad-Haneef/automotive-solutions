<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>

        <div class="logo-wrapper">
            <a href="{{ url('/') }}">
                <img class="img-fluid for-light w-75" src="{{ asset('assets/images/logo.png') }}" alt="">
                <img class="img-fluid for-dark w-75" src="{{ asset('assets/images/logo_dark.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
            </div>
        </div>

        <div class="logo-icon-wrapper">
            <a href="{{ url('/') }}">
                <img class="img-fluid" style="width: 30px;" src="{{ asset('assets/images/logo-icon.png') }}"
                    alt="">
            </a>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">

                    <li class="back-btn">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo-icon.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Dashboard</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <!-- SALES & MARKETING - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Sales & Marketing</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.subscribers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Subscribers</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    <!-- SALES & MARKETING - ending -->



                    <!-- PRODUCT CATALOG - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Products Catalog</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href=" {{ route('admin.products') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Products</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.categories') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Categories</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.brands') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Brands</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.tags') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Tags</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href=" {{ route('admin.suppliers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Suppliers</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href=" {{ route('admin.warehouses') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>warehouses</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <span class="lan-6">Attributes</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.attributes') }}">Attributes</a></li>
                            <li><a href="{{ route('admin.attribute-values') }}">Attribute Values</a></li>
                        </ul>
                    </li>
                    <!-- PRODUCT CATALOG - ending -->

                    <!-- CMS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">CMS</h6>
                        </div>
                    </li>
                    <?php /*
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.vendors') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>vendors</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    */ ?>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.pages') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Pages</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.banners') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Banners</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">FAQ</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.faqs') }}">FAQ</a></li>
                            <li><a href="{{ route('admin.faq-categories') }}">FAQ Category</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Blog</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.blogs') }}">Blog</a></li>
                            <li><a href="{{ route('admin.blog-categories') }}">Blog Category</a></li>
                        </ul>
                    </li>
                    <!-- CMS - ending -->



                    <!-- CUSTOMERS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Customers</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.customer-groups') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Customer Groups</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.customers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Customers</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    <!-- CUSTOMERS - ending -->



                    <!-- SEO - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">SEO</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.generate-sitemap') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Site Map</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <!-- SEO - ending -->



                    <!-- HELP DESK & SUPPORT - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Help Desk & Support</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.callback-requests') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Callback Requests</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.inquiries') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg>
                            <span>Inquiries</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.support-types') }}">Support Types</a></li>
                            <li><a href="{{ route('admin.support-statuses') }}">Support Status</a></li>
                        </ul>
                    </li>

                    <!-- HELP DESK & SUPPORT - ending -->

                    <!-- SETTINGS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Settings</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">For Store</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.address-types') }}">Address Types</a></li>
                            <li><a href="{{ route('admin.countries') }}">Countries</a></li>
                            <li><a href="{{ route('admin.cities') }}">Cities</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">For Orders</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.order-statuses') }}">Status Management</a></li>
                            <li><a href="{{ route('admin.order-sources') }}">Source Management</a></li>
                            <li><a href="{{ route('admin.shippers') }}">Shipper Management</a></li>
                        </ul>
                    </li>
                    <!-- SETTINGS - ending -->



                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->