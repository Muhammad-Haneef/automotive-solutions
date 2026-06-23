<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Brands">
            <x-admin.add-new-btn :route="$rsn" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Logo</th>
        <th>Name</th>
        <th>Show on Front</th>
        <th>Show Description on Front</th>
        
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
            <td>{!! getActiveBadge($row->show_on_front) !!}</td>
            <td>{!! getActiveBadge($row->show_description_on_front) !!}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn :route="$rsn" :id="$row->id" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>