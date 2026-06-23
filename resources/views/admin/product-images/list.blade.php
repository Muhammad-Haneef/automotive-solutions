<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="bg-navbar arrow-tabs">
                <div class="card">
                    <div class="card-header">
                        <x-admin.product-edit-pills :active="$active" pid="{{$pid}}" />
                    </div>
                    <div class="card-body">

                        @include('admin.product-images.form')

                        <div class="mt-5">
                            @if ($rows->isNotEmpty())
                            <div class="row">
                                @foreach ($rows as $img)
                                <div class="col-xl-2 col-md-3 col-sm-6" id="galleryImageBox<?= $img->id ?>">
                                    <img src="{{ Storage::url($img->image) }}"
                                        alt="{{ $img->title }}"
                                        class="img-fluid d-block mx-auto"
                                        style="max-width: 100%; max-height: 200px; object-fit: contain;" />
                                    <div class="caption mt-4">
                                        <div class="input-group mb-3">
                                            <input type="text" id="galleryImageTitle<?= $img->id ?>" class="form-control" value="{{ $img->title }}" />
                                            <span onclick="updateProductImageTitle('<?= route('admin.update-title-product-image', [$pid, $img->id]) ?>', <?= $img->id ?>);" class="input-group-text">
                                                <svg width="18" height="18">
                                                    <use href="{{ assets('svg') }}edit-content"></use>
                                                </svg>
                                            </span>
                                            <span onclick="deleteProductGalleryImage('<?= route('admin.destroy-product-image', [$pid, $img->id]) ?>', <?= $img->id ?>);" class="input-group-text" id="basic-addon2">
                                                <svg width="18" height="18">
                                                    <use href="{{ assets('svg') }}trash1"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="alert alert-light-danger" role="alert">
                                No gallery images uploaded yet
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.admin>