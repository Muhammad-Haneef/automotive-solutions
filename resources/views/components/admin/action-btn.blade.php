<td class="text-center">
    <div class="common-align gap-2 justify-content">
        @if ($route && $id)
        @if ($privilegeRestoreId)
        <a class="square-white"
            href="{{ Route::has('admin.restore-' . $route) ? route('admin.restore-' . $route, [$id]) : '#' }}"
            data-toggle="tooltip"
            data-placement="left"
            title="Restore Record">
            <i class="fa-solid fa-reply font-success"></i>
        </a>

        @else
        <a class="square-white"
            href="{{ Route::has('admin.edit-' . $route) ? route('admin.edit-' . $route, [$id]) : '#' }}"
            data-toggle="tooltip"
            data-placement="left"
            title="Edit Record">
            <svg width="18" height="18">
                <use href="{{ assets('svg') }}edit-content"></use>
            </svg>
        </a>
        @php
        $deleteUrl = Route::has('admin.trash-' . $route) ? route('admin.trash-' . $route, [$id]) : '#';
        @endphp

        <span class="square-white trash-3"
            onclick="showDeleteConfirmation('{{ $deleteUrl }}');"
            data-toggle="tooltip" data-placement="left" title="Delete Record">
            <svg width="18" height="18">
                <use href="{{ assets('svg') }}trash1"></use>
            </svg>
        </span>
        @endif
        @endif
    </div>
</td>




@section('exfooter')
<x-admin.delete-confirmation-modal />
<?php /*
<div class="modal fade" id="delete_confirmation" tabindex="-1" role="dialog" aria-labelledby="delete_confirmation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                <form id="delete_modal_form" method="get" action='#'>
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-danger">Delete</span> Confirmation</h5>
                    </div>
                    <div class="modal-body">
                        <p class="my-3 text-danger">Are you sure you want to delete this?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function showDeleteConfirmation(url) {
        $("#delete_modal_form").attr('action', url);
        $("#delete_confirmation").modal('show');
    }
</script>
*/ ?>
@endsection