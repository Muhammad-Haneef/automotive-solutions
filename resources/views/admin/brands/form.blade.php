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
                                                    <span class="first_name_0">Example </span><span class="last_name_0">
                                                        Brand</span>
                                                @endif
                                            </h5>
                                            <p class="email_add_0">{{ $row->email ?? 'example@brand.com' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <x-admin.form.input ref="website" title="Website" type="text"
                                    value="{{ $row ? $row->website : old('website') }}" />

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Contact Person
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <x-admin.form.input ref="contact_person" title="Name" type="text"
                                    value="{{ $row ? $row->contact_person : old('contact_person') }}" />
                                <x-admin.form.input ref="contact_email" title="Email" type="email"
                                    value="{{ $row ? $row->contact_email : old('contact_email') }}" />
                                <x-admin.form.input ref="contact_phone" title="Phone" type="text"
                                    value="{{ $row ? $row->contact_phone : old('contact_phone') }}" />
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

                                <x-admin.form.input ref="title" title="Name" type="text"
                                    value="{{ $row ? $row->title : old('title') }}" required=1 class="col-md-6" />
                                <x-admin.form.input ref="slug" title="Slug" type="text"
                                    value="{{ $row ? $row->slug : old('slug') }}" required=1 class="col-md-6" />
                                <x-admin.form.input ref="address" title="Address" type="text"
                                    value="{{ $row ? $row->address : old('address') }}" class="col-md-9" />
                                <x-admin.form.input ref="email" title="Email" type="email"
                                    value="{{ $row ? $row->email : old('email') }}" class="col-md-3" />
                                <x-admin.form.textarea ref="about" title="About Brand"
                                    value="{{ $row ? $row->about : old('about') }}" />

                                <x-admin.form.input type="number" ref="sort_by" title="Sort By"
                                    value="{{ $row ? $row->sort_by : old('sort_by', 1) }}" class="col-md-3" />
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
