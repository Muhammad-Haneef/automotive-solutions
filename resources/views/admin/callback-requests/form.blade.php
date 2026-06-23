<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="Callback Requests" route="callback-requests" />

          <div class="card-body">
            <div class="row g-3">

              <x-admin.form.input ref="name" title="Name" value="{{$row ? $row->name : old('name')}}" required=1 class="col-md-4" />
              <x-admin.form.input ref="email" title="Email" type="email" value="{{$row ? $row->email : old('email')}}" required=1 class="col-md-4" />
              <x-admin.form.input ref="contact" title="Contact" value="{{$row ? $row->contact : old('contact')}}" required=1 class="col-md-4" />
              <x-admin.form.textarea ref="message" title="Message" value="{{$row ? $row->message : old('message')}}" />

              <x-admin.form.dropdown
                ref="status"
                title="Status"
                :options="getCallbackStatus()"
                selected="{{$row ? $row->status : old('status')}}"
                class="col-md-3" />

              <x-admin.form.dropdown
                ref="handled_by"
                title="Handled By"
                :options="$systemUsers"
                selected="{{$row ? $row->handled_by : old('v')}}"
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