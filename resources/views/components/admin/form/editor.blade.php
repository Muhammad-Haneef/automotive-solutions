<div>
    <div class="mb-3">
        <label class="w-100">{{ $title ?? 'Content' }} :</label>
        <!-- <textarea id="{{ $ref ?? 'content' }}" name="{{ $ref ?? 'content' }}" class="editor" cols="30" rows="10">{{$content || ''}}</textarea> -->
        <textarea id="{{ $ref ?? 'content' }}" name="{{ $ref ?? 'content' }}" class="editor" cols="30" rows="{{$rows}}">{{$content}}</textarea>
        @error($ref)
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    @section('exfooter')
    @php
    $editor_jss = [
    'ckeditor.js',
    'adapters/jquery.js',
    'styles.js',
    'ckeditor.custom.js',
    ]
    @endphp

    @foreach ($editor_jss as $js)
    <script src="{{ asset('assets/js/editor/ckeditor/' . $js) }}"></script>
    @endforeach

    @endsection
</div>