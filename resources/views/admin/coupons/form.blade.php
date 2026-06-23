<x-layouts.admin>

  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header border-t-danger">
            <h5>Coupon Add</h5>
          </div>
          <div class="card-body add-post">
            <div class="row g-3">
              <x-admin.form.input ref="title" title="Title" type="text" value="{{$row->title ?? old('title')}}" required=1 />
              <x-admin.form.textarea ref="description" title="Description" rows=2 :value="$row->description ?? old('description')" />

              <div class="col-md-3">
                <label class="mb-1">Coupon Code</label>
                <div class="input-group">
                  <input class="form-control" name="code" id="code" type="text" placeholder="code" value="{{$row->code ?? old('code')}}" />
                  <button onclick="generateCode('#code');" class="btn btn-primary fa fa-refresh" type="button"></button>
                </div>
              </div>

              <div class="col-md-3">
                <label class="mb-1">Discount</label>
                <div class="input-group">
                  <input class="form-control" name="discount" id="discount" type="text" placeholder="Discount" value="{{$row->discount ?? old('discount')}}" />
                  <span class="input-group-text p-0">
                    <select class="form-select border-0 bg-transparent w-auto px-3  pe-5" name="type" id="type">
                      <option value="Flat" @selected(($row->type ?? old('type')) == "Flat")>Flat</option>
                      <option value="%" @selected(($row->type ?? old('type')) == "%")>%</option>
                    </select>
                  </span>
                </div>
              </div>


              <x-admin.form.input ref="minimum_spend" title="Minimum Spend" type="number" value="{{$row->minimum_spend ?? old('minimum_spend')}}" required=1 class="col-md-3" />
              <x-admin.form.input ref="usage_limit" title="Usage Limit (Per User)" type="number" value="{{$row->usage_limit ?? old('usage_limit')}}" required=1 class="col-md-3" />
              <x-admin.form.input ref="start_date" title="Start Date" type="datetime-local" value="{{$row->start_date ?? old('start_date')}}" required=1 class="col-md-3" />
              <x-admin.form.input ref="end_date" title="End Date" type="datetime-local" value="{{$row->end_date ?? old('end_date')}}" required=1 class="col-md-3" />
              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-3" class="col-md-3" />
              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-3" />

            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
      <div class="col-sm-3">
        <x-admin.form.image-widget title="Coupon Image" oldImage="{{$row ? $row->image : ''}}" ref="image" />
      </div>
    </div>
  </form>

</x-layouts.admin>