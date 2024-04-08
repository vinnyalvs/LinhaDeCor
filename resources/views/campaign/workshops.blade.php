<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="classplans-main">
    <div class="Sidebar">
        <div class="classplans-Menu">
            @include('campaign.partials.sidebar',['menuSelected' => 2])
        </div>
    </div>
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="classplans-Content">
        <div class="classplans-Text">
            <div>
                <p class="classplans-text-1">
                    PÁGINA EM CONSTRUÇÃO
                </p>
            </div>
            <div class="classplans-download">
            </div>
            <div>
                <p class="classplans-text-1">
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>