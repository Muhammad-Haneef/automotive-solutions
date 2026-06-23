<x-admin.data-listing-card>
    <x-slot:header>
        <x-admin.card-header title="Orders" /> <!-- <x-admin.add-new-btn route="{{ $rsn }}" /> -->
    </x-slot:header>
    <x-slot:head>
        <th class="text-center">#</th>
        <th>Order #</th>
        <th>Customer</th>
        <th>City</th>
        <th class="text-center">Amount</th>
        <th class="text-center">Date</th>
        <th class="text-center">Order Status</th>
        <th class="text-center">Payment Status</th>
        <th class="text-center">Shipped By</th>
        <th class="text-center">Actions</th>
    </x-slot:head>
    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{$row->order_no}}</td>
            <td>{{$row->user->name ?? ''}}</td>
            <td>{{$row->shippingAddress->city ?? ''}}</td>
            <td>{{$row->total}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->status->title ?? ''}}</td>
            <td>{{$row->payment_status}}</td>
            <td>{{$row->courierService->title ?? ''}}</td>
            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>
</x-admin.data-listing-card>