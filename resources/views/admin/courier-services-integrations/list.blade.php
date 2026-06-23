<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Courier Services Integrations">
            <x-admin.add-new-btn route="{{ $rsn }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Courier Service</th>
        <th>API User Name</th>
        <th>API Key</th>
        <th>API URL</th>
        <th>Tracking URL</th>

        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->courierService->title ?? '' }}</td>
            <td>{{ $row->api_user_name }}</td>
            <td>{{ $row->api_key }}</td>
            <td>{{ $row->api_url }}</td>
            <td>{{ $row->tracking_url }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>