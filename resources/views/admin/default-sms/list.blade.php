<x-admin.data-listing-card>

    <x-slot:before>
        <form method="post" action="{{ $row ? route('admin.update-' . $rsn, [$row->id]) : route('admin.store-' . $rsn) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <x-admin.form.input ref="title" title="Title" value="{{$row ? $row->title : old('title')}}" required=1 class="col-md-5" />
                        <x-admin.form.dropdown ref="sms_category_id" title="SMS Category" :options="$categories" selected="{{$row ? $row->sms_category_id : old('sms_category_id')}}" class="col-md-3" />
                        <x-admin.form.input type="number" ref="sort_by" title="Sort By" value="{{$row ? $row->sort_by : old('sort_by', 1)}}" required=1 class="col-md-2" />
                        <x-admin.form.dropdown ref="is_active" title="Is Active" :options="get_yes_no_options()" selected="{{$row ? $row->is_active : old('is_active', 1)}}" class="col-md-2" />
                        <x-admin.form.input ref="sms" title="sms" value="{{$row ? $row->sms : old('sms')}}" required=1 class="col-md-10" />
                        <x-admin.form.submit-btn title="{{ $row ? 'Update' : 'Add New' }}" class="col-md-2" />
                    </div>

                </div>
            </div>
        </form>
    </x-slot:before>

    <x-slot:header>
        <x-admin.card-header title="Default SMS">
            <!-- <x-admin.add-new-btn route="{{ $rsn }}" /> -->
        </x-admin.card-header>
    </x-slot:header>

    <x-slot:head>
        <th class="col-1 text-center">S. No.</th>
        <th>Title</th>
        <th>Description</th>
        <th class="col-1 text-center">Sort by</th>
        <th class="col-1 text-center">Active</th>
        <th class="col-1 text-center">Action</th>
    </x-slot:head>

    <x-slot:body>
        @forelse ($rows as $index => $row)
        <tr class="{{ $row->deleted_at ? 'deleted' : '' }}">
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->sms }}</td>
            <td class="text-center">{{ $row->sort_by }}</td>
            <td class="text-center">
                @if($row->is_active)
                <span class="badge badge-light-success">Yes</span>
                @else
                <span class="badge badge-light-danger">No</span>
                @endif
            </td>
            <x-admin.action-btn route="{{ $rsn }}" id="{{ $row->id }}" privilegeEditId="0" privilegeDeleteId="0" privilegeRestoreId="{{ $row->deleted_at ? 1 : 0 }}" />
        </tr>
        @empty
        @endforelse
    </x-slot:body>

</x-admin.data-listing-card>
