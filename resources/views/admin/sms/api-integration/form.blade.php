<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <x-admin.card-header title="SMS API Integration" :route="$rpn" />
          <div class="card-body">
            <div class="row g-3">
              <x-admin.form.dropdown ref="sms_gateway_id" title="SMS API Gateway" :options="$gateways" selected="{{$row ? $row->sms_gateway_id : old('sms_gateway_id')}}" required=1 class="col-md-4" />

              <x-admin.form.input ref="api_url" title="API URL" value="{{$row ? $row->api_url : old('api_url')}}" required=1 class="col-md-8" />

              <x-admin.form.input ref="api_user_name" title="API User Name" value="{{$row ? $row->api_user_name : old('api_user_name')}}" required=1 class="col-md-4" />

              <x-admin.form.input ref="api_key" title="API Key" value="{{$row ? $row->api_key : old('api_key')}}" required=1 class="col-md-4" />

              <x-admin.form.input type="password" ref="api_password" title="API Password" value="{{$row ? $row->api_password : old('api_password')}}" required=1 class="col-md-4" />

              <x-admin.form.input ref="mask" title="SMS Masking" value="{{$row ? $row->mask : old('mask')}}" class="col-md-3" />

              <x-admin.form.dropdown
                ref="is_default_gateway"
                title="Is Default SMS Gateway"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_default_gateway : old('is_default_gateway', 1)}}"
                class="col-md-3" />

                <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-3" />

                <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}"
                class="col-md-3" />

            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
    </div>
  </form>

</x-layouts.admin>