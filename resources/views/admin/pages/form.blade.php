<x-layouts.admin>

  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header border-t-danger">
            <h5>Page Add</h5>
          </div>
          <div class="card-body add-post">
            <div class="row g-3">
              <x-admin.form.input ref="title" title="Title" type="text" value="{{$row->title ?? old('title')}}" required=1 />
              <x-admin.form.input ref="slug" title="Slug" type="text" value="{{$row->slug ?? old('slug')}}" required=1 />
              <x-admin.form.editor ref="content" title="Description" :content="$row->content ?? old('content')" />
            </div>
            <x-admin.form.seo-fields
              :title="old('title', $row->title ?? '')"
              :keywords="old('keywords', $row->keywords ?? '')"
              :description="old('description', $row->description ?? '')" />
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

        <x-admin.form.image-widget title="Feature Image" oldImage="{{$row ? $row->image : ''}}" ref="image" />

      </div>
    </div>
  </form>

</x-layouts.admin>