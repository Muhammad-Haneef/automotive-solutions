<div class="{{ $class ?? '' }}">
    @if(!empty($title))
    <label class="form-label" for="{{ $ref ?? '' }}">{{ $title ?? '' }} {!! $required ? '<span class="txt-danger">*</span>' : '' !!}</label>
    @endif
    <input class="form-control" name="{{ $ref ?? '' }}" id="{{ $ref ?? '' }}" type="{{ $type ?? 'text' }}" placeholder="{{ $title ?? '' }}" value="{{ $value ?? '' }}" @if($readonly) readonly @endif />
    @if($exinfo)
    <div class="mt-2 f-m-light" style="font-size: 12px;">
        {!!$exinfo ?? ''!!}
    </div>
    @endif
    @error($ref)
    <div class="text-danger">{{$message}}</div>
    @enderror
</div>