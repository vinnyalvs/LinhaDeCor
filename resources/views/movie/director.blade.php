<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
  <div class="Content">
    <div class="Img-Name">
        <div class="Profile-img">
            <div class="director-img"></div> 
        </div>
        <div class="Profile-name">
          <div class="director-aux">
            <h2 class="h2-subtitle">{{__('about/director.name')}}</h2>
            <h3 >{{__('about/director.title')}}</h3>
          </div>
        </div>
    </div>
    <div class="Desc">
      <div class="Desc-1">
        <span class="director-desc">{{__('about/director.desc1')}}</span>
      </div>
      <div class="Desc-2">
        <span class="director-desc">{{__('about/director.desc2')}}</span>
      </div>
    </div>>
  </div>
<div class="Sidebar">
    <div class="sidebar-Menu">
        @include('layout.partials.sidebar',['menuSelected' => 2])
    </div>
</div>
</div>
</body>
</html>