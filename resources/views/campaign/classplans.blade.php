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
            @include('campaign.partials.sidebar',['menuSelected' => 1])
        </div>
    </div>
    <div class="Logo">
        <div class="logo-img"></div>
    </div>
    @include('layout.partials.header')
    <div class="classplans-Content">
        <div class="classplans-Text">
            <div>
                <p class="classplans-text-1">
                    {{__('campaing/classplans.text_1')}}
                </p>
            </div>
            <div class="classplans-download">
                <a href="https://forms.gle/QyVvwuAkFyXCMDTp8" target="_blank">{{__('campaing/classplans.download_text')}}</a>
            </div>
            <div>
                <p class="classplans-text-1">
                    {{__('campaing/classplans.description')}}
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>