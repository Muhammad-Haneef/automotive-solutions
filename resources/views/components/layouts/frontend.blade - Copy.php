<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Venta </title>
    <link rel="shortcut icon" href="{{asset('front/img/')}}favicon.ico" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/ionicons.min.css')}}" />
    <!-- linearicons css -->
    <link rel="stylesheet" href="{{asset('front/css/linearicons.css')}}" />
    <!-- Nice select css -->
    <!-- <link rel="stylesheet" href="css/nice-select.css"> -->
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.css')}}" />
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.min.css')}}" />
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{asset('front/css/meanmenu.min.css')}}" />

    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />
    <!-- Custom css -->
    <!--      <link rel="stylesheet" href="css/default.css">  -->
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
    <!-- Responsive css -->
    <!--<link rel="stylesheet" href="css/responsive.css"> -->

    <!-- Modernizer js -->
    <script src="{{asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <x-layouts.partials.top-strip />
    <x-layouts.partials.header />

    {{$slot}}


    <x-layouts.partials.footer />

    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->
    <script src="{{asset('front/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Countdown js -->
    <script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
    <!-- Mobile menu js -->
    <script src="{{asset('front/js/jquery.meanmenu.min.js')}}"></script>
    <!-- ScrollUp js -->
    <script src="{{asset('front/js/jquery.scrollUp.js')}}"></script>

    <!-- Fancybox js -->
    <script src="{{asset('front/js/jquery.fancybox.min.js')}}"></script>
    <!-- Jquery nice select js -->
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{asset('front/js/jquery-ui.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!-- Bootstrap popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Plugin js -->
    <script src="{{asset('front/js/plugins.js')}}"></script>

    <script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>