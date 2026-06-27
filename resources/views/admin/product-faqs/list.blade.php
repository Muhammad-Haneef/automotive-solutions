<x-layouts.admin>
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header  border-t-danger">
                    <x-admin.product-edit-pills :active="$active" pid="{{ $pid }}" />
                </div>
                <div class="card-body">

                    @include('admin.product-faqs.form')

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-faq">
                                <h5>Product Related Questions are Answered</h5>
                            </div>
                            <div class="row default-according style-1 faq-accordion" id="accordionoc">
                                <div class="col-xl-12">
                                    @forelse ($rows as $faq)
                                        <div class="card card{{ $faq->id }}">
                                            <div class="card-header">
                                                <h5>
                                                    <button class="btn btn-link collapsed ps-0"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseicon{{ $faq->id }}"
                                                        aria-expanded="false" aria-controls="collapseicon2">
                                                        <i data-feather="help-circle"></i>
                                                        {{ $faq->q }}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse" id="collapseicon{{ $faq->id }}"
                                                data-bs-parent="#accordionoc">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-11">
                                                            {{ $faq->a }}
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="fw-normal text-sm fw-light text-end"
                                                                style="font-size: 10px;">

                                                                <div class="common-align gap-2 justify-content">
                                                                    <a class="square-white"
                                                                        href="{{ route('admin.edit-' . $rsn, [$pid, $faq->id]) }}"
                                                                        data-toggle="tooltip" data-placement="left"
                                                                        title="Edit Record">
                                                                        <svg width="18" height="18">
                                                                            <use
                                                                                href="http://127.0.0.1:8000/assets/svg/icon-sprite.svg#edit-content">
                                                                            </use>
                                                                        </svg>
                                                                    </a>

                                                                    <span class="square-white trash-3"
                                                                        onclick="showDeleteConfirmation(`{{ route('admin.destroy-' . $rsn, [$pid, $faq->id]) }}`);"
                                                                        data-toggle="tooltip" data-placement="left"
                                                                        title="Delete Record">
                                                                        <svg width="18" height="18">
                                                                            <use
                                                                                href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                            </use>
                                                                        </svg>
                                                                    </span>

                                                                </div>

                                                                <span class="mx-2" style="font-size: 12px;">
                                                                    Active: {!! getActiveBadge($faq->is_active) !!}
                                                                </span>
                                                                <span class="mx-2" style="font-size: 12px;">
                                                                    Sort By: {{ $faq->sort_by }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-light-danger" role="alert">
                                            Sorry! records not found.
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('exfooter')
        <x-admin.delete-confirmation-modal />
    @endsection

</x-layouts.admin>
