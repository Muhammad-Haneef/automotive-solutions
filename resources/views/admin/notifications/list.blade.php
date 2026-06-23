<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Notifications">
            
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>
        <th>Type</th>
        <th>Send To</th>
        <th>Title</th>
        <th>Notification</th>
        <th>Read</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)

        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->type->title ?? '' }}</td>
            <td>{{ $row->user->name ?? '' || $row->systemUser->name ?? ''  }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->message }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_read) !!}</td>

            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>