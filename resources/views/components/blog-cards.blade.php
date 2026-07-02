      <section class="py-5">
      <div class="container">
          <!-- Header -->
          <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap">

              <div class="d-flex align-items-center">
                  <h2 class="fw-bold mb-0 section-title">
                      {{ $title ?? 'Our Latest News' }}
                  </h2>
                  <p class="ms-3 mb-0 text-secondary section-description">Our most ordered products.</p>
              </div>

              <div>
                  <a href="{{ $viewAllLink ?? '/blogs' }}" class="text-decoration-none fw-semibold text-primary-background fs-14">
                      View All
                  </a>
              </div>
          </div>
          <div class="swiper blogSwiper">
              <div class="swiper-wrapper d-flex g-4">


                  @if($data && $data->count())
                  @foreach($data as $blog)
                  <div class="swiper-slide col-lg-3 col-md-4 col-sm-6">
                      <div class="card h-100 border-0 shadow-sm px-3">
                          <a href="{{ route('blog-show', $blog->slug) }}">
                              <img src="{{asset('storage/'.$blog->image)}}" class="card-img-top" alt="">
                          </a>
                          <div class="card-body">
                              <h5 class="fw-bold">
                                  <a href="{{ route('blog-show', $blog->slug) }}" class="text-dark text-decoration-none">
                                      {{ Str::limit($blog->title ?? 'Blog Title.', 50) }}
                                  </a>
                              </h5>
                              <p class="text-muted small">
                                  {{ Str::limit($blog->excerpt ?? 'Blog excerpt goes here.', 100) }}
                              </p>
                              <div class="d-flex justify-content-between text-muted small">
                                  <span>by <a href="#"
                                          class="lightgray-text text-decoration-none">Admin</a></span>
                                  <span>{{ $blog->created_at->format('M d, Y') ?? 'Date' }}</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                  @else
                  <div class="col-12">
                      <div class="card h-100 border-0 shadow-sm px-3">
                          <div class="card-body">
                              <h5 class="fw-bold">
                                  <a href="#" class="text-dark text-decoration-none">
                                      No blogs found.
                                  </a>
                              </h5>
                          </div>
                      </div>
                  </div>
                  @endif




              </div>
          </div>

      </div>
  </section>