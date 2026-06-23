<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Customers">
            <x-admin.add-new-btn route="{{ $rsn }}" />
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>


        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Account Status</th>
        <th>Customer Group</th>
        <th>Customer Type</th>
        
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)

        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ getImage($row->profile_picture) }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->contact }}</td>
            <td>{{ $row->account_status }}</td>
            <td>{{ $row->userGroup->title ?? '' }}</td>
            <td>{{ $row->type ? "Vendor" : "user" }}</td>
            
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>