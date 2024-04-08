<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
<div class="timeline-main">
        @include('layout.partials.logo')
        @include('layout.partials.header')
    <div class="timeline-Sidebar">
        <div class="timeline-verbete">
            <div class="internal-verbete">
                <details class="verbete-entry">
                    <summary class="entry-title">{{__('landingpage/entrys.exposition')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.exposition_text')}} </p>
                </details>
                <details class="verbete-entry">
                    <summary class="entry-title">{{__('landingpage/entrys.research')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.research_text')}} </p>
                </details>
                <details class="verbete-entry">
                    <summary class="entry-title">{{__('landingpage/entrys.education')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.education_text')}} </p>
                </details>
                <details class="verbete-entry" >
                    <summary class="entry-title">{{__('landingpage/entrys.movie')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.movie_text')}} </p>
                </details>
            </div>
        </div>
    </div>
    <div class="timeline-Content">
        @include('landingpage.partials.exposition')

        <div class="exposition-buttons">
            <a href="{{ url('/') }}">
            <div id="edital-button">
                <p class="sheet-subtitle-label">{{__('movie/sheet.director')}}</p>
                <p>{{__('movie/sheet.director_content')}}</p>
            </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
