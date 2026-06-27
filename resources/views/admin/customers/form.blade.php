<x-layouts.admin>
    <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.create-' . $rsn) }}"
        enctype="multipart/form-data">
        <input type="hidden" name="type" value="1" />
        @csrf

        <div class="edit-profile">
            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Customer Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <x-admin.form.input ref="name" title="Name" type="text"
                                    value="{{ $row ? $row->name : old('name') }}" required=1 class="col-md-4" />
                                <x-admin.form.input ref="email" title="Email" type="email"
                                    value="{{ $row ? $row->email : old('email') }}" required=1 class="col-md-4" />
                                <x-admin.form.input ref="password" title="Password" type="password" value=""
                                    required=1 class="col-md-4" />


                                <x-admin.form.dropdown ref="user_group_id" title="Customer Group" :options="$userGroups"
                                    selected="{{ $row ? $row->user_group_id : old('user_group_id') }}"
                                    class="col-md-3" />

                                <x-admin.form.input ref="contact" title="Phone" type="text"
                                    value="{{ $row ? $row->contact : old('contact') }}" required=1 class="col-md-3" />
                                <x-admin.form.input ref="dob" title="DOB" type="date"
                                    value="{{ $row ? $row->dob : old('dob') }}" class="col-md-3" />

                                <x-admin.form.dropdown ref="gender" title="Gender" :options="getGenders()"
                                    selected="{{ $row ? $row->gender : old('gender') }}" class="col-md-3" />

                                <x-admin.form.dropdown ref="account_status" title="Account Status" :options="getAccountStatus()"
                                    selected="{{ $row ? $row->account_status : old('account_status') }}" required=1
                                    class="col-md-3" />

                                <x-admin.form.input type="number" ref="sort_by" title="Sort By"
                                    value="{{ $row ? $row->sort_by : old('sort_by', 1) }}" required=1
                                    class="col-md-3" />
                                <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()"
                                    selected="{{ $row ? $row->is_active : old('is_active', 1) }}" class="col-md-3" />

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
