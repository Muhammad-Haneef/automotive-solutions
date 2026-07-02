<x-layouts.admin>

    <form method="post" action="{{ $row ? route('admin.update-' . $rsn, $row->id) : route('admin.create-' . $rsn) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="card">



                    <div class="card-header border-t-danger">
                        <ul class="simple-wrapper nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active " id="general-info-tab" data-bs-toggle="tab"
                                    href="#general-info" role="tab" aria-controls="general-info"
                                    aria-selected="true">
                                    General Information
                                </a>
                            </li>
                            @if ($row)
                            <li class="nav-item">
                                <a class="nav-link" id="faqs-tab" data-bs-toggle="tab" href="#faqs"
                                    role="tab" aria-controls="faqs" aria-selected="false">
                                    Page Faqs
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-body add-post">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general-info" role="tabpanel"
                                aria-labelledby="general-info-tab">

                                <div class="row g-3">
                                    <x-admin.form.input ref="title" title="Title" type="text"
                                        value="{{ $row->title ?? old('title') }}" required=1 />
                                    <x-admin.form.input ref="slug" title="Slug" type="text"
                                        value="{{ $row->slug ?? old('slug') }}" required=1 />
                                    <x-admin.form.textarea ref="excerpt" title="Excerpt" rows="2"
                                        value="{{ old('excerpt', $row->excerpt ?? '') }}" required=1 />
                                    <x-admin.form.editor ref="content" title="Description" :content="$row->content ?? old('content')" />
                                </div>
                                <x-admin.form.seo-fields :title="old('meta_title', $row->meta_title ?? '')" :keywords="old('meta_keywords', $row->meta_keywords ?? '')" :description="old('meta_description', $row->meta_description ?? '')" />
                                <div class="pt-4 mt-4 border-top border-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn btn-secondary" href="{{ route('admin.' . $rpn) }}">
                                                Back
                                            </a>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-primary" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @if ($row)
                            <div class="tab-pane fade" id="faqs" role="tabpanel" aria-labelledby="faqs-tab">
                                <x-admin.associated-faqs />
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary d-block" type="submit">Publish</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-t-danger">
                        <div class="fw-bold f-16">Categories</div>
                    </div>
                    <div class="card-body max-h-200">
                        @if (!empty($categories) && count($categories))
                        <x-admin.form.radio-buton-list ref="blog_category_id" :options="$categories" :selected="$row ? $row->blog_category_id : 0" />
                        @else
                        <p>
                            Please <a href="{{ url('/admin/blog-categories') }}" target="_blank">add a blog
                                category</a> to select
                            one.
                        </p>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-t-danger">
                        <div class="fw-bold f-16">Tags</div>
                    </div>
                    <div class="card-body max-h-200">
                        @if (!empty($tags) && count($tags))
                        <x-admin.form.checkbox-list ref="tags[]" :options="$tags" :selected="$row ? explode(',', $row->tags) : []" />
                        @else
                        <p>
                            Please <a href="{{ url('/admin/tags') }}" target="_blank">add tags</a> to select them.
                        </p>
                        @endif
                    </div>
                </div>

                <x-admin.form.image-widget title="Feature Image" oldImage="{{ $row ? $row->image : '' }}"
                    ref="image" />

            </div>
        </div>
    </form>

</x-layouts.admin>