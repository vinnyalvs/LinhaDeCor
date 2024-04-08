@php
    $url = 'timeline/'. $post->id . '/edit';
@endphp
<div class="blog-item-card">
    <h2 >{{$post->post->title }}</h2>
    <div class="post-thumbnail">
        {!! $post->post->body !!}
    </div>
    <img src=" {{url('img/'.$post->post->thumbnail)}}" alt="post image">


</div>

