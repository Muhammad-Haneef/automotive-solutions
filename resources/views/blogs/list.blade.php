<x-layouts.frontend>


    <div class="checkout-banner position-relative">
        <img src="{{asset('front/img/home-applainces.jpg')}}" class="img-fluid w-100" alt="offer">
    </div>

    <div class="main-page-banner py-5">
        <div class="container">
            <h2 class="fw-bold mb-3">Blog</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach($data as $blog)
                <div class="col">
                    <div class="card h-100 blogBox">
                        <div class="position-relative blogBox-img overflow-hidden">
                            <img src="{{asset('front/img/blog/best-gaming-laptop-model-entry-header.webp')}}" class="card-img-top img-fluid w-100" alt="best-gaming-laptop-model-entry-header">
                            <div class="card-img-overlay d-flex align-items-end text-white fw-semibold">
                                Post by : Admin
                            </div>
                        </div>
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb small">
                                    <li class="breadcrumb-item"><a href="#">Gaming Laptop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->category->title }}</li>
                                </ol>
                            </nav>
                            <h2 class="card-title fs-5">{{ $blog->title }}</h2>
                            <p class="card-text">{{ $blog->excerpt }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between py-3">
                            <a href="{{ route('blog-single', $blog->slug) }}" class="fw-semibold text-primary">Read More</a>
                            <small class="text-body-secondary ">Published Date: {{ $blog->created_at->format('d-m-Y') }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-5 text-center">
                <button type="button" class="btn bg-secondary text-white text-uppercase px-4 rounded-0">Load more posts</button>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>


</x-layouts.frontend>