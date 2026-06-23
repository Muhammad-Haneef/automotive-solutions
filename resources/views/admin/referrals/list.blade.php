<x-admin.data-listing-card>

    <x-slot:header>
        <x-admin.card-header title="Referrals">
            <a class="btn btn-primary f-w-500" href="{{route('admin.referral-setting')}}">
                Referrals Setting
            </a>
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="text-center">#</th>
        <th>Referred By</th>
        <th>Referred To</th>
        <th>Referral Code</th>
        <th>Rewarded</th>
        <th class="text-center">Actions</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>

            <td>{{ $row->referrer->name ?? '' }}</td>
            <td>{{ $row->referred->name ?? '' }}</td>
            <td>{{ $row->referral_code }}</td>
            <td>{{ $row->rewarded ? 'Yes' : 'Pending' }}</td>

            <x-admin.action-btn route="{{$rsn}}" id="{{$row->id}}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{$row->deleted_at ? 1 : 0}}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>