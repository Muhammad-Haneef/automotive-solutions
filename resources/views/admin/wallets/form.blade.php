<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="Wallets" route="wallets" />

          <div class="card-body">
            <div class="row g-3">

              <x-admin.form.dropdown ref="user_id" title="Customer" field="name" :options="$users" selected="{{$row ? $row->user_id : old('user_id')}}" required=1 class="col-md-4" />

              <x-admin.form.input ref="wallet_key" title="Wallet Key" value="{{$row ? $row->wallet_key : $wallet_key}}" required=1 class="col-md-4" readonly={true} />

              <x-admin.form.input ref="balance" title="Balance" value="{{$row ? $row->balance : old('balance')}}" required=1 class="col-md-4 float" />

              <x-admin.form.dropdown
                ref="status"
                title="Status"
                :options="getWalletStatus()"
                selected="{{$row ? $row->status : old('status')}}"
                class="col-md-4" />

              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-4" />

              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}"
                class="col-md-4" />

            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
    </div>
  </form>

</x-layouts.admin>