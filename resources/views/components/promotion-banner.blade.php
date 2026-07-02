@php
$bannerData = [
[
'excerpt' => 'Refreshing spring deals',
'title' => 'Solid Parts. Good Performance.',
'description' => 'Adat ontosion och parasport exosts.'
],
[
'excerpt' => 'Refreshing spring deals',
'title' => 'Automotive Solutions Quality. Aftermarket Price.',
'description' => 'Adat ontosion och parasport exosts.'
]
];
@endphp

@if($banner && $banner->images->count() > 0)
<section class="py-4">
    <div class="container">
        <div class="row g-4">

            @foreach($banner->images as $image)
            <!-- Banner 1 -->
            <div class="col-12 col-lg-6 my-2">
                <div class="site-banner position-relative overflow-hidden rounded text-white h-100">
                    <img src="{{asset('storage/'.$image->image_url)}}" class="img-fluid w-100" alt="{{$image->image_alt}}">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center p-4">
                        <div class="w-50">
                            <small class="text-uppercase text-white">
                                {{ $bannerData[0]['excerpt'] }}
                            </small>
                            <h2 class="fw-bold h2 text-white">
                                {{ $bannerData[0]['title'] }}
                            </h2>
                            <p class="text-white">
                                {{ $bannerData[0]['description'] }}
                            </p>
                            <a href="{{$image->image_link}}"
                                class="btn btn-primary bg-white text-white rounded-pill border-secondary">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif