<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="Courier Services Integrations" :route="$rpn" />

          <div class="card-body">
            <div class="row g-3">

              <x-admin.form.dropdown ref="courier_service_id" title="Courier Service" :options="$courierServices" selected="{{$row ? $row->courier_service_id : old('courier_service_id')}}" required=1 class="col-md-6" />

              <x-admin.form.input ref="api_user_name" title="API User Name" value="{{$row ? $row->api_user_name : old('api_user_name')}}" required=1 class="col-md-6" />

              <x-admin.form.input ref="api_key" title="API Key" value="{{$row ? $row->api_key : old('api_key')}}" required=1 class="col-md-6" />

              <x-admin.form.input ref="api_url" title="API URL" value="{{$row ? $row->api_url : old('api_url')}}" required=1 class="col-md-6" />

              <x-admin.form.input ref="tracking_url" title="Tracking URL" value="{{$row ? $row->tracking_url : old('tracking_url')}}" required=1 class="col-md-8" />

              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-2" />

              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}"
                class="col-md-2" />

            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
    </div>
  </form>

</x-layouts.admin>