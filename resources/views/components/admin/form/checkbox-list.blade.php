<div>
    @if(!empty($options))
    @foreach($options as $o)
    <div class="d-flex">
        <input class="checkbox_animated" id="chk-{{ $o->id }}"
            type="checkbox" name="{{ $ref ?? 'options[]' }}"
            value="{{ $o->id }}"
            @if(!empty($selected) && is_array($selected) && in_array($o->id, $selected)) checked @endif>
        <label class="d-block" for="chk-{{ $o->id }}">{!! $o->title !!}</label>
    </div>
    <div>
        @error($ref)
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    @endforeach
    @endif
</div>