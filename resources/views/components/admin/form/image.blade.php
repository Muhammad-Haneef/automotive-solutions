 <img class="img-100 img-fluid rounded-circle shadow-sm update_img_{{ $index }}"
     src="{{ $preview ? Storage::url($preview) : asset('assets/images/placeholder_120x120.jpg') }}" alt="Image"
     style="width: 100px; height: 100px; object-fit: cover;">


 <input type="hidden" name="{{ 'old_' . $ref }}" value="{{ $preview }}" />

 <input class="form-control updateimg" type="file" name="{{ $ref }}"
     onchange="readURL(this,{{ $index }})" accept="image/*" style="max-width: 200px;">
