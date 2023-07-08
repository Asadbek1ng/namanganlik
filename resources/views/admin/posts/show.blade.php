{{-- @php
    foreach ($post as $tags => $item) {
        {{ $item->tag_uz }}
    }
@endphp --}}

{{-- @php
    dd($post->tags);

@endphp --}}
@foreach ($post->tags as $item)
{{ $item->tag_uz }}
    
@endforeach