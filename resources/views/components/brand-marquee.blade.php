@if($brands->count() > 0)
<section class="brand-marquee ">
    <div class="container">
        <div class="marquee border-top border-bottom  py-4">
            <div class="marquee-track">
                @foreach($brands as $brand)
                <div class="brand-item">
                    <img src="{{asset('storage/' . $brand->logo)}}" class="image-fluid" alt="{{ $brand->title }}" width=""
                        height="">
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif