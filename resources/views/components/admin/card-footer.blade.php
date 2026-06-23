@php
$class = trim($slot) ? 'd-flex justify-content-between' : 'text-end';
@endphp

<div class="card-footer {{ $class }}">
    @if(trim($slot))
    {{ $slot }}
    @endif

    @if($withSubmit)
    <button class="btn btn-primary" type="submit">Submit</button>
    @endif
</div>