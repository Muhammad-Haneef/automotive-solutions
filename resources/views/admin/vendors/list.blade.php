<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Vendors">
            <x-admin.add-new-btn :route="$rsn" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Logo</th>
        <th>Store Name</th>
        <th>Owner Name</th>
        <th>Email</th>
        <th>Website</th>
        <th>Contact</th>
        
        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ getImage($row->logo) }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->user->name ?? '' }}</td>

            <td>{{ $row->email }}</td>
            <td>{{ $row->website }}</td>
            <td>{{ $row->contact }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn :route="$rsn" :id="$row->id" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>