<div class="prod-content">
    <div class="producers-left-container">
        <div class="producers-img {{$id}}"></div>
    </div>
    <div class="producers-right-container">
        <h2 class= "prod-title">{{$name}}</h2>
        <p>{{$desc}}</p>
    @if(str_contains($name,'Fernanda Vidigal'))
            <a href="{{$url_1 ?? ''}}"> Website </a>
            <br>
            <a href="{{$url_2}}"> IMDB </a>
            <br>
            <a href="{{$url_3}}"> Linkedin </a>
            <br>
        @endif
    </div>
</div>