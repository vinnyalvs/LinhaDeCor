<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="synopsis-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
  <div class="synopsis-Content">
    <div class="synopsis-Img-Name">
        <div class="synopsis-Profile-img item">
            <div class="photo-img"></div>
        </div>
        <div class="synopsis-Profile-name item">
            <div class="synopsis-aux">
                  <p class="subtitle-name">{{__('movie/synopsis.name')}}</p>
                  <p class="synopsis-desc">{{__('movie/synopsis.desc')}}</p>
              </div>
         </div>
    </div>
  </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 1])
        </div>
    </div>
</div>
</body>
</html>