@php
    $multiple = str_contains($ref ?? '', '[]');
    $id = str_replace('[]', '', $ref ?? '');
@endphp
<div class="{{ $class ?? '' }}">
    @if(!empty($title))
    <label class="form-label" for="{{ $id }}">
        {{ $title ?? '' }} 
        {!! !empty($required) ? '<span class="txt-danger">*</span>' : '' !!}
    </label>
    @endif

    <select class="form-select select2" 
        @if(!empty($onchange)) onchange="{{ $onchange }}" @endif 
        name="{{ $ref ?? '' }}" 
        id="{{ $id }}" 
        @if($multiple) multiple @endif
    >
        <option value="">--select--</option>

        @foreach($options as $o)
            <option value="{{ $o->id }}" 
                @if($multiple && is_array($selected) && in_array($o->id, $selected)) 
                    selected 
                @elseif(isset($selected) && $selected == $o->id) 
                    selected 
                @endif
            >
                {!! $o->$field !!}
            </option>
        @endforeach
    </select>

    @error($ref)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
