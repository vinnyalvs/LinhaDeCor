<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="timeline-main">
        @include('layout.partials.logo')
        @include('layout.partials.header')
    <div class="timeline-Sidebar">
        <div class="timeline-verbete">
            <div class="internal-verbete">
                <details class="verbete-entry" open>
                    <summary class="entry-title">{{__('timeline/entrys.margin_color')}}</summary>
                    <p class ="entry-text"> {{__('timeline/entrys.margin_color_text')}} </p>
                </details>
                <details class="verbete-entry">
                    <summary class="entry-title" >{{__('timeline/entrys.color_line')}}</summary>
                    <p class ="entry-text"> {{__('timeline/entrys.color_line_text')}}  </p>
                </details>
                <div class="wiki-verbete">
                    <a href="">{{__('timeline/entrys.source_entry')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="timeline-Content">
        <div class="timeline-posts-wrapper">
            @foreach($posts as $post)
{{--                @if($post->timeline_type === 'law')--}}
                    @component('timeline.partials.law',['post' => $post])
                    @endcomponent
{{--                @endif--}}
            @endforeach
        </div>
    </div>

</div>
</body>
</html>

<script>
    const slider = document.querySelector('.timeline-posts-wrapper');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });
</script>