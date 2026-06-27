<div class="modal fade" id="confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="delete_confirmation"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="text-danger">Delete</span> Confirmation</h5>
                </div>
                <div class="modal-body">
                    <p class="my-3 text-danger">Are you sure you want to delete this?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        id="close_btn">Close</button>
                    <button class="btn btn-danger" id="confirmed" type="button">
                        <span class="btn-text">Delete</span>
                        <span class="spinner-border spinner-border-sm ms-2 d-none" id="btn-spinner" role="status"
                            aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('confirmed').addEventListener('click', function() {
        const btn = this;
        const spinner = document.getElementById('btn-spinner');
        const closeBtn = document.getElementById('close_btn');

        // Show loading state
        btn.disabled = true;
        closeBtn.disabled = true;
        spinner.classList.remove('d-none');
    });

    function resetButton() {
        const btn = document.getElementById('confirmed');
        const spinner = document.getElementById('btn-spinner');
        const closeBtn = document.getElementById('close_btn');

        btn.disabled = false;
        closeBtn.disabled = false;
        spinner.classList.add('d-none');
    }
</script>
