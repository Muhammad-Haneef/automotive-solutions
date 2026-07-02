<x-layouts.frontend>

    <?php
    //echo "<pre>";     print_r($rows);     die;
    ?>



    <section class="py-4">
        <div class="container">
            <h1 class="h2 product_title display-5 mt-3 text-center">Blog</h1>
        </div>
    </section>
    <section class="blog-section py-5">
        <div class="container">
            <div class="row ">
                <!-- Blog Posts -->
                <div class="col-lg-9 pe-lg-5">
                    @if($rows->count() > 0)
                    @foreach($rows as $row)
                    <div class="border-0 mb-5">
                        <img src="{{asset('storage/'.$row->image)}}" class="img-fluid rounded" alt="">
                        <div class="blog-content">
                            <div class="blog-body">
                                <h2 class="blog-title h3 fw-semibold my-3">
                                    <a href="#" class="text-dark text-decoration-none">
                                        {{$row->title}}
                                    </a>
                                </h2>
                                <p class="text-muted">
                                    {{$row->excerpt}}
                                </p>

                                <a href="{{route('blog-show', [$row->slug])}}" class="btn btn-primary">
                                    Read More
                                </a>

                            </div>
                            <div class="blog-footer bg-white mt-2">
                                <ul class="nav text-muted">
                                    <li class=" py-1">{{get_formatted_date($row->created_at)}}</li>
                                    <li class=" py-1">{{$row->category->title}}</li>

                                    @if($row->tag_list && $row->tag_list->count())
                                    @foreach($row->tag_list as $tag)
                                    <li class="py-1">
                                        {{ $tag->title }}
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center">
                        <div class="alert alert-danger">
                            <p class="mb-0">No blog posts found.</p>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <x-blog-side-bar />
                </div>
            </div>
        </div>
    </section>


</x-layouts.frontend>