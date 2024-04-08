@php
    $url = 'timeline/'. $post->id . '/edit';
@endphp
<div class="timeline-item-card">
    @for ($i = 0; $i < 16; $i++)
        <div class="vl"></div>
    @endfor
        <h2 class = "timeline-card-year"> {!! preg_split('/([-]+)/', $post->event_date)[0] !!} </h2>
        <div class="timeline-eclipse">
            <a href=" {{ route('timeline.show', $post->id) }}">
                <h3 class="Seta">
                    →
                </h3>
            </a>
        </div>
    <div class="timeline-text-wrapper">
    <p class="timeline-text">   {{ $post->post->title }}  </p>
        @if(Auth::check())
            <a class="btn" href="{{$url}}">Editar Post</a>
        @endif
    </div>
</div>