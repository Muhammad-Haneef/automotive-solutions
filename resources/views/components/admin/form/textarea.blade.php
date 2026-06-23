<div class="{{ $class ?? '' }}">
    <label class="form-label" for="{{ $ref ?? '' }}">{{ $title ?? '' }} {!! $required ? '<span class="txt-danger">*</span>' : '' !!}</label>
    <textarea class="form-control" name="{{ $ref ?? '' }}" id="{{ $ref ?? '' }}" rows="{{ $rows ?? '3' }}" >{{ $value ?? '' }}</textarea>
    @error($ref)
    <div class="text-danger">{{$message}}</div>
    @enderror
</div>