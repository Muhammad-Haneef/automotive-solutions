<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="bg-navbar arrow-tabs">
                <div class="card">
                    <div class="card-header">
                        <x-admin.product-edit-pills :active="$active" pid="{{$pid}}" />
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display table-striped border data-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Review</th>
                                        <th>Quality rating</th>
                                        <th>Price rating</th>

                                        <th class="text-center">Active</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rows as $index => $row)
                                    <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
                                        <td class="text-center">{{ $index + 1 }}</td>

                                        <td>{{ $row->user->name ?? '' }}</td>
                                        <td>{{ $row->product->title ?? '' }}</td>
                                        <td>{{ $row->review }}</td>
                                        <td>{{ $row->quality_rating }}</td>
                                        <td>{{ $row->price_rating }}</td>

                                        <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
                                        <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
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


</x-layouts.admin>