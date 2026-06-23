<div class="row g-3 mt-4">
    <ul class="simple-wrapper nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active " id="seo-tab" data-bs-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="true">SEO</a></li>
        <li class="nav-item"><a class="nav-link" id="inventory-tab" data-bs-toggle="tab" href="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory Tracking</a></li>
        <li class="nav-item"><a class="nav-link" id="warranty-tabs" data-bs-toggle="tab" href="#warranty" role="tab" aria-controls="warranty" aria-selected="false">Warranty</a></li>
        <li class="nav-item"><a class="nav-link" id="shipping-tabs" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping</a></li>
        <li class="nav-item"><a class="nav-link" id="digital-product-tabs" data-bs-toggle="tab" href="#digital-product" role="tab" aria-controls="digital-product" aria-selected="false">As Digital Product</a></li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="seo" role="tabpanel" aria-labelledby="seo-tab">
            <x-admin.form.seo-fields
                :title="old('meta_title', $row->meta_title ?? '')"
                :keywords="old('meta_keywords', $row->meta_keywords ?? '')"
                :description="old('meta_description', $row->meta_description ?? '')" />
        </div>
        <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
            <div class="row g-3  e-category">
                <div class="col-12">
                    <div class="main-divider">
                        <div class="divider-body">
                            <h6>Inventory Tracking</h6>
                        </div>
                    </div>
                </div>
                <x-admin.form.input ref="stock_qty" title="Stock Qty" type="text" value="{{$row->stock_qty ?? old('stock_qty')}}" class="col-md-3" />
                <x-admin.form.dropdown ref="stock_status" title="Stock Status" :options="$stockStatuses" selected="{{$row ? $row->stock_status : old('stock_status')}}" class="col-md-3" />
                <x-admin.form.input ref="min_purchase" title="Minimum Purchase Limit" type="text" value="{{$row->min_purchase ?? old('min_purchase')}}" class="col-md-3" />
                <x-admin.form.input ref="max_purchase" title="maximum Purchase Limit" type="text" value="{{$row->max_purchase ?? old('max_purchase')}}" class="col-md-3" />
                <x-admin.form.input ref="low_stock_alert" title="Low Stock Alert" type="text" value="{{$row->low_stock_alert ?? old('low_stock_alert')}}" class="col-md-3" />

                <x-admin.form.dropdown
                    ref="backorderable"
                    title="Is Backorderable"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->backorderable : old('backorderable', 1)}}" class="col-md-3" />
            </div>
        </div>
        <div class="tab-pane fade" id="warranty" role="tabpanel" aria-labelledby="warranty-tabs">
            <div class="row g-3 e-category">
                <div class="col-12">
                    <div class="main-divider">
                        <div class="divider-body">
                            <h6>Warranty</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="mb-1">Warranty Period</label>
                    <div class="input-group">
                        <input class="form-control" name="warranty_period" id="warranty_period" type="text" placeholder="warranty_period" value="{{$row->warranty_period ?? old('warranty_period')}}" />
                        <span class="input-group-text p-0">
                            <x-admin.form.dropdown ref="warranty_period_unit" :options="$warrantyPeriodUnits" selected="{{$row ? $row->warranty_period_unit : old('warranty_period_unit')}}" />
                        </span>
                    </div>
                </div>
                <x-admin.form.dropdown ref="warranty_type" title="Warranty Type" :options="$warrantyTypes" selected="{{$row ? $row->warranty_type : old('warranty_type')}}" class="col-md-4" />
                <x-admin.form.dropdown
                    ref="return_able"
                    title="Return Able"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->return_able : old('return_able', 1)}}" class="col-md-4" />

                <x-admin.form.editor ref="return_policy" title="Return Policy" :content="$row->return_policy ?? old('return_policy')" />

            </div>
        </div>
        <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tabs">
            <div class="row g-3  e-category">
                <div class="col-12">
                    <div class="main-divider">
                        <div class="divider-body">
                            <h6>General info</h6>
                        </div>
                    </div>
                </div>

                <x-admin.form.input ref="weight" title="Weight" type="text" value="{{$row->weight ?? old('weight')}}" class="col-md-6" />
                <x-admin.form.input ref="dimensions" title="Dimensions" type="text" value="{{$row->dimensions ?? old('dimensions')}}" exinfo="length x width x height" class="col-md-6" />


                <div class="col-12">
                    <div class="main-divider">
                        <div class="divider-body">
                            <h6>For Shipping info</h6>
                        </div>
                    </div>
                </div>
                <x-admin.form.input ref="shipping_weight" title="Shipping Weight" type="text" value="{{$row->shipping_weight ?? old('shipping_weight')}}" class="col-md-4" />
                <x-admin.form.input ref="shipping_dimensions" title="Shipping Dimensions" type="text" value="{{$row->shipping_dimensions ?? old('shipping_dimensions')}}" exinfo="length x width x height" class="col-md-4" />
                <x-admin.form.dropdown
                    ref="is_global"
                    title="Is Product _global"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->is_global : old('is_global', 1)}}" class="col-md-4" />

                <x-admin.form.dropdown
                    ref="shipping_class_id"
                    title="Shipping Class"
                    :options="$shippingClasses"
                    selected="{{$row ? $row->shipping_class_id : old('shipping_class_id')}}" class="col-md-4" />
            </div>
        </div>
        <div class="tab-pane fade" id="digital-product" role="tabpanel" aria-labelledby="digital-product-tabs">
            <div class="row g-3  e-category">
                <div class="col-12">
                    <div class="main-divider">
                        <div class="divider-body">
                            <h6>As Digital Product info</h6>
                        </div>
                    </div>
                </div>

                <x-admin.form.input ref="download_limit" title="Download Limit" type="number" value="{{$row->download_limit ?? old('download_limit')}}" class="col-md-3" />
                <x-admin.form.input ref="expiration_date" title="Expiration Date" type="date" value="{{$row->expiration_date ?? old('expiration_date')}}" class="col-md-3" />
                <x-admin.form.dropdown
                    ref="license_type"
                    title="License Type"
                    :options="get_yes_no_options()"
                    selected="{{$row ? $row->license_type : old('license_type')}}" class="col-md-3" />
                <x-admin.form.input ref="file" title="File Attachment" type="file" value="{{$row->file ?? old('file')}}" class="col-md-3" />

                <?php if ($row->file) { ?>
                    <a target="_blank" href="{{ Storage::url($row->file)}}">
                        <i class="icofont icofont-ui-file"></i>
                    </a>
                <?php } ?>

            </div>
        </div>

    </div>
</div>