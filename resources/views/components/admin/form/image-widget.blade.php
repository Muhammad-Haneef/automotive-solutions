<div class="card">
    <div class="card-header py-2 border-t-danger">
        <div class="d-flex">
            <div class="fw-bold f-16">{{ $title ?? 'Image' }}</div>
            <label class="file-upload cursor-pointer">
                <i class="fa fa-upload fa-lg text-danger cursor-pointer"></i>
                <input type="hidden" name="{{ 'old_' . $ref }}" value="{{ $oldImage }}" />
                <input type="file" accept="image/*" name="{{ $ref }}" class="cursor-pointer"
                    onchange="showPreview(this, '<?= $ref ?>')">
            </label>
        </div>
        <div>
            @error($ref)
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="card-body text-center">
        <div class="preview-container">
            <img class="{{ $ref }}"
                src="{{ $oldImage ? Storage::url($oldImage) : asset('assets/images/image_placeholder.png') }}"
                alt="Image Preview">
        </div>
    </div>
</div>
