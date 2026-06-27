    <div class="col-lg-12">
        <div class="header-faq">
            <div class="row">
                <div class="col-lg-6">
                    <h6>Page Faqs</h6>
                </div>
                <div class="col-lg-6  text-end">
                    <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".faqs-modal">
                        + Add New
                    </div>
                </div>
            </div>
        </div>
        <div class="row default-according style-1 faq-accordion" id="accordionoc">
            <div class="col-12" id="page-faqs-container">
                @php
                    echo getAssociatedFaqs($associated_type, $associated_id);
                @endphp
            </div>

        </div>
    </div>

    <div class="modal fade faqs-modal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">FAQs</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="row  g-3">
                        <input type="hidden" id="associated_type" value="{{ $associated_type }}" />
                        <input type="hidden" id="associated_id" value="{{ $associated_id }}" />
                        <x-admin.form.input ref="q" title="Question" type="text"
                            value="{{ $row->q ?? old('q') }}" required=1 />
                        <x-admin.form.textarea ref="a" title="Answer" value="{{ $row->a ?? old('a') }}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveFaq()">Save changes</button>
                </div>

            </div>
        </div>

    </div>
