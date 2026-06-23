<form method="post" action="{{$row ? route('admin.update-'.$rsn, [$pid, $row->id]) : route('admin.create-'.$rsn, [$pid])}}" enctype="multipart/form-data">
  @csrf
  <div class="row g-3">

    <input type="hidden" name="product_id" value="{{$pid}}" />
    <input type="hidden" name="old_image" value="{{$row->image ?? '' }}" />
    <input type="hidden" name="sku" value="{{$row->sku ?? '' }}" />

    <x-admin.form.dropdown ref="attribute_id" title="Attribute" onchange="getAtributeValues(this.value)" :options="$attributes" selected="{{$row ? $row->attribute_id : old('attribute_id')}}" class="col-md-4" />
    <x-admin.form.dropdown ref="attribute_value_id" title="Attribute value" :options="$xvalues" selected="{{$row ? $row->attribute_value_id : old('attribute_value_id')}}" class="col-md-4" />

    <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-2" />
    <x-admin.form.dropdown
      ref="is_active"
      title="Is Active"
      :options="get_yes_no_options()"
      selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-2" />

    <x-admin.form.input ref="cost" title="Cost" value="{{$row ? $row->cost : old('cost')}}" required=1 class="col-md-3" />
    <x-admin.form.input ref="price" title="Price" value="{{$row ? $row->price : old('price')}}" required=1 class="col-md-3" />
    <x-admin.form.input ref="sale_price" title="Sale Price" value="{{$row ? $row->sale_price : old('sale_price')}}" required=1 class="col-md-3" />
    <x-admin.form.input type="number" ref="image" type="file" title="Image" value="{{$row ? $row->image : old('image')}}" required=1 class="col-md-3" />
    
    <div class="text-end">
      <button class="btn btn-primary float-end">Submit</button>
    </div>
  </div>
</form>