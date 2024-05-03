<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
{{-- <div class="timeline-main">
        @include('layout.partials.logo')
        @include('layout.partials.header')
    <div class="timeline-Sidebar">
        <div class="timeline-verbete">
            <div class="internal-verbete">
                <p class ="subtitle-name"> Sobre o Projeto </p>
                <br>
                <details class="verbete-entry" open>
                    <summary class="entry-title">{{__('landingpage/entrys.exposition')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.exposition_text')}} </p>
                </details>
                <details class="verbete-entry" open>
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
            <div class ="exposition-button" id="edital-button">
                Edital
            </div>
            </a>
            <a href="{{ url('/') }}">
                <div class ="inscription-button" id="inscription-button">
                    Inscrições
                </div>
            </a>
        </div>
        
    </div>
</div> --}}

<div class="welcome-main">
    <div class = "welcome-logo-header">
        @include('layout.partials.logo')
        @include('layout.partials.header')
    </div>
<div class = "welcome-content"> 
    <div class="welcome-sidebar">
        <div class="welcome-verbete">
            <div class="internal-verbete">
                <p class ="entry-text about-project"> {{__('landingpage/entrys.about_project')}}</p>

                <br>
                <details class="verbete-entry">
                    <summary class="entry-title">{{__('landingpage/entrys.exposition')}}</summary>
                    <p class ="entry-text"> {{__('landingpage/entrys.exposition_text')}} </p>
                </details>
                <details class="verbete-entry" >
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
    <div class="welcome-exposition">
        @include('landingpage.partials.exposition')
        <p class ="entry-text"> {{__('landingpage/entrys.constituinte_text')}} </p>
        <p class ="entry-text"> {{__('landingpage/entrys.constituinte_text_2')}} </p>
        <div class="exposition-buttons">
            <a href="{{ url('/') }}">
            <div class ="exposition-button" id="edital-button">
                ACESSE O EDITAL
            </div>
            </a>
            <a href="{{ url('/') }}">
                <div class ="inscription-button" id="inscription-button">
                    INSCREVA-SE
                </div>
            </a>
        </div>
    </div>
</div>
<div class = "welcome-footer">
    <div class="footer-column">
        <h3>CO - Realização</h3>
        <div class="image-container">
            <img class="img-00" id="ngongo" src="{{url('../img/ngongo-s.png')}}">
            <img class="img-00" id="awelle" src="{{url('../img/awelle.png')}}">
        </div>
    </div>
    <div class="footer-column">
        <h3>Patrocínio</h3>
        <div class="image-container">
            <img class="img-00" id="rumos" src="{{url('../img/selorumos.png')}}">
            <img class="img-00" src="{{url('../img/Logo_Cross_Screen_Wht.png')}}"> 
            <img class="img-gov" src="{{url('../img/SESEC.png')}}">
            <img class="img-large img-gov" src="{{url('../img/barradelogos-s.png')}}">  
        </div>
    </div>
</div>
</div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
const summaries = document.querySelectorAll('.verbete-entry summary');

summaries.forEach(summary => {
    summary.addEventListener('click', function() {
        // Close all summaries except the clicked one
        summaries.forEach(s => {
            if (s !== summary && s.parentNode.hasAttribute('open')) {
                s.parentNode.removeAttribute('open');
            }
        });
    });
});
});
</script>
