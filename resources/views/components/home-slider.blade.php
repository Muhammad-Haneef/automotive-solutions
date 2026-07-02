<?php

//echo "<pre>"; print_r($banner); exit();
?>
@php
$bannerData = [
[
'exerpt' => "Refresh Spring Deals",
'title' => "Add Your Car. Find Perfect Parts.",
'description' => "Upgrade your ride with premium auto parts built for reliability. Quality-tested components that deliver peace of mind on every road.",
],
[
'exerpt' => "Fits Your Ride. Fuels Your Drive.",
'title' => "Best Auto Parts For Every Car.",
'description' => "Precision-engineered auto parts that fit your vehicle perfectly—at prices that fit your budget. Shop smart. Drive with confidence.",
]
];
@endphp


@if($banner && $banner->images->count() > 0)
<section class="hero-section">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active">
                </button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1">
                </button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2">
                </button>
            </div>
            <div class="carousel-inner">

                @foreach($banner->images as $index => $image)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <!-- Slide 1 -->
                    <div class="row align-items-center">
                        <!-- Left -->
                        <div class="col-lg-6 text-cap">
                            <span class="text-uppercase small text-secondary">
                                {{$bannerData[$index]['exerpt']}}
                            </span>
                            <div class="h1 hero-title mt-1">
                                {{$bannerData[$index]['title']}}
                            </div>
                            <p class="text-secondary mt-2 mb-4">
                                {{$bannerData[$index]['description']}}
                            </p>
                            <a href="{{ $image->image_link }}"
                                class="text-decoration-none fw-semibold text-primary-background fs-14">
                                View All Products
                            </a>
                        </div>
                        <!-- Right -->
                        <div class="col-lg-6 position-relative text-center">
                            <div class="sale-badge">
                                <div class="sale-percent">
                                    -42%
                                </div>
                                <small>
                                    Total discount for campaign
                                </small>
                            </div>
                            <img src="{{asset('storage/'.$image->image_url)}}" alt="{{ $image->image_alt }}" class="img-fluid hero-image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endif