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
