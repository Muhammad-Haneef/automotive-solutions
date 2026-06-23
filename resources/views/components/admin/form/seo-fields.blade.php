<div class="row g-3 e-category">
    <div class="col-12">
        <div class="main-divider">
            <div class="divider-body">
                <h6>SEO Tags</h6>
            </div>
        </div>
    </div>
    <x-admin.form.input ref="meta_title" title="Meta Title" type="text" value="{{$title}}" class="col-md-6" />
    <x-admin.form.input ref="meta_keywords" title="Meta Keywords" type="text" value="{{$keywords}}" class="col-md-6" />
    <x-admin.form.textarea ref="meta_description" title="Meta Description" type="text" value="{{$description}}" class="col-md-12" />
</div>