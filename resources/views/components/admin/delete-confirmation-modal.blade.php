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