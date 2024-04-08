<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="letter-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="letter-Content">
        <div class="letter-Text">
            <h3 class="letter-Title-1">{{__('movie/letter.Title-1')}}</h3>
            <h3 class="letter-Title-2">{{__('movie/letter.Title-2')}}</h3>
            <p>
                 {{__('movie/letter.paragraph_1')}}
            </p>
            <p>
                {{__('movie/letter.paragraph_2')}}
            </p>
            <h3 class="letter-Title-2">{{__('movie/letter.Title-3')}}</h3>
            <p>
                {{__('movie/letter.paragraph_3')}}
            </p>
            <p>
                {{__('movie/letter.paragraph_4')}}
            </p>
            <p>
                {{__('movie/letter.paragraph_5')}}
            </p>
            <p>
                {{__('movie/letter.paragraph_6')}}
            </p>
            <h4 class="letter-Title-2">{{__('movie/letter.Title-4')}}</h4>
        </div>
    </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 3])
        </div>
    </div>
</div>
</body>
</html>