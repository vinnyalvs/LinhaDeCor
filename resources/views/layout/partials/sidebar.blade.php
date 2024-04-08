<div class="Menu-Left-01">
    <div><span class="Menu-item">01</span></div>
</div>
<div class="Menu-Right-01">
    <div class ="div-menu-right @if($menuSelected==1) white @endif"><a href="{{ url('/filme/sinopse') }}"> {{__('menu/sidebar.synopsis')}}  </a> </div>
</div>
<div class="Menu-Left-02">
    <div><span class="Menu-item">02</span></div>
</div>
<div class="Menu-Right-02">
    <div class ="div-menu-right @if($menuSelected==2) white @endif"><a href="{{ url('/filme/direcao') }}"> {{__('menu/sidebar.director')}}</a></div>
</div>
<div class="Menu-Left-03">
    <div><span class="Menu-item">03</span></div>
</div>
<div class="Menu-Right-03">
    <div class ="div-menu-right @if($menuSelected==3) white @endif"><a href="{{ url('/filme/carta-intencao') }}"> {{__('menu/sidebar.letter')}} </a></div>
</div>
<div class="Menu-Left-04">
    <div><span class="Menu-item">04</span></div>
</div>
<div class="Menu-Right-04">
    <div class ="div-menu-right @if($menuSelected==4) white @endif"><a href="{{ url('/filme/produtores') }}"> {{__('menu/sidebar.producers')}} </a></div>
</div>
<div class="Menu-Left-05">
    <div><span class="Menu-item">05</span></div>
</div>
<div class="Menu-Right-05">
    <div class ="div-menu-right @if($menuSelected==5) white @endif"><a href="{{ url('/filme/ficha-tecnica') }}"> {{__('menu/sidebar.sheet')}} </a></div>
</div>
<div class="Menu-Left-06">
    <div><span class="Menu-item">06</span></div>
</div>
<div class="Menu-Right-06">
    <div class ="div-menu-right @if($menuSelected==6) white @endif"><a href="{{ url('/filme/caminhos-do-filme') }}"> {{__('menu/sidebar.paths')}} </a></div>
</div>
<div class="Menu-Left-07">
    <div><span class="Menu-item">07</span></div>
</div>
<div class="Menu-Right-07">
    <div class ="div-menu-right @if($menuSelected==7) white @endif"><a href="{{ url('/filme/objetivos') }}"> {{__('menu/sidebar.goals')}} </a></div>
</div>

