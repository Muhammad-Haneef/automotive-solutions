<div class="bg-navbar arrow-tabs">
    <ul class="nav nav-pills" id="pills-bg-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ $active == 'general' ? 'active' : '' }}"
                href="{{ route('admin.edit-product', [$pid]) }}">
                <i class="icofont icofont-ui-home"></i>
                <span class="pe-4">
                    General Info
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'gallery' ? 'active' : '' }}"
                href="{{ route('admin.product-images', [$pid]) }}">
                <i class="icofont icofont-ui-image"></i>
                <span class="pe-4">
                    Gallery
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'product-variations' ? 'active' : '' }}"
                href="{{ route('admin.product-variations', [$pid]) }}">
                <i class="icofont icofont-shopping-cart"></i>
                <span class="pe-4">
                    Variations
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'product-videos' ? 'active' : '' }}"
                href="{{ route('admin.product-video-sections', [$pid]) }}">
                <i class="icofont icofont-ui-video-play"></i>
                <span class="pe-4">
                    videos
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'catalog-size-chart' ? 'active' : '' }}"
                href="{{ route('admin.product-catalog-size-chart', [$pid]) }}">
                <i class="icofont icofont-ui-video-play"></i>
                <span class="pe-4">
                    Catalog & Size Chart
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'product-faqs' ? 'active' : '' }}"
                href="{{ route('admin.product-faqs', [$pid]) }}">
                <i class="icofont icofont-support-faq"></i>
                <span class="pe-4">
                    FAQs
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active == 'product-reviews' ? 'active' : '' }}"
                href="{{ route('admin.product-reviews', [$pid]) }}">
                <i class="icofont icofont-comment"></i>
                <span class="pe-4">
                    Reviews
                </span>
            </a>
        </li>
    </ul>
</div>
