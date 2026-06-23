<x-admin.data-listing-card>

    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.dropdown ref="user_id" title="Customer" :options="$users" selected="{{$row ? $row->user_id : old('user_id')}}" class="col-md-5" />
                        <x-admin.form.dropdown ref="product_id" title="Product" :options="$products" selected="{{$row ? $row->product_id : old('product_id')}}" class="col-md-5" />
                        <x-admin.form.input type="number" ref="qty" title="Qty" value="{{$row ? $row->qty : old('qty')}}" required=1 class="col-md-2" />
                        <x-admin.form.input ref="description" title="Description" value="{{$row ? $row->description : old('description')}}" required=1 class="col-md-10" />
                        <x-admin.form.submit-btn title="{{ $row ? 'Update' : 'Add New' }}" class="col-md-2" />
                    </div>
                </div>
            </div>
        </form>
    </x-slot:before>

    <x-slot:header>
        <x-admin.card-header title="Wishlist">
            <x-admin.add-new-btn route="{{ $rsn }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="col-1 text-center">S. No.</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Description</th>
        <th class="col-1 text-center">Sort by</th>
        <th class="col-1 text-center">Active</th>
        <th class="col-1 text-center">Action</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->user->name ?? '' }}</td>
            <td>{{ $row->product->title ?? '' }}</td>
            <td>{{ $row->qty }}</td>
            <td>{{ $row->description }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">
                {!! getActiveBadge($row->is_active) !!}
            </td>
            <x-admin.action-btn route="{{ $rsn }}" id="{{ $row->id }}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{ $row->deleted_at ? 1 : 0 }}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>