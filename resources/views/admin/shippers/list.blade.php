<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Shippers">
            <x-admin.add-new-btn :route="$rsn" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Logo</th>
        <th>Company</th>
        <th>Company Email</th>
        <th>Contact Person</th>
        <th>Contact Email</th>
        <th>Contact Phone</th>
        
        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ getImage($row->logo) }}</td>
            <td>{{ $row->company }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->contact_person }}</td>
            <td>{{ $row->contact_email }}</td>
            <td>{{ $row->contact_phone }}</td>
            

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn :route="$rsn" :id="$row->id" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>