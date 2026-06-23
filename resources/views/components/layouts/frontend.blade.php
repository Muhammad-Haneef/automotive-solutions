<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="noindex, nofollow">
    <title>Venta </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="img/favicon.ico" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="cart-dropdown-url" content="{{ route('front-cart-dropdown') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/iziToast.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/venta-style.css')}}">

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <x-layouts.partials.top-strip />
    <x-layouts.partials.header />

    {{$slot}}


    <x-layouts.partials.footer />

    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>

    <!-- jquery 3.2.1 -->
    <script src="{{asset('front/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

    <!-- Bootstrap popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('front/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    
    <script src="{{asset('assets/js/iziToast.min.js')}}"></script>
    
    <script src="{{asset('front/js/general.js')}}"></script>

    @if(Session::has('message'))
    <script>
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                iziToast.info({
                    title: 'Info!',
                    message: "{{ Session::get('message') }}",
                    position: 'topRight'
                });
                break;
            case 'success':
                iziToast.success({
                    title: 'Success!',
                    message: "{{ Session::get('message') }}",
                    position: 'topRight'
                });
                break;
            case 'warning':
                iziToast.warning({
                    title: 'Warning!',
                    message: "{{ Session::get('message') }}",
                    position: 'topRight'
                });
                break;
            case 'error':
                iziToast.error({
                    title: 'Error!',
                    message: "{{ Session::get('message') }}",
                    position: 'topRight'
                });
                break;
        }
    </script>
    @endif

</body>

</html>