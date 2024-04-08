<div class="row justify-content-center">
@php
    $url = 'blog/'. $post->post->id . '/edit';
@endphp

<!-- Post Thumbnail -->

    <br/>
    <img src=" {{url('images/'.$post->post->thumbnail)}}" alt="post image">

    <div class="col-lg-10 text-center">
        <h1 class="post-show-content-title">{{$post->post->title }}</h1>
        <h3 class="post-show-content-title">{{$post->post->subtitle }}</h3>
        <p>{{$post->post->body}}</p>
        @if(Auth::check())
            <a class="btn" href="{{$url}}">Editar Post</a>
        @endif
    </div>
</div>