<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Warehouses">
            <x-admin.add-new-btn :route="$rsn" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Name</th>
        <th>address</th>
        <th>Contact</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Capacity</th>
        <th>Current Stock</th>
        
        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->title }}</td>
            <td>{{ $row->address.', '.$row->postal_code.', '.$row->city.', '.$row->state.', '.$row->country }}</td>
            <td>{{ $row->contact }}</td>
            <td>{{ $row->latitude }}</td>
            <td>{{ $row->longitude }}</td>
            <td>{{ $row->capacity }}</td>
            <td>{{ $row->current_stock }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn :route="$rsn" :id="$row->id" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>