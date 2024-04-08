{{--@php dd($post) @endphp;--}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body class="post-body">
<div class="post-show-aux">
    @include('layout.partials.menu')
</div>
<div class="post-show-main">
    <div class="post-show-logo-header">
        @include('layout.partials.logo')
        @include('layout.partials.header')
    </div>
    <div class="post-show-content">
        <div class="post-show-content-title">
          <h2 class="event-date"> {{ preg_split('/([-]+)/', $post->event_date)[0]}} </h2>
          <h2 class= "event-title"> {{$post->post->title}} </h2>
        </div>
        <div class="post-show-content-body">
            @if($post->post->thumbnail != null && $post->post->thumbnail != 0  )
                <div class="post-show-content-thumbnail">
                    <img src=" {{url('images/'.$post->post->thumbnail)}}" alt="post image">
                </div>
            @endif
            <div class="post-show-content-text">
                {{$post->post->body}}
            </div>

        </div>
    </div>
    <div class="post-show-footer">
        <div class="back-to-timeline-button">
            <a href="{{route('timeline.index')}}"> &#8592 Voltar a Linha do Tempo</a>
        </div>
        <div class="next-event-button">
            <a href="{{route('timeline.show', $nextPost->id)}}"> &#8594 Ir para próximo evento da linha do tempo</a>
        </div>
    </div>

</div>
</body>
</html>
