<x-admin.data-listing-card>
    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.input ref="recipient_number" title="Title" value="{{$row ? $row->recipient_number : old('recipient_number')}}" required=1 />
                        <x-admin.form.input ref="message" title="Message" value="{{$row ? $row->message : old('message')}}" required=1 class="col-md-10" />
                        <x-admin.form.submit-btn title="Send" class="col-md-2" />
                    </div>
                </div>
            </div>
        </form>
    </x-slot:before>

    <x-slot:header>
        <x-admin.card-header title="Title" />
    </x-slot:header>

    <x-slot:head>
        <th class="col-1 text-center">S. No.</th>
        <th class="col-2 text-center">Recipient Number</th>
        <th class="text-center">SMS</th>
        <th class="text-center">API Response</th>
        <th class="col-1 text-center">Status</th>
        <th class="col-1 text-center">SMS Category</th>
        <th class="col-1 text-center">Order #</th>
        <th class="col-2">User</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)


        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            <td class="text-center">{{ $row->recipient_number }}</td>
            <td>{{ $row->message }}</td>
            <td>{{ $row->response }}</td>
            <td class="text-center">{{ $row->status }}</td>
            <td class="text-center">{{ $row->sms_category->title ?? '' }}</td>
            <td class="text-center">{{ $row->order_number }}</td>
            <td>{{ $row->user->name ?? '' }}</td>
            @empty
            @endforelse
    </x-slot:body>

</x-admin.data-listing-card>