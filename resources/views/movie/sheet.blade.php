<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="sheet-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="sheet-Content">
        <div class="sheet-Text-1 sheet-list">
            <div id="production_company">
                <p class="sheet-subtitle-label">{{__('movie/sheet.production_company')}}</p>
                <p>{{__('movie/sheet.production_company_content')}}</p>
            </div>
            <div id="director">
                <p class="sheet-subtitle-label">{{__('movie/sheet.director')}}</p>
                <p>{{__('movie/sheet.director_content')}}</p>
            </div>
            <div id="producers">
                <p class="sheet-subtitle-label">{{__('movie/sheet.producers')}}</p>
                <p>{{__('movie/sheet.producers_content')}}</p>
            </div>
            <div id="screenplay">
                <p class="sheet-subtitle-label">{{__('movie/sheet.screenplay')}}</p>
                <p>{{__('movie/sheet.screenplay_content')}}</p>
            </div>
            <div id="researchers">
                <p class="sheet-subtitle-label">{{__('movie/sheet.researchers')}}</p>
                <p>{{__('movie/sheet.researchers_content')}}</p>
            </div>
        </div>
        <div class="sheet-Text-2 sheet-list">
            <div id="photo_director">
                <p class="sheet-subtitle-label">{{__('movie/sheet.photo_director')}}</p>
                <p>{{__('movie/sheet.photo_director_content')}}</p>
            </div>
            <div id="duration">
                <p class="sheet-subtitle-label">{{__('movie/sheet.duration')}}</p>
                <p>{{__('movie/sheet.duration_content')}}</p>
            </div>
            <div id="format">
                <p class="sheet-subtitle-label">{{__('movie/sheet.format')}}</p>
                <p>{{__('movie/sheet.format_content')}}</p>
            </div>
            <div id="language">
                <p class="sheet-subtitle-label">{{__('movie/sheet.language')}}</p>
                <p>{{__('movie/sheet.language_content')}}</p>
            </div>
            <div id="intl_versions">
                <p class="sheet-subtitle-label">{{__('movie/sheet.intl_versions')}}</p>
                <p>{{__('movie/sheet.intl_versions_content')}}</p>
            </div>
        </div>
    </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 5])
        </div>
    </div>
</div>
</body>
</html>