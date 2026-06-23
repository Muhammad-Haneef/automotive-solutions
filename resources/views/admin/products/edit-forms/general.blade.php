<form method="post" action="{{route('admin.update-'.$rsn, $row->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="general" />
    <div class="row">
        <div class="col-sm-9">
            <div class="row g-3">
                <x-admin.form.input ref="title" title="Title" type="text" value="{{$row->title ?? old('title')}}" required=1 />
                <x-admin.form.input ref="slug" title="Slug" type="text" value="{{$row->slug ?? old('slug')}}" required=1 />
                <x-admin.form.dropdown ref="category_id" title="Category" :options="$categories" selected="{{$row ? $row->category_id : old('category_id')}}" />

                <x-admin.form.dropdown ref="brand_id" title="Brand" :options="$brands" selected="{{$row ? $row->brand_id : old('brand_id')}}" class="col-md-6" />
                <x-admin.form.dropdown ref="warehouse_id" title="Stock Location - (Warehouse)" :options="$warehouses" selected="{{$row ? $row->warehouse_id : old('warehouse_id')}}" class="col-md-6" />


                <x-admin.form.textarea ref="excerpt" title="Excerpt" rows="2" value="{{$row->excerpt ?? old('excerpt')}}" />
                <x-admin.form.editor ref="description" title="Description" :content="$row->description ?? old('description')" />


                <x-admin.form.dropdown ref="type" title="Product Type" :options="$productTypes" selected="{{$row ? $row->type : old('type')}}" class="col-md-3" />
                <x-admin.form.input ref="sku" title="SKU" type="text" value="{{$row->sku ?? old('sku')}}" class="col-md-3" />
                <x-admin.form.input ref="barcode" title="Barcode" type="text" value="{{$row->barcode ?? old('barcode')}}" class="col-md-3" />
                <x-admin.form.input ref="model" title="Model" type="text" value="{{$row->model ?? old('model')}}" class="col-md-3" />
                <x-admin.form.input ref="batch_no" title="Batch #" type="text" value="{{$row->batch_no ?? old('batch_no')}}" class="col-md-3" />


                <x-admin.form.dropdown
                    ref="featured"
                    title="Featured"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->featured : old('featured', 1)}}" class="col-md-3" />

                <x-admin.form.dropdown
                    ref="upsellable"
                    title="Is Upsellable"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->upsellable : old('upsellable', 1)}}" class="col-md-3" />

                <x-admin.form.dropdown
                    ref="cross_sellable"
                    title="Is Cross Sellable"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->cross_sellable : old('cross_sellable', 1)}}" class="col-md-3" />


            </div>


            @include('admin.products.edit-forms.general-info-tabs')

        </div>

        <div class="col-sm-3">

            <div class="card">
                <div class="card-body">
                    <div class="row g-3">

                        <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-6" />

                        <x-admin.form.dropdown
                            ref="is_active"
                            title="Is Active"
                            :options="get_yes_no_options()"
                            selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-6" />
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.input ref="cost" title="Cost" type="text" value="{{$row->cost ?? old('cost')}}" />
                        <x-admin.form.input ref="price" title="Price" type="text" value="{{$row->price ?? old('price')}}" required=1 />
                        <x-admin.form.input ref="sale_price" title="Sale Price" type="text" value="{{$row->sale_price ?? old('sale_price')}}" required=1 />
                    </div>
                </div>
            </div>


            <x-admin.form.image-widget title="Thumbnail" oldImage="{{$row->thumbnail ?? old('thumbnail')}}" ref="thumbnail" />
            <x-admin.form.image-widget title="Thumbnail on Hover" oldImage="{{$row->thumbnail2 ?? old('thumbnail2')}}" ref="thumbnail2" />
        </div>

    </div>
    <div class="row">
        <div class="mt-4 col-md-9 text-end">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>