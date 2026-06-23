<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Gift Wrap Orders" />
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>

        <th>Order</th>
        <th>Gift Wrap Service</th>
        <th>Gift Wrap Image</th>
        <th>Message</th>
        <th>Price</th>
        
        <th class="text-center">Sort By</th>
        <th class="text-center">Active</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->order->order_no ?? '-' }}</td>
            <td>{{ $row->giftWrap->title ?? '' }}</td>
            <td>{{ getImage($row->giftWrap->title ?? "") }}</td>
            <td>{{ $row->message }}</td>
            <td>{{ $row->price }}</td>

            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">{!! getActiveBadge($row->is_active) !!}</td>
            <x-admin.action-btn :route="$rsn" :id="$row->id" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>