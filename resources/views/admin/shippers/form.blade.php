<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, [$row->id]) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="edit-profile">
      <div class="row">
        <div class="col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="row gy-3">
                <div class="d-flex  align-items-center mb-3">
                  <img class="img-100 img-fluid m-r-20 rounded-circle shadow-sm update_img_0"
                    src="{{ asset($row && $row->logo ? 'storage/' . $row->logo : 'assets/images/placeholder_120x120.jpg') }}"
                    alt="" />
                    <input class="updateimg" type="file" name="logo" onchange="readURL(this,0)" accept="image/*">
                  <div class="flex-grow-1 mt-0">
                    <h5>
                      @if ($row && $row->title)
                      {{ $row->title }}
                      @else
                      <span class="first_name_0">John </span><span class="last_name_0">Doe</span>
                      @endif
                    </h5>
                    <p class="email_add_0">{{ $row->email ?? 'example@email.com' }}</p>
                  </div>
                </div>

                <x-admin.form.input ref="email" title="Company Email" type="email" value="{{$row ? $row->email : old('email')}}" required=1 />
                <x-admin.form.input ref="website" title="Website" type="text" value="{{$row ? $row->website : old('website')}}" />
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              Contact Person
            </div>
            <div class="card-body">
              <div class="row gy-3">
                <x-admin.form.input ref="contact_person" title="Name" type="text" value="{{$row ? $row->contact_person : old('contact_person')}}" required=1 />
                <x-admin.form.input ref="contact_email" title="Email" type="email" value="{{$row ? $row->contact_email : old('contact_email')}}" required=1 />
                <x-admin.form.input ref="contact_phone" title="Phone" type="text" value="{{$row ? $row->contact_phone : old('contact_phone')}}" required=1 />
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Other Information</h5>
            </div>
            <div class="card-body">
              <div class="row gy-3">

                <x-admin.form.input ref="title" title="Company Name" type="text" value="{{$row ? $row->title : old('title')}}" required=1 />

                <x-admin.form.input ref="tracking_url" title="Tracking URL" type="text" value="{{$row ? $row->tracking_url : old('tracking_url')}}" class="" />
                <x-admin.form.input ref="min_delivery_time" title="Min Delivery Time" type="text" value="{{$row ? $row->min_delivery_time : old('min_delivery_time')}}" class="col-md-4" />
                <x-admin.form.input ref="max_delivery_time" title="Min Delivery Time" type="text" value="{{$row ? $row->max_delivery_time : old('max_delivery_time')}}" class="col-md-4" />
                <x-admin.form.dropdown ref="cost_type" title="Cost Type" :options="getShippingCostTypes()" selected="{{$row ? $row->cost_type : old('cost_type')}}" class="col-md-4" />

                <x-admin.form.input ref="base_shipping_cost" title="Base Shipping Cost" type="text" value="{{$row ? $row->base_shipping_cost : old('base_shipping_cost')}}" class="col-md-4" />
                <x-admin.form.input ref="additional_cost_per_kg" title="Additional Cost Per kg" type="text" value="{{$row ? $row->additional_cost_per_kg : old('additional_cost_per_kg')}}" class="col-md-4" />
                <x-admin.form.input ref="additional_cost_per_km" title="Additional Cost Per km" type="text" value="{{$row ? $row->additional_cost_per_km : old('additional_cost_per_km')}}" class="col-md-4" />

                <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-3" />

                <x-admin.form.dropdown
                  ref="is_active"
                  title="Is Active"
                  :options="get_yes_no_options()"
                  selected="{{$row ? $row->is_active : old('is_active', 1)}}"
                  class="col-md-3" />

                <x-admin.form.textarea ref="about" title="About Shipper" value="{{$row ? $row->about : old('about')}}" />

              </div>
            </div>
            <x-admin.card-footer>
              <a href="{{route($rpn)}}" class="btn btn-secondary align-self-start">View All</a>
            </x-admin.card-footer>
          </div>
        </div>
      </div>
    </div>


    </div>
  </form>

</x-layouts.admin>