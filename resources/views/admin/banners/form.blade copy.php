<x-layouts.admin>

  <form method="post" action="{{$row ? route('admin.update-'.$rsn, [$row->id ?? '#']) : route('admin.create-'.$rsn)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <x-admin.card-header title="Banner" route="{{$rpn}}" />

          <div class="card-body">
            <div class="row g-3">

              <x-admin.form.input ref="title" title="Title" value="{{$row ? $row->title : old('title')}}" required=1 class="col-md-8" />

              <div class="col-md-4">
                <label class="form-label" for="banner_location_id">
                  Banner Location <i class="fa fa-eye text-danger" onclick="viewBannerLocation()"></i>
                </label>
                <select class="form-select" name="banner_location_id" id="banner_location_id">
                  <option value="0">--select--</option>
                  @foreach ($locations as $l)
                  <option value="{{ $l->id }}"
                    {{ (isset($row) && $row->banner_location_id == $l->id) || old('banner_location_id') == $l->id ? 'selected' : '' }}>
                    {{ $l->title }}
                  </option>
                  @endforeach
                </select>
                @error('banner_location_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <x-admin.form.input ref="description" title="Description" value="{{$row ? $row->description : old('description')}}" required=1 />

              <x-admin.form.dropdown
                ref="display"
                title="Display As"
                :options="getBannerDisplayStyles()"
                selected="{{$row ? $row->display : old('display')}}"
                class="col-md-3" />


              <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-3" />
              <x-admin.form.dropdown
                ref="is_active"
                title="Is Active"
                :options="get_yes_no_options()"
                selected="{{$row ? $row->is_active : old('is_active', 1)}}"
                class="col-md-3" />

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
                <input type="hidden" value="1" id="counter" />
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

                    @if($row && $row->images.length)
                    <?php $i = 1; ?>
                    @foreach($row->images as $img)
                    <tr id="row_<?= $i ?>">
                      <td>
                        <input type="hidden" id="counter" value="<?= $i ?>" />
                        <input name="image_alt[]" class="form-control" type="text" value="{{$img->image_alt}}" />
                      </td>
                      <td><input name="image_link[]" class="form-control" type="text" value="{{$img->image_link}}" /></td>
                      <td>
                        <input name="old_image[]" class="form-control" type="hidden" value="{{$row ?? $row->image_url || ''}}" />
                        <input name="image_url[]" id="banner_image1" onchange="showPreview('banner_image1', '.banner_preview1')" class="form-control" type="file" accept="image/*" tabindex="10">
                      </td>
                      <td>
                        <div id="banner_preview_con" class="row banner_preview<?= $i ?>"></div>
                      </td>
                      <td>
                        <input name="image_sort_by[]" class="form-control" value="{{$img->image_sort_by}}" type="number" min="0" />
                      </td>
                      <td> </td>
                    </tr>
                    @endforeach
                    @else
                    <tr id="row_1">
                      <td>
                        <input type="hidden" id="counter" value="1" />
                        <input name="image_alt[]" class="form-control" type="text" />
                      </td>
                      <td><input name="image_link[]" class="form-control" type="text" value="#" /></td>
                      <td>
                        <input name="old_image[]" class="form-control" type="hidden" value="{{$row ?? $row->image_url || ''}}" />
                        <input name="image_url[]" id="banner_image1" onchange="showPreview('banner_image1', '.banner_preview1')" class="form-control" type="file" accept="image/*" tabindex="10">
                      </td>
                      <td>
                        <div id="banner_preview_con" class="row banner_preview1"></div>
                      </td>
                      <td>
                        <input name="image_sort_by[]" class="form-control" value="0" type="number" min="0" />
                      </td>
                      <td> </td>
                    </tr>
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5">
                        @error("image_url.*")
                        <div class="text-danger fw-normal">{{$message}}</div>
                        @enderror
                      </td>
                      <td>
                        <button type="button" onclick="addMore();" title="add more image" class="btn btn-dark"><i class="fa fa-plus-circle"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5">
                        <button type="submit" name="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Create Banner"><i class="fa fa-ok"></i> Submit</button>
                      </td>
                      <td>
                      </td>
                    </tr>
                  </tfoot>
                </table>
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

      } else {
        iziToast.error({
          title: 'Watning',
          message: "Please select location first.",
          position: 'center'
        });
      }
    }

    function addMore() {
      var counter = parseInt($('#counter').val()) + 1;
      var brow = '<tr id="banner_row_' + counter + '">' +
        '<td><input name="image_alt[]" class="form-control" type="text"></td>' +
        '<td><input name="image_link[]" class="form-control" value="#" type="text"></td>' +
        '<td><input name="image_url[]" id="banner_image' + counter + '" onchange="showPreview(\'banner_image' + counter + '\', \'.banner_preview' + counter + ' \')" class="form-control padding0 form-control-file" accept="image/*" tabindex="10" type="file"></td>' +
        '<td><div id="banner_preview_con" class="row add_banner_img banner_preview' + counter + ' w100"></div></td>' +
        '<td><input name="image_sort_by[]" class="form-control" value="0" min="0" type="number"></td>' +
        '<td><button type="button" title="remove banner image" onclick="remove_row(\'banner\',' + counter + ');" class="btn btn-danger" ><i class="fa fa-minus-circle"></i></button></td>' +
        '</tr>';
      $('#banners').append(brow);
      $('#counter').val(counter);
    }

    function remove_row(ref, id) {
      var deleted = $("#deleted_" + ref).val();
      $("#deleted_" + ref).val(deleted + ',' + id);
      $("#" + ref + "_row_" + id).remove();
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
        $(preview_area).append('<div class="' + col + '"><img class="img-responsive thumbnail" src="' + objectUrl + '" /></div>');
        window.URL.revokeObjectURL(fileList[i]);
      }
    }
  </script>
  @endsection

</x-layouts.admin>