<x-admin.data-listing-card>

    <x-slot:before>
    </x-slot:before>

    <x-slot:header>
        <x-admin.card-header title="Subscribers">
            <!-- <x-admin.add-new-btn route="{{ $rsn }}" /> -->
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="col-1 text-center">S. No.</th>
        <th>name</th>
        <th>email</th>
        <th class="col-1 text-center">Active</th>
        <th class="col-1 text-center">Action</th>
    </x-slot:head>

    <x-slot:body>

        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->name ?? '' }}</td>
            <td>{{ $row->email }}</td>

            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse

    </x-slot:body>

</x-admin.data-listing-card>
