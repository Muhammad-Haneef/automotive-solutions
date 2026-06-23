<x-admin.data-listing-card>
    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.dropdown ref="country_id" title="Country" :options="$countries" selected="{{$row ? $row->country_id : old('country_id')}}" class="col-md-4" />
                        <x-admin.form.input ref="title" title="City Name" value="{{$row ? $row->title : old('title')}}" required=1 class="col-md-4" />
                        <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-2" />
                        <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-2" />
                        <x-admin.form.textarea ref="description" title="Description" rows="4" value="{{$row ? $row->description : old('description')}}" required=1 class="col-md-12" />
                    </div>
                </div>
                <x-admin.card-footer />
            </div>
        </form>
    </x-slot:before>

    <x-slot:header>
        <x-admin.card-header title="Cities" />
    </x-slot:header>

    <x-slot:head>
        <th class="col-1 text-center">#</th>
        <th>Country</th>
        <th>City</th>
        <th class="col-1 text-center">Sort by</th>
        <th class="col-1 text-center">Active</th>
        <th class="col-1 text-center">Action</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $row->country->title ?? '-' }}</td>
            <td>{{ $row->title }}</td>
            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">
                {!! getActiveBadge($row->is_active) !!}
            </td>
            <x-admin.action-btn route="{{ $rsn }}" id="{{ $row->id }}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{ $row->deleted_at ? 1 : 0 }}" />
        </tr>
        @empty
        @endforelse

    </x-slot:body>

</x-admin.data-listing-card>