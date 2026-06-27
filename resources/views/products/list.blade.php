<x-layouts.frontend>

    <x-products-page-banner />

    <div class="main-page-banner pb-4 off-white-bg pt-5">
        <div class="container">
            <div class="row">
                <?php /*
                <div class="col-md-3 col-lg-3">
                    @include('products.sidebar')
                </div>
                <div class="col-md-9 col-lg-9">
                */ ?>
                <div class="col-12">
                    
                    <x-products-list :products="$products" />
                    
                </div>
            </div>
        </div>
    </div>

</x-layouts.frontend>