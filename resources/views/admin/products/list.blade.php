<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Products">
            <x-admin.add-new-btn route="{{ $rsn }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Image</th>
        <th>Title</th>
        <th>SKU</th>
        <th>Cost</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Brand</th>
        <th>Stock</th>

        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            
            <td>{{ getImage($row->thumbnail) ?? '' }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->sku }}</td>
            <td>{{ $row->cost }}</td>
            <td>{{ $row->price }}</td>
            <td>{{ $row->sale_price }}</td>
            <td>{{ $row->brand->title ?? '' }}</td>
            <td>{{ $row->stock_status }}</td>
            
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>