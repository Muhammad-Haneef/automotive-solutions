<form method="post" action="{{$row ? route('admin.update-'.$rsn, [$pid, $row->id]) : route('admin.create-'.$rsn, [$pid])}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="tab" value="faqs" />
  <div class="row g-3">
    <x-admin.form.input ref="product_id" type="hidden" value="{{$pid}}" />
    <x-admin.form.input ref="q" title="Question" value="{{$row ? $row->q : old('q')}}" required=1 class="col-md-8" />
    <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-2" />
    <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-2" />
    <x-admin.form.textarea ref="a" rows="2" type="textarea" title="Answer" value="{{$row ? $row->a : old('a')}}" required=1 />
    <div class="text-end">
      <button class="btn btn-primary float-end">Submit</button>
    </div>
  </div>
</form>