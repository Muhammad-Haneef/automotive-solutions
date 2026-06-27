<form method="post"
    action="{{ $row ? route('admin.update-' . $rsn, [$pid, $row->id]) : route('admin.create-' . $rsn, [$pid]) }}"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tab" value="faqs" />
    <div class="row g-3">
        <x-admin.form.input ref="product_id" type="hidden" value="{{ $pid }}" />

        <x-admin.form.input ref="title" title="Section Title" value="{{ $row ? $row->title : old('title') }}"
            required=1 />
        <x-admin.form.textarea ref="description" rows="3" title="Description"
            value="{{ $row ? $row->description : old('description') }}" />

        <x-admin.form.dropdown ref="show_title" title="Show Section Title" :options="get_yes_no_options()"
            selected="{{ $row ? $row->show_title : old('show_title', 1) }}" class="col-md-2" />
        <x-admin.form.dropdown ref="show_video_title" title="Show Videos Title" :options="get_yes_no_options()"
            selected="{{ $row ? $row->show_video_title : old('show_video_title', 1) }}" class="col-md-2" />
        <x-admin.form.dropdown ref="show_description" title="Show Section Description" :options="get_yes_no_options()"
            selected="{{ $row ? $row->show_description : old('show_description', 1) }}" class="col-md-2" />
        <x-admin.form.dropdown ref="per_row" title="Show Videos Per Row" :options="getShowVideosPerRowOptions()"
            selected="{{ $row ? $row->per_row : old('per_row', 3) }}" required=1 class="col-md-2" />

        <x-admin.form.input type="number" ref="sort_by" title="Sort By"
            value="{{ $row ? $row->sort_by : old('sort_by', 1) }}" class="col-md-2" />
        <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()"
            selected="{{ $row ? $row->is_active : old('is_active', 1) }}" class="col-md-2" />


        <div class="text-end">
            <button class="btn btn-primary float-end">Submit</button>
        </div>
    </div>
</form>
