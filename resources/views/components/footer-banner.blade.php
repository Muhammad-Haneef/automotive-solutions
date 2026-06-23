@php
$banner = getBannerByLocationId(6);
@endphp
@if(!empty($banner) && isset($banner->images) && count($banner->images) > 0)
<section class="footer-banner-container py-5 ">
    <div class="container ">
        <div class="row">

            @foreach($banner->images as $image)
            @if(!empty($image['image_url']))

            <div class="col-lg-6">
                <div class=" banners mb-3">
                    <a href="{{$image['image_link']}}">
                        <img src="{{ Storage::url($image['image_url']) }}" alt
                            class="img-fluid w-100">
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- Container End -->
</section>
@endif
