<div class="card-header border-t-danger d-flex align-items-center justify-content-between">
    <h5 class="card-title m-0">{{ $title ?? '' }}</h5>
    <div class="d-flex gap-2">
        {{ $slot }}
        @if(!empty($route))
            <a class="btn btn-dark" href="{{ $route }}">View All</a>
        @endif
    </div>
</div>
