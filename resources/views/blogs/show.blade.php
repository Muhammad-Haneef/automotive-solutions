<x-layouts.frontend>
    @if($record && $record->title)
    <section class="blog-section py-4">
        <div class="container">
            <div class="row ">
                <!-- Blog Posts -->
                <div class="col-lg-9 pe-lg-5">
                    <div class="border-0 mb-5">
                        <h1 class="blog-title fw-semibold my-3">
                            {{ $record->title }}
                        </h1>
                        <div class="blog-footer bg-white mt-2 mb-3">
                            <ul class="nav text-muted">
                                <li class=" py-1">{{ $record->created_at->format('M j, Y') }}</li>


                                @if($record->tag_list && $record->tag_list->count())
                                @foreach($record->tag_list as $tag)
                                <li class="py-1">
                                    {{ $tag->title }}
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <img src="{{asset('front/images/blog/blog-01.webp')}}" class="img-fluid rounded mb-4" alt="">
                        <div class="blog-content">
                            <div class="blog-body">
                                {!! $record->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <x-blog-side-bar />
                </div>
            </div>
        </div>
    </section>

    <x-blog-cards :data="$related_blogs" title="Related Blogs" viewAllLink="{{ route('blogs') }}" />
    
    @else
    <section class="blog-section py-4">
        <div class="container">
            <div class="row ">
                <!-- Blog Posts -->
                <div class="col-lg-9 pe-lg-5">
                    <div class="border-0 mb-5">
                        <h1 class="blog-title fw-semibold my-3">
                            Blog not found
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</x-layouts.frontend>