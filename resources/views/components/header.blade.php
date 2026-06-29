<header class="bg-light">

    <x-topbar />

    <x-mobile-header />

    <!-- MAIN HEADER -->
    <div class=" bg-light py-3 d-none d-sm-block">
        <div class="container">
            <div class="row align-items-center">
                <!-- LOGO -->
                <div class="col-lg-4 siteLogo_">
                    <a href="/">
                        <img src="{{asset('front/images/logo.png')}}" alt="Automotive Solutions" class="img-fluid logo-img mx-w-300">
                    </a>
                </div>



                <!-- SEARCH -->
                <div class="col-lg-4 searchBar_ px-lg-0">
                    <form method="post" action="{{route('products')}}">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search popular products...">
                            <button class="btn btn-light border">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 19C15.1944 19 19 15.1944 19 10.5C19 5.80558 15.1944 2 10.5 2C5.80558 2 2 5.80558 2 10.5C2 15.1944 5.80558 19 10.5 19Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 22L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <span class=" float-end ms-4">
                        <x-call-back-request />
                    </span>                    
                    <span class=" float-end">
                        <x-send-your-interest-icon />
                    </span>
                </div>

            </div>
        </div>
    </div>

    <x-navbar />

</header>

<x-header-drawers />