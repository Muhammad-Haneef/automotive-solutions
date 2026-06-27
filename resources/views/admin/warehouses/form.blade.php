<x-layouts.admin>
    <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.create-' . $rsn) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Warehouse Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">

                                <x-admin.form.input ref="title" title="Name" type="text"
                                    value="{{ $row ? $row->title : old('title') }}" required=1 />


                                <x-admin.form.dropdown ref="system_user_id" title="Manager" :options="$systemUsers"
                                    selected="{{ $row ? $row->system_user_id : old('system_user_id') }}" field="name"
                                    class="col-md-6" />

                                <x-admin.form.input ref="contact" title="Contact" type="text"
                                    value="{{ $row ? $row->contact : old('contact') }}" required=1 class="col-md-6" />

                                <x-admin.form.input ref="address" title="Address" type="text"
                                    value="{{ $row ? $row->address : old('address') }}" required=1 />
                                <x-admin.form.input ref="postal_code" title="Postal Code" type="text"
                                    value="{{ $row ? $row->postal_code : old('postal_code') }}" required=1
                                    class="col-md-3" />
                                <x-admin.form.input ref="city" title="City" type="text"
                                    value="{{ $row ? $row->city : old('city') }}" required=1 class="col-md-3" />
                                <x-admin.form.input ref="state" title="State" type="text"
                                    value="{{ $row ? $row->state : old('state') }}" required=1 class="col-md-3" />
                                <x-admin.form.input ref="country" title="Country" type="text"
                                    value="{{ $row ? $row->country : old('country') }}" required=1 class="col-md-3" />


                                <x-admin.form.input ref="latitude" title="Latitude" type="text"
                                    value="{{ $row ? $row->latitude : old('latitude') }}" required=1 class="col-md-3" />
                                <x-admin.form.input ref="longitude" title="Longitude" type="text"
                                    value="{{ $row ? $row->longitude : old('longitude') }}" required=1
                                    class="col-md-3" />
                                <x-admin.form.input ref="capacity" title="Capacity" type="text"
                                    value="{{ $row ? $row->capacity : old('capacity') }}" required=1
                                    class="col-md-3" />
                                <x-admin.form.input ref="current_stock" title="Current Stock" type="text"
                                    value="{{ $row ? $row->current_stock : old('current_stock') }}" required=1
                                    class="col-md-3" />

                                <x-admin.form.input type="number" ref="sort_by" title="Sort By"
                                    value="{{ $row ? $row->sort_by : old('sort_by', 1) }}" required=1
                                    class="col-md-3" />
                                <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()"
                                    selected="{{ $row ? $row->is_active : old('is_active', 1) }}" class="col-md-3" />


                                <x-admin.form.dropdown ref="show_on_front" title="Show on Front" :options="get_yes_no_options()"
                                    selected="{{ $row ? $row->show_on_front : old('show_on_front', 1) }}"
                                    class="col-md-3" />
                                <x-admin.form.dropdown ref="show_description_on_front" title="Show Description on Front"
                                    :options="get_yes_no_options()"
                                    selected="{{ $row ? $row->show_description_on_front : old('show_description_on_front', 1) }}"
                                    class="col-md-3" />

                            </div>
                        </div>
                        <x-admin.card-footer>
                            <a href="{{ route('admin.' . $rpn) }}" class="btn btn-secondary align-self-start">View
                                All</a>
                        </x-admin.card-footer>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </form>

</x-layouts.admin>
