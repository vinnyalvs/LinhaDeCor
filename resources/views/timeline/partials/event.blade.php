@php
    $url = 'timeline/'. $post->id . '/edit';
@endphp
<div class="timeline-item">
    <div class="timeline-icon">
    </div>
<div class="timeline-content timeline-div-img">
</div>
<div class="timeline-content right">
    <h2> {!! $post->event_date !!} {!! $post->post->title !!}  </h2>
    <p>
        {!! $post->post->body !!}
    </p>
    <img src=" {{url('images/'.$post->post->thumbnail)}}" alt="post image">
    <a href="#" class="btn"> button</a>
    @if(Auth::check())
        <a class="btn" href="{{url('timeline/'. $post->id . '/edit'   )}}">Editar Post</a>
    @endif
</div>
</div>