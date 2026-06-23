<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Wallets">
            <x-admin.add-new-btn route="{{ $rsn }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Customer</th>
        <th>Wallet Key</th>
        <th>Balance</th>
        <th>Wallet Status</th>

        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->user->name ?? '' }}</td>
            <td>{{ $row->wallet_key }}</td>
            <td>{{ $row->balance }}</td>
            <td>{{ $row->status }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>