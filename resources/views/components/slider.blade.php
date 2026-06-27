@php
$banner = getBannerByLocationId(3);
@endphp
@if($banner)

<div class="main-page-banner pb-4 off-white-bg pt-4">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-md-4 col-lg-4 d-sm-block d-none">
                <div class="mb-3">
                    <img class="d-block w-100 h-100"
                        src="{{asset(Storage::url($banner->images[0]->image_url))}}" alt="First slide" />
                </div>
                <div class="">
                    <img class="d-block w-100 h-100"
                        src="{{asset(Storage::url($banner->images[1]->image_url))}}" alt="First slide" />
                </div>

            </div>
            <!-- Slider Area Start Here -->
            <div class="col-md-8 col-lg-8 ">
                <div id="MainSlides" class="carousel slide"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($banner->images->slice(2) as $key => $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset(Storage::url($image->image_url)) }}"
                                class="d-block w-100"
                                alt="{{ $image->image_url }}">
                        </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#MainSlides"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#MainSlides"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

@endif