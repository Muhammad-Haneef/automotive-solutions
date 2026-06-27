<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header  border-t-danger">
                    <x-admin.product-edit-pills :active="$active" pid="{{ $pid }}" />
                </div>
                <div class="card-body">

                    @include('admin.product-variations.form')

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-faq">
                                <h5>Product Variations</h5>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display table-striped border data-table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Attribute</th>
                                            <th>Attribute Value</th>
                                            <th>Variation SKU</th>
                                            <th>Cost</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Sort_by</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rows as $row)
                                            <tr>
                                                <td>{{ getImage($row->image) }}</td>
                                                <td>{{ $row->attribute->title ?? '' }}</td>
                                                <td>{{ $row->attributeValue->title ?? '' }}</td>
                                                <td>{{ $row->sku ?? '' }}</td>
                                                <td>{{ $row->cost ?? '' }}</td>
                                                <td>{{ $row->price ?? '' }}</td>
                                                <td>{{ $row->sale_price ?? '' }}</td>
                                                <td>{{ $row->sort_by }}</td>
                                                <td>{{ $row->is_active }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-' . $rsn, [$pid, $row->id]) }}">
                                                        <svg width="18" height="18">
                                                            <use
                                                                href="http://127.0.0.1:8000/assets/svg/icon-sprite.svg#edit-content">
                                                            </use>
                                                        </svg>
                                                    </a>

                                                    <span class="square-white trash-3"
                                                        onclick="showDeleteConfirmation(`{{ route('admin.destroy-' . $rsn, [$pid, $row->id]) }}`);"
                                                        data-toggle="tooltip" data-placement="left"
                                                        title="Delete Record">
                                                        <svg width="18" height="18">
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg>
                                                    </span>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    @section('exfooter')
        <x-admin.delete-confirmation-modal />

        <script>
            function getAtributeValues(id) {
                $("#attribute_value_id").html('<option value="">--select--</option>');

                var vals = {!! json_encode($attributesValues) !!};

                var attribute_values = vals.filter(item => item.attribute_id == id);

                if (attribute_values.length) {
                    attribute_values.forEach(a => {
                        $("#attribute_value_id").append('<option value="' + a.id + '">' + a.title + '</option>');
                    });
                }
            }
        </script>
    @endsection

</x-layouts.admin>
