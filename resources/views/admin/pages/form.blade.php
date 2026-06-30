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
                <div class="card  border-t-danger">
                    <div class="card-body">
                        <button class="btn btn-primary d-block" type="submit">Submit</button>
                    </div>
                </div>

                <x-admin.form.image-widget title="Banner Image" oldImage="{{ $row ? $row->banner : '' }}"
                    ref="banner" />

            </div>
        </div>
    </form>

</x-layouts.admin>
