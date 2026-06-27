<x-layouts.admin>

    <form method="post" action="{{ $row ? route('admin.update-' . $rsn, $row->id) : route('admin.create-' . $rsn) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header border-t-danger">
                        <h5>Product Category Add</h5>
                    </div>
                    <div class="card-body add-post">
                        <div class="row g-3">
                            <x-admin.form.input ref="title" title="Title" type="text"
                                value="{{ $row->title ?? old('title') }}" required=1 />
                            <x-admin.form.input ref="slug" title="Slug" type="text"
                                value="{{ $row->slug ?? old('slug') }}" required=1 />
                            <x-admin.form.dropdown ref="parent_id" title="Parent category" :options="$categories"
                                selected="{{ $row ? $row->parent_id : old('parent_id') }}" />
                            <x-admin.form.editor ref="content" title="Description" :content="$row->content ?? old('content')" rpws={30} />

                            <x-admin.form.dropdown ref="show_banner" title="Show Banner" :options="get_yes_no_options()"
                                selected="{{ $row ? $row->show_banner : old('show_banner', 1) }}" class="col-md-4" />

                            <x-admin.form.dropdown ref="show_description" title="Show Description" :options="get_yes_no_options()"
                                selected="{{ $row ? $row->show_description : old('show_description', 1) }}"
                                class="col-md-4" />


                            <x-admin.form.dropdown ref="show_description_at" title="Show Description At"
                                :options="[
                                    (object) ['id' => 0, 'title' => 'Top of Page'],
                                    (object) ['id' => 1, 'title' => 'Bottom of Page'],
                                ]" :selected="$row ? $row->show_description_at : old('show_description_at', 1)" class="col-md-4" />


                        </div>
                        <x-admin.form.seo-fields :title="old('title', $row->title ?? '')" :keywords="old('keywords', $row->keywords ?? '')" :description="old('description', $row->description ?? '')" />
                    </div>
                    <x-admin.card-footer />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary d-block" type="submit">Publish</button>
                    </div>
                </div>
                <x-admin.form.image-widget title="Icon" oldImage="{{ $row ? $row->icon : '' }}" ref="icon" />
                <x-admin.form.image-widget title="Thumbnail" oldImage="{{ $row ? $row->thumbnail : '' }}"
                    ref="thumbnail" />
                <x-admin.form.image-widget title="banner" oldImage="{{ $row ? $row->banner : '' }}" ref="banner" />
            </div>
        </div>
    </form>

</x-layouts.admin>
