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
                      <span class="first_name_0">Payment Gateway Name</span>
                      @endif
                    </h5>
                  </div>
                </div>

                <x-admin.form.input ref="transaction_fee" title="Transaction Fee" type="text" value="{{$row ? $row->transaction_fee : old('transaction_fee')}}" />
                <x-admin.form.input ref="min_transaction" title="Min Transaction" type="text" value="{{$row ? $row->min_transaction : old('min_transaction')}}" />
                <x-admin.form.input ref="max_transaction" title="Max Transaction" type="text" value="{{$row ? $row->max_transaction : old('max_transaction')}}" />

                <x-admin.form.input ref="website" title="Website" type="text" value="{{$row ? $row->website : old('website')}}" />

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

                <x-admin.form.input ref="title" title="Payment Gateway Name" type="text" value="{{$row ? $row->title : old('title')}}" required=1 class="col-md-4" />
                <x-admin.form.input ref="merchant_id" title="Merchant ID" type="text" value="{{$row ? $row->merchant_id : old('merchant_id')}}" class="col-md-4" />
                <x-admin.form.input ref="callback_url" title="Callback URL" type="text" value="{{$row ? $row->callback_url : old('callback_url')}}" class="col-md-4" />

                <x-admin.form.input ref="api_key" title="API Key" type="text" value="{{$row ? $row->api_key : old('api_key')}}" />
                <x-admin.form.input ref="secret_key" title="Secret Key" type="text" value="{{$row ? $row->secret_key : old('secret_key')}}" />
                <x-admin.form.input ref="public_key" title="Public Key" type="text" value="{{$row ? $row->public_key : old('public_key')}}" />

                <x-admin.form.textarea ref="description" title="Description" value="{{$row ? $row->description : old('description')}}" />

                <x-admin.form.dropdown
                  ref="sandbox_mode"
                  title="On Sandbox Mode"
                  :options="get_yes_no_options()"
                  selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-4" />
                <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" class="col-md-4" />
                <x-admin.form.dropdown
                  ref="is_active"
                  title="Is Active"
                  :options="get_yes_no_options()"
                  selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-4" />

              </div>
            </div>
            <x-admin.card-footer>
              <a href="{{route('admin.' . $rpn)}}" class="btn btn-secondary align-self-start">View All</a>
            </x-admin.card-footer>
          </div>
        </div>
      </div>
    </div>


    </div>
  </form>

</x-layouts.admin>