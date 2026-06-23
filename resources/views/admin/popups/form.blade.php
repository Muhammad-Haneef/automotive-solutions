<x-layouts.admin>

  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header border-t-danger">
            <h5>Popup Add</h5>
          </div>
          <div class="card-body add-post">
            <div class="row g-3">
              <x-admin.form.input ref="title" title="Title" type="text" value="{{$row->title ?? old('title')}}" required=1 />
              <x-admin.form.input ref="link" title="Link" type="text" value="{{$row->link ?? old('link')}}" required=1 />

              <x-admin.form.dropdown
                ref="display_pages[]"
                title="Display Pages"
                :options="$pages"
                :selected="$row ? explode(',', $row->display_pages) : old('display_pages', [])"
                class="col-md-12" />

              <x-admin.form.input ref="start_date" title="Start Date" type="date" value="{{$row->start_date ?? old('start_date')}}" required=1 class="col-md-3" />
              <x-admin.form.input ref="end_date" title="End Date" type="date" value="{{$row->end_date ?? old('end_date')}}" required=1 class="col-md-3" />


              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-3" />

              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-3" />

            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>

      <div class="col-sm-3">
        <x-admin.form.image-widget title="Popup Image" oldImage="{{$row ? $row->image : ''}}" ref="image" />
      </div>

    </div>
  </form>

</x-layouts.admin>