@if($categories)
<section class="Categories py-5 ">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h3 class="font-weight-bold">Browse By Categories</h3>
            </div>
        </div>
        <div class="row row-cols-6 cats bg-white">
            @if($categories)
            @foreach ($categories as $category)
            <a href="{{ route('category',  $category['slug']) }}"
                class="col catBox border-end border-bottom text-dark text-center p-2">
                <div class="catBox-img text-center ">
                    {{getImage($category['thumbnail'], "127", "170")}}
                </div>
                {{ $category['title'] }}
            </a>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endif