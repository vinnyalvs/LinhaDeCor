<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
<div class="content-min-height">
    @include('layout.partials.header')
    @yield('content')
</div>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
@yield('scripts')
</body>
</html>