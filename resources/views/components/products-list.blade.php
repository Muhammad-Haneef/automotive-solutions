<div>
    <div class="row mb-3 align-items-center">
        <div class="col-md-3">
            <select id="filter-sort" class="form-select">
                <option value="">Default Sorting</option>
                <option value="price_asc">Price: Low to High</option>
                <option value="price_desc">Price: High to Low</option>
                <option value="newest">Newest First</option>
                <option value="featured">Featured</option>
            </select>
        </div>
        <div class="col-md-6" id="view-type">

        </div>
        <div class="col-md-3 text-end">
            <span class="text-muted">
                Showing <span id="loaded-count">{{ $products->count() }}</span>
                of <span id="total-count">{{ $products->total() }}</span> products
            </span>
        </div>
    </div>

</div>

<div id="products-list">
    <div class=" d-lg-none mb-3 ms-auto text-end" id="toggleSidebarBtn">
        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Menu / Menu_Alt_01">
                <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg> Show Sidebar
    </div>
    <div class="row mx-0" id="product-grid">
        @if($products->count() > 0)
        @foreach($products as $product)
        <x-product-card :product="$product" />
        @endforeach
        @else
        <div class="col-12">
            <div class="alert alert-info text-center">
                No products found matching your criteria.
            </div>
        </div>
        @endif
    </div>
</div>

<div>

    {{-- Load More --}}
    <div class="text-center mt-4" id="load-more-wrapper">
        @if($products->hasMorePages())
        <button id="btn-load-more"
            class="btn btn-outline-primary px-5 border-0"
            data-page="2"
            data-total="{{ $products->total() }}"
            data-loaded="{{ $products->count() }}">

        </button>
        @endif

        {{-- Loading spinner (hidden by default) --}}
        <div id="load-more-spinner" class="d-none">
            <div class="spinner-border text-primary"></div>
            <p class="text-muted mt-2">Loading more products...</p>
        </div>

        {{-- End message --}}
        <div id="all-loaded" class="d-none">
            <div class="text-muted py-3">
                <i class="fa fa-check-circle text-success me-1"></i>
                All <strong id="all-loaded-count"></strong> products loaded
            </div>
        </div>
    </div>
</div>