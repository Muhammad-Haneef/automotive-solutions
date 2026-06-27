@php
$banner = getBannerById(1);
@endphp
@if($banner)
<div class="popup_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="top_popup_banner position-absolute text-white float-right pointer">
                    <i class="fa fa-times-circle fa-xl font-weight-light" aria-hidden="true"></i>
                </span>
                <div class="banner_popup_area">
                    @foreach($banner->images as $image)
                    @if(!empty($image['image_url']))
                    <a href="{{$image['image_link']}}">
                        <img src="{{ Storage::url($image['image_url']) }}" class="img-fluid mx-auto" alt="Banner">
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif