<td class="text-center">
    <div class="common-align gap-2 justify-content">

        @if ($showUrl && $id)
            <a class="square-white" href="{{ $showUrl }}" data-toggle="tooltip" data-placement="left"
                title="View Record">
                <svg width="18" height="18">
                    <use href="{{ assets('svg') }}eye"></use>
                </svg>
            </a>
        @endif

        @if ($route && $id)
            @if ($privilegeRestoreId)
                <a class="square-white"
                    href="{{ Route::has('admin.restore-' . $route) ? route('admin.restore-' . $route, [$id]) : '#' }}"
                    data-toggle="tooltip" data-placement="left" title="Restore Record">
                    <i class="fa-solid fa-reply font-success"></i>
                </a>
            @else
                <a class="square-white"
                    href="{{ Route::has('admin.edit-' . $route) ? route('admin.edit-' . $route, [$id]) : '#' }}"
                    data-toggle="tooltip" data-placement="left" title="Edit Record">
                    <svg width="18" height="18">
                        <use href="{{ assets('svg') }}edit-content"></use>
                    </svg>
                </a>
                @php
                    $deleteUrl = Route::has('admin.trash-' . $route) ? route('admin.trash-' . $route, [$id]) : '#';
                @endphp

                <span class="square-white trash-3" onclick="showDeleteConfirmation('{{ $deleteUrl }}');"
                    data-toggle="tooltip" data-placement="left" title="Delete Record">
                    <svg width="18" height="18">
                        <use href="{{ assets('svg') }}trash1"></use>
                    </svg>
                </span>
            @endif
        @endif
    </div>
</td>



<?php /*
@section('exfooter')
    <x-admin.delete-confirmation-modal />
@endsection
*/
?>
