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
                <img class="img-fluid" style="width: 30px;" src="{{ asset('assets/images/logo-icon.png') }}" alt="">
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
                        <a class="sidebar-link sidebar-title link-nav {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
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
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Orders</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.orders') }}">View All</a></li>
                            <?php
                            /*
                            <li><a href="{{ route('admin.create-order') }}">Add New Order</a></li>
                            <li><a href="{{ route('admin.order-gift-wraps') }}">Gift Wrap Orders</a></li>
                            */
                            ?>

                        </ul>
                    </li>

                    <?php /*                    
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Marketing</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.coupons') }}">Coupons</a></li>
                            <li><a href="{{ route('admin.offers') }}">Offers</a></li>
                            <li><a href="{{ route('admin.loyalty-settings') }}">Loyalty Programs</a></li>
                            <li><a href="{{ route('admin.referrals') }}">Referrals</a></li>
                            <li><a href="{{ route('admin.gift-wraps') }}">Gift Wraps</a></li>
                            <li><a href="{{ route('admin.vouchers') }}">Vouchers</a></li>
                            <li><a href="{{ route('admin.popups') }}">Popups</a></li>
                            <li><a href="{{ route('admin.sms') }}">Send SMS</a></li>
                            <li><a href="{{ route('admin.notifications') }}">Notifications</a></li>
                            <li><a href="{{ route('admin.email-campaigns') }}">Email Campaigns</a></li>
                        </ul>
                    </li>
*/ ?>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.subscribers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
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
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Products</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <?php /*
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.reviews') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Product Reviews</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    */ ?>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.categories') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Categories</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.brands') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Brands</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.tags') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Tags</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href=" {{ route('admin.suppliers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Suppliers</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href=" {{ route('admin.warehouses') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>warehouses</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg> -->
                            <span class="lan-6">Attributes</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.attributes') }}">Attributes</a></li>
                            <li><a href="{{ route('admin.attribute-values') }}">Attribute Values</a></li>
                        </ul>
                    </li>
                    <!-- PRODUCT CATALOG - ending -->


                    <!-- CMS - starting 

                    AttendanceController
                    DepartmentController
                    DesignationController
                    EmployeeController
                    EmployeeDocumentController
                    LeavesController
                    LeaveTypeController
                    PayrollAllowanceController
                    PayrollController
                    PayrollDeductionController
                    PayrollLoanController
                    PayrollPaymentController
                    PayrollSettingController
                    PayrollTaxController
                    PerformanceReviewController
                    PromotionController
                    SalaryStructureController
                    SalaryStructureController
                    TrainingController
                    WarningController
                    -->

                    <?php /*                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">HR & Payroll</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">HR</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.employees') }}">Employees</a></li>
                            <li><a href="{{ route('admin.employee-documents') }}">Employee Documents</a></li>
                            <li><a href="{{ route('admin.performance-reviews') }}">Performance Reviews</a></li>
                            <li><a href="{{ route('admin.promotions') }}">Promotions</a></li>
                            <li><a href="{{ route('admin.trainings') }}">Trainings</a></li>
                            <li><a href="{{ route('admin.warnings') }}">Warnings</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Payroll</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.attendances') }}">Attendance</a></li>
                            <li><a href="{{ route('admin.leaves') }}">Leaves</a></li>
                            <li><a href="{{ route('admin.payrolls') }}">Payrolls</a></li>
                            <li><a href="{{ route('admin.payroll-deductions') }}">Payroll Deductions</a></li>
                            <li><a href="{{ route('admin.payroll-loans') }}">Payroll Loans</a></li>
                            <li><a href="{{ route('admin.payroll-payments') }}">Payroll Payments</a></li>
                            <li><a href="{{ route('admin.payroll-taxes') }}">Payroll Taxes</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.salary-structures') }}">Salary Structures</a></li>
                            <li><a href="{{ route('admin.departments') }}">Departments</a></li>
                            <li><a href="{{ route('admin.designations') }}">Designations</a></li>
                            <li><a href="{{ route('admin.leave-types') }}">Leave Types</a></li>
                            <li><a href="{{ route('admin.payroll-allowances') }}">Payroll Allowances</a></li>
                            <li><a href="{{ route('admin.payroll-settings') }}">Payroll Settings</a></li>
                        </ul>
                    </li>
                    <!-- HR & payroll - ending -->

*/ ?>


                    <!-- CMS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">CMS</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.vendors') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>vendors</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <?php /*
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.menues') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Menu</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    */ ?>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.pages') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Pages</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.banners') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Banners</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <?php /*
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <span class="lan-6">Banners</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.banners') }}">Banners</a></li>
                            <li><a href="{{ route('admin.banner-locations') }}">Banner Locations</a></li>
                        </ul>
                    </li>
                    */ ?>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
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
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
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
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Customer Groups</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.customers') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Customers</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.wallets') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Wallet</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.wishlists') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Wishlist</span>
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
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.site-maps') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
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
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Callback Requests</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.inquiries') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>Inquiries</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.support-types') }}">Support Types</a></li>
                            <li><a href="{{ route('admin.support-statuses') }}">Support Status</a></li>
                        </ul>
                    </li>

                    <!-- HELP DESK & SUPPORT - ending -->

                    <?php /*

                    <!-- SYSTEM USERS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">System Users</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.system-users') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>System Users</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.system-user-roles') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-board') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-board') }}"></use>
                            </svg>
                            <span>User Roles</span>
                            <div class="according-menu"><i class="fa-solid fa-angle-right"></i></div>
                        </a>
                    </li>
                    <!-- SYSTEM USERS - ending -->
*/ ?>


                    <!-- SETTINGS - starting -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Settings</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
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
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">For Orders</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.order-statuses') }}">Status Management</a></li>
                            <li><a href="{{ route('admin.order-sources') }}">Source Management</a></li>
                            <li><a href="{{ route('admin.shippers') }}">Shipper Management</a></li>
                            <li><a href="{{ route('admin.payment-gateways') }}">Payment Gateway</a></li>
                            <li><a href="{{ route('admin.payment-methods') }}">Payment Method</a></li>
                            <li><a href="{{ route('admin.courier-services') }}">Courier Service</a></li>
                            <li><a href="{{route('admin.courier-services-integrations')}}">Courier Service Integration</a></li>
                        </ul>
                    </li>

                    <?php /*
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">For SMS</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.sms-categories') }}">SMS Category</a></li>
                            <li><a href="{{ route('admin.sms-gateways') }}">SMS Gateway</a></li>
                            <li><a href="{{ route('admin.sms-api-integrations') }}">SMS API Integration</a></li>
                            <li><a href="{{ route('admin.default-sms') }}">Default SMS</a></li>
                        </ul>
                    </li>
                    */ ?>

                    <!-- SETTINGS - ending -->



                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->