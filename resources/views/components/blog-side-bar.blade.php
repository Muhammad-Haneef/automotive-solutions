<div class="sticky-top" style="top:30px;">

    @if($categories->count() > 0)
    <div class="mb-4">
        <h3 class="mb-3 fw-bold border-bottom pb-2">
            Blog Categories
        </h3>
        <div class="blog-category-list">
            @foreach($categories as $category)
            <a href="{{ route('blog-category-show', [$category->slug]) }}"
                class="d-flex justify-content-between align-items-center text-dark text-decoration-none py-2 px-2 blog-category-item">
                <span>
                    <i class="bi bi-folder2 me-2 text-primary"></i>
                    {{ $category->title }}
                </span>
                @if(isset($category->blogs_count))
                <span class="badge bg-light text-secondary rounded-pill">
                    {{ $category->blogs_count }}
                </span>
                @endif
            </a>
            @endforeach

            <a href="{{ route('blogs') }}"
                class="d-flex align-items-center text-dark text-decoration-none text-small py-2 px-2 mt-2">
                View All
            </a>
        </div>
    </div>
    @endif


    <div class="follow-us">
        <h3 class="mb-3 fw-bold">
            Follow Us
        </h3>

        <a href="https://www.facebook.com/automotivesolutionspk/" target="_blank" class="social-box facebook">
            <div class="left">
                <i class="fab fa-facebook-f"></i>
                <span>FACEBOOK</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>

        <a href="https://twitter.com/automotivesolutions" target="_blank" class="social-box twitter">
            <div class="left">
                <i class="fab fa-x-twitter"></i>
                <span>TWITTER</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>

        <a href="https://www.instagram.com/automotivesolutions.pk/" target="_blank" class="social-box instagram">
            <div class="left">
                <i class="fab fa-instagram"></i>
                <span>INSTAGRAM</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>

        <a href="https://www.youtube.com/@AutomotiveSolutionspk/" target="_blank" class="social-box youtube">
            <div class="left">
                <i class="fab fa-youtube"></i>
                <span>YOUTUBE</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>
        <a href="https://www.linkedin.com/company/automotive-solutions-pakistan/" target="_blank" class="social-box twitter linkedin">
            <div class="left">
                <i class="fab fa-linkedin-in"></i>
                <span>LINKEDIN</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>
        <a href="https://www.tiktok.com/@automotivesolutionspk" target="_blank" class="social-box twitter tiktok">
            <div class="left">
                <i class="fab fa-tiktok"></i>
                <span>TIKTOK</span>
            </div>
            <span class="follow">FOLLOW</span>
        </a>

    </div>

</div>