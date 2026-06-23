<x-layouts.admin>

  <form method="post" action="{{ $row ? route('admin.update-'.$rsn, [$row->id ?? '#']) : route('admin.create-'.$rsn) }}" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="Banner" route="{{ $rpn }}" />

          <div class="card-body">
            <div class="row g-3">

              <x-admin.form.input ref="title" title="Title" value="{{ old('title', $row->title ?? '') }}" required=1 class="col-md-8" />

              <div class="col-md-4">
                <label class="form-label" for="banner_location_id">
                  Banner Location <i class="fa fa-eye text-danger" onclick="viewBannerLocation()"></i>
                </label>
                <select class="form-select" name="banner_location_id" id="banner_location_id">
                  <option value="0">--select--</option>
                  @foreach ($locations as $l)
                  <option value="{{ $l->id }}" {{ ($row && $row->banner_location_id == $l->id) || old('banner_location_id') == $l->id ? 'selected' : '' }}>
                    {{ $l->title }}
                  </option>
                  @endforeach
                </select>
                @error('banner_location_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <x-admin.form.input ref="description" title="Description" value="{{ old('description', $row->description ?? '') }}" required=1 />

              <x-admin.form.dropdown ref="display" title="Display As" :options="getBannerDisplayStyles()" selected="{{ old('display', $row->display ?? '') }}" class="col-md-3" />

              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{ old('sort_by', $row->sort_by ?? 1) }}" required=1 class="col-md-3" />

              <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{ old('is_active', $row->is_active ?? 1) }}" class="col-md-3" />

            </div>
          </div>

          <div class="card-body main-divider">
            <div class="divider-body divider-body-2 divider-danger">
              <div class="divider-circle bg-light-danger"><i class="fa-solid fa-camera txt-danger"></i></div>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <input type="hidden" id="deleted_banner" name="deleted_banner" value="0" />
                <table class="table table-bordered">
                  <thead>
                    <tr class="tcenter">
                      <th class="col-md-3">Title</th>
                      <th class="col-md-3">Link</th>
                      <th class="col-md-2">Image</th>
                      <th class="col-md-2"></th>
                      <th class="col-md-1">Sort Order</th>
                      <th class="col-md-1">Active</th>
                    </tr>
                  </thead>
                  <tbody id="banners">
                    <?php $c=1 ?>
                    @foreach($row->images ?? [null] as $index => $img)
                    <tr id="banner_row_<?= $c ?>">
                      <td>
                        <input type="hidden" id="ids" name="ids[]" value="{{ $img->id ?? 0 }}" />
                        <input name="image_alt[]" class="form-control" type="text" value="{{ old('image_alt.' . $index, $img->image_alt ?? '') }}" />
                      </td>
                      <td>
                        <input name="image_link[]" class="form-control" type="text" value="{{ old('image_link.' . $index, $img->image_link ?? '#') }}" />
                      </td>
                      <td>
                        <input name="old_image[]" class="form-control" type="hidden" value="{{ $img->image_url ?? '' }}" />
                        <input name="image_url[]" id="banner_image<?= $c ?>" onchange="showPreview('banner_image<?= $c ?>', '.banner_preview<?= $c ?>')" class="form-control" type="file" accept="image/*">
                      </td>
                      <td>
                        <div id="banner_preview_con" class="row banner_preview<?= $c ?>">
                          @if($img && $img->image_url)
                          {{getImage($img->image_url, "100%", "100%")}}
                          @endif
                        </div>
                      </td>
                      <td>
                        <input name="image_sort_by[]" class="form-control" value="{{ old('image_sort_by.' . $index, $img->image_sort_by ?? '0') }}" type="number" min="0" />
                      </td>
                      <td>
                        <button type="button" onclick="remove_row(<?= $img->id ?? 0 ?>, <?= $c ?>);" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>
                      </td>
                    </tr>
                    <?php $c++ ?>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5">
                        @error("image_url.*")
                        <div class="text-danger fw-normal">{{ $message }}</div>
                        @enderror
                      </td>
                      <td>
                        <button type="button" onclick="addMore();" class="btn btn-dark"><i class="fa fa-plus-circle"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Submit</button>
                      </td>
                      <td></td>
                    </tr>
                  </tfoot>
                </table>
                <input type="hidden" id="counter" value="{{ $c }}" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>

  @section('exfooter')
  <script>
    function viewBannerLocation() {
      let lid = $("#banner_location_id").val();
      if (lid > 0) {
        // Your logic
      } else {
        iziToast.error({
          title: 'Warning',
          message: "Please select a location first.",
          position: 'center'
        });
      }
    }

    function addMore() {
      var counter = parseInt($('#counter').val()) + 1;
      var row = `
        <tr id="banner_row_${counter}">
          <td>
            <input type="hidden" id="ids" name="ids[]" value="0" />
            <input name="image_alt[]" class="form-control" type="text">
          </td>
          <td><input name="image_link[]" class="form-control" value="#" type="text"></td>
          <td>
            <input name="image_url[]" id="banner_image${counter}" onchange="showPreview('banner_image${counter}', '.banner_preview${counter}')" class="form-control" accept="image/*" type="file">
          </td>
          <td><div id="banner_preview_con" class="row banner_preview${counter}"></div></td>
          <td><input name="image_sort_by[]" class="form-control" value="0" min="0" type="number"></td>
          <td><button type="button" onclick="remove_row(0, ${counter});" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
        </tr>`;
      $('#banners').append(row);
      $('#counter').val(counter);
      alert(coun)
    }

    function remove_row(id, counter) {
      $("#deleted_banner").val($("#deleted_banner").val() + ',' + id);
      $("#banner_row_" + counter).remove();
    }



    function showPreview(id, preview_area) {
      var imageInput = document.getElementById(id);
      var fileList = imageInput.files;
      var col = 'col-md-12';
      var anyWindow = window.URL || window.webkitURL;
      $(preview_area).html('');
      if (fileList.length > 1) var col = 'col-md-3';
      for (var i = 0; i < fileList.length; i++) {
        var objectUrl = anyWindow.createObjectURL(fileList[i]);
        $(preview_area).append('<div class="' + col + '"><img class="img-fluid thumbnail" src="' + objectUrl + '" /></div>');
        window.URL.revokeObjectURL(fileList[i]);
      }
    }
  </script>
  @endsection

</x-layouts.admin>