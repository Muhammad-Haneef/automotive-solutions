<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Automotive Solutions
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300..700&display=swap" rel="stylesheet">

    <link href="{{ asset('front/css/all.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}" />
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />

</head>

<body>

    <x-header />

    {{ $slot }}

    <x-footer />

    <script src="{{ asset('front/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('front/js/select2.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>

</body>

</html>