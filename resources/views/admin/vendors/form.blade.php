<x-layouts.admin>
    <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.create-' . $rsn) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gy-3">

                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                        <x-admin.form.image ref="logo"
                                            preview="{{ $row && $row->logo ? $row->logo : '' }}" :index="0" />
                                        <div class="flex-grow-1 mt-0">
                                            <h5>
                                                @if ($row && $row->title)
                                                    {{ $row->title }}
                                                @else
                                                    <span class="first_name_0">Business </span><span
                                                        class="last_name_0">Name</span>
                                                @endif
                                            </h5>
                                            <p class="email_add_0">{{ $row->email ?? 'example@store.com' }}</p>
                                        </div>
                                    </div>
                                </div>



                                <x-admin.form.input ref="website" title="Business Website" type="text"
                                    value="{{ $row ? $row->website : old('website') }}" />

                                <x-admin.form.input ref="email" title="Business Email" type="text"
                                    value="{{ $row ? $row->email : old('email') }}" />

                                <x-admin.form.input ref="contact" title="Business Contact" type="text"
                                    value="{{ $row ? $row->contact : old('contact') }}" />

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
                                <x-admin.form.input ref="title" title="Business Name" type="text"
                                    value="{{ $row ? $row->title : old('title') }}" required=1 class="col-md-6" />
                                <x-admin.form.input ref="slug" title="Slug" type="text"
                                    value="{{ $row ? $row->slug : old('slug') }}" required=1 class="col-md-6" />
                                <x-admin.form.input ref="address" title="Address" type="text"
                                    value="{{ $row ? $row->address : old('address') }}" required=1 />
                                <x-admin.form.dropdown ref="payment_method_id" title="Prefered Payment Method"
                                    :options="$payment_methods"
                                    selected="{{ $row ? $row->payment_method_id : old('payment_method_id') }}"
                                    class="col-md-4" />
                                <x-admin.form.input type="number" ref="sort_by" title="Sort By"
                                    value="{{ $row ? $row->sort_by : old('sort_by', 1) }}" required=1
                                    class="col-md-4" />
                                <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()"
                                    selected="{{ $row ? $row->is_active : old('is_active', 1) }}" class="col-md-4" />
                                <x-admin.form.editor ref="description" title="Description" :content="$row->description ?? old('description')"
                                    rpws={30} />
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
