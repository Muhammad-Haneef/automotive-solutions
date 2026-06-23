<div>
    @if(!empty($options))
    @foreach($options as $index => $o)
    <div class="d-flex">
        <input class="radio_animated" id="radio-{{ $o->id }}"
            type="radio" name="{{ $ref ?? 'options' }}"
            value="{{ $o->id }}"
            @if((!empty($selected) && $o->id==$selected) || $index === 0) checked @endif />
        <label class="d-block" for="chk-{{ $o->id }}">{{ $o->title }}</label>
    </div>
    <div>
        @error($ref)
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    @endforeach
    @endif
</div>