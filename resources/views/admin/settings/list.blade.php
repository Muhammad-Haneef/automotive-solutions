<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="SMS API Integrations">
            <x-admin.add-new-btn route="{{ $data['rsn'] }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>
        <th>SMS Gateway</th>
        <th>API User Name</th>
        <th>Mask</th>
        <th class="text-center">Default Gateway</th>
        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($data['rows'] as $index => $row)

        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $row->smsGateway->title ?? '' }}</td>
            <td>{{ $row->api_user_name }}</td>
            <td>{{ $row->mask }}</td>
            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>

            <x-admin.action-btn route="{{$data['rsn']}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />

        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>