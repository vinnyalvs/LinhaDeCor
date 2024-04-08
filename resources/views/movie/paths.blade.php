<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="paths-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="paths-Content">
        <div class="paths-Text-1 paths-text-container">
            <div id="paths-prizes">
                <h2> {{__('movie/paths.title_prizes')}} </h2>
                <ul>
                    <li>{{__('movie/paths.item_prizes_1')}}</li>
                    <li>{{__('movie/paths.item_prizes_2')}}</li>
                </ul>
            </div>
        </div>
        <div class="paths-Text-2 paths-text-container">
            <div id="paths-labs">
                <h2> {{__('movie/paths.title_labs')}} </h2>
                <ul>
                    <li>{{__('movie/paths.item_labs_1')}}</li>
                    <li>{{__('movie/paths.item_labs_2')}}</li>
                    <li>{{__('movie/paths.item_labs_3')}}</li>
                    <li>{{__('movie/paths.item_labs_4')}}</li>
                    <li>{{__('movie/paths.item_labs_5')}}</li>
                    <li>{{__('movie/paths.item_labs_6')}}</li>
                </ul>
            </div>
        </div>
        <div class="paths-Text-3 paths-text-container">
            <div id="paths-markets">
                <h2> {{__('movie/paths.title_markets')}}</h2>
                <ul>
                    <li>{{__('movie/paths.item_markets_1')}}</li>
                    <li>{{__('movie/paths.item_markets_2')}}</li>
                    <li>{{__('movie/paths.item_markets_3')}}</li>
                    <li>{{__('movie/paths.item_markets_4')}}</li>
                    <li>{{__('movie/paths.item_markets_5')}}</li>
                    <li>{{__('movie/paths.item_markets_6')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 6])
        </div>
    </div>
</div>

</body>
</html>