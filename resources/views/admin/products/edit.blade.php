<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header  border-t-danger">
                    <x-admin.product-edit-pills :active="$active" pid="{{ $row->id }}" />
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-bg-tabContent">
                        <div class="tab-pane fade {{ $active == 'general' ? 'show active' : '' }}" id="pills-general"
                            role="tabpanel" aria-labelledby="pills-general-tab">
                            @include('admin.products.edit-forms.general')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
