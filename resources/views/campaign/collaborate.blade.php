<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="collaborate-main">
    <div class="Sidebar">
    </div>
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="collaborate-Content">
        <div class="collaborate-Text">
            <h3 class="collaborate-Title-2">{{__('campaing/collaborate.title_partner')}}</h3>
            <p>
                {{__('campaing/collaborate.text_partner')}}
            </p>
            <h3 class="collaborate-Title-2">{{__('campaing/collaborate.title_wannabe_partner')}}</h3>
            <p>
                {{__('campaing/collaborate.text_wannabe_partner')}}
            </p>
            <h3 class="collaborate-Title-2">{{__('campaing/collaborate.title_sponsors')}}</h3>
            <p>
                {{__('campaing/collaborate.text_sponsors')}}
            </p>
            <div class="sponsor-img-container">
                <div class="collaborate-img rumos"></div>
                <p>{{__('campaing/collaborate.rumos')}}</p>
                <div class="collaborate-img rio"></div>
            </div>
            <h3 class="collaborate-Title-2">{{__('campaing/collaborate.title_support')}}</h3>
            <div class="sponsor-img-container">
                <div class="collaborate-img nirema"></div>
                <div class="collaborate-img hn"></div>
                <div class="collaborate-img pretugues"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>