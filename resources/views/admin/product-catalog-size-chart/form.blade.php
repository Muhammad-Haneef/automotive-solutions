<form method="post" class="shadow  p-3 mb-5" action="{{route('admin.store-'.$rpn,[$pid])}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="tab" value="gallery" />
  <div class="product-upload">
    <p>Product Gallery <i class="fa-solid fa-cloud-arrow-up fa-fade"></i></p>
    <div class="input-group">
      <input type="file" class="form-control" multiple name="files[]" id="files" aria-describedby="file" aria-label="Upload">
      <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04">Upload</button>
    </div>
    @error('files')
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
</form>