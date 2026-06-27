<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header  border-t-danger">
                    <x-admin.product-edit-pills :active="$active" pid="{{ $pid }}" />
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header  border-t-success">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="text-success">Catalog</h4>
                                        <form method="post"
                                            action="{{ route('admin.update-product-catalog-size-chart', [$pid]) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="product-upload">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" name="catalog"
                                                        id="catalog" aria-describedby="catalog" aria-label="Upload">
                                                    <button class="btn btn-success" type="submit"
                                                        id="catalog">Upload</button>
                                                </div>
                                                @error('catalog')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            @if (isset($rows))
                                                @if ($rows->catalog)
                                                    <img src="{{ asset('storage/' . $rows->catalog) }}" alt="Catalog"
                                                        class="img-fluid">
                                                @else
                                                    <p>No catalog found.</p>
                                                @endif
                                            @else
                                                <p>No catalog found.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header  border-t-warning">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="text-warning">Size Chart</h4>
                                        <form method="post"
                                            action="{{ route('admin.update-product-catalog-size-chart', [$pid]) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="product-upload">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" name="size_chart"
                                                        id="size_chart" aria-describedby="file" aria-label="Upload">
                                                    <button class="btn btn-warning" type="submit"
                                                        id="inputGroupFileAddon04">Upload</button>
                                                </div>
                                                @error('size_chart')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            @if (isset($rows))
                                                @if ($rows->size_chart)
                                                    <img src="{{ asset('storage/' . $rows->size_chart) }}"
                                                        alt="size_chart" class="img-fluid">
                                                @else
                                                    <p>No size chart found.</p>
                                                @endif
                                            @else
                                                <p>No catalog found.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


</x-layouts.admin>
