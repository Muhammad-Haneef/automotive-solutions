<x-layouts.admin>
  <form method="post" action="{{$row ? route('admin.update-'.$rsn, [$row->id]) : route('admin.create-'.$rsn)}}">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="FAQ" route="faqs" />

          <div class="card-body">
            <div class="row g-3">
              <x-admin.form.input ref="q" title="Question" value="{{$row ? $row->q : old('q')}}" required=1 class="col-md-12" />
              <x-admin.form.textarea ref="a" type="textarea" title="Answer" value="{{$row ? $row->a : old('a')}}" required=1 class="col-md-12" />
              <x-admin.form.dropdown ref="faq_category_id" title="Category" :options="$categories" selected="{{$row ? $row->faq_category_id : old('faq_category_id')}}" required=1 class="col-md-4" />
              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-4" />
              <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-4" />
            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
    </div>
  </form>

</x-layouts.admin>