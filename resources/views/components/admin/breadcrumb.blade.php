@php
    $seg2 = request()->segment(2);
    $seg3 = request()->segment(3);

    if (!empty($seg3) && is_string($seg3)) {
        $seg2 = str_replace('-', ' ', $seg2);
        $seg2 .= ' - ' . $seg3;
    }
@endphp

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>{{ $seg2 }}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">{{ $seg2 }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
