<x-layouts.admin>

  <form method="post" action="{{route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">

      <div class="col-sm-9">
        <div class="card">
          <div class="card-header border-t-danger">
            <h5>Product Add</h5>
          </div>

          <div class="card-body add-post">
            <div class="row g-3">
              <x-admin.form.input ref="title" title="Title" type="text" value="{{old('title')}}" required=1 />
              <x-admin.form.input ref="slug" title="Slug" type="text" value="{{old('slug')}}" required=1 />
              <x-admin.form.dropdown ref="category_id" title="Category" :options="$categories" selected="{{old('category_id')}}" />
              <x-admin.form.textarea ref="excerpt" title="Excerpt" rows="2" value="{{old('excerpt')}}" />
              <x-admin.form.editor ref="description" title="Description" :content="old('description')" />
            </div>
            <x-admin.form.seo-fields
              :title="old('title')"
              :keywords="old('keywords')"
              :description="old('description')" />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <x-admin.form.input ref="price" title="Price" type="text" value="{{old('price')}}" required=1 class="col-md-12 mb-3" />
            <x-admin.form.input ref="sale_price" title="Sale Price" type="text" value="{{old('sale_price')}}" required=1 />
          </div>
        </div>

        <x-admin.form.image-widget title="Thumbnail"  oldImage="{{$row ? $row->thumbnail : ''}}" ref="thumbnail" />
        <x-admin.form.image-widget title="Thumbnail on Hover"  oldImage="{{$row ? $row->thumbnail2 : ''}}" ref="thumbnail2" />

      </div>

    </div>

    <div class="col-sm-12">
      <div class="card">
          <x-admin.card-footer />
      </div>
    </div>

  </form>

</x-layouts.admin>