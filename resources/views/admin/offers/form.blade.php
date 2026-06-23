<x-layouts.admin>


  <?php
  //echo "<pre>";
  //print_r($row->items);
  ?>

  <form method="post" action="{{$row ? route('admin.update-'.$rsn, $row->id) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header border-t-danger">
            <h5>Offer Add</h5>
          </div>
          <div class="card-body add-post">
            <div class="row g-3">
              <x-admin.form.input ref="title" title="Title" type="text" value="{{$row->title ?? old('title')}}" required=1 />
              <x-admin.form.textarea ref="description" title="Description" rows=2 :value="$row->description ?? old('description')" />

              <div class="col-md-4">
                <label class="mb-1">Discount</label>
                <div class="input-group">
                  <input class="form-control" name="discount" id="discount" type="text" placeholder="Discount" value="{{$row->discount ?? old('discount')}}" />
                  <span class="input-group-text p-0">
                    <select class="form-select border-0 bg-transparent w-auto px-3  pe-5" name="discount_type" id="discount_type">
                      <option value="Flat" @selected(($row->type ?? old('type')) == "Flat")>Flat</option>
                      <option value="%" @selected(($row->type ?? old('type')) == "%")>%</option>
                    </select>
                  </span>
                </div>
              </div>

              <x-admin.form.input ref="start_date" title="Start Date" type="datetime-local" value="{{$row->start_date ?? old('start_date')}}" required=1 class="col-md-4" />
              <x-admin.form.input ref="end_date" title="End Date" type="datetime-local" value="{{$row->end_date ?? old('end_date')}}" required=1 class="col-md-4" />

              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-4" />

              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-4" />

              <x-admin.form.dropdown
                ref="offer_scope"
                title="Offer Scope"
                required=1
                :options="getOfferTypes()"
                selected="{{$row ? $row->offer_scope : old('offer_scope')}}"
                onchange="getOfferItemsList()" />

              <x-admin.form.dropdown
                ref="offer_items[]"
                title="Offer Items"
                :options="$xItems"
                :selected="$row ? $xSelected : old('offerItems', [])"
                class="col-md-12" />


            </div>
          </div>
          <x-admin.card-footer />
        </div>
      </div>
      <div class="col-sm-3">

        <x-admin.form.image-widget title="Image" oldImage="{{$row ? $row->image : ''}}" ref="image" />

      </div>
    </div>
  </form>


  @section('exfooter')
  <script>
    function getOfferItemsList() {
      let offerType = $("#offer_scope").val();
      let offerItems = $("#offer_items");
      // Reset the options correctly
      offerItems.html('<option value="">--select--</option>');
      if (!offerType) return; // Exit early if no offerType is selected
      $.ajax({
        url: "{{ route('admin.get-offer-items-by-type', '') }}/" + encodeURIComponent(offerType),
        method: "GET",
        dataType: "json",
        success: function(items) {
          if (Array.isArray(items) && items.length) {
            items.forEach(item => {
              offerItems.append(
                $("<option>", {
                  value: item.id,
                  text: item.title
                })
              );
            });
          } else {
            console.warn("No items found.");
          }
        },
        error: function(xhr, status, error) {
          console.error("Error fetching data:", xhr.responseText || error);
        }
      });
    }
  </script>
  @endsection


</x-layouts.admin>