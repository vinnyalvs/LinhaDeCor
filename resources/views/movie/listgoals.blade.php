<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="goals-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="goals-Content">
        @component('movie.goals')
        @endcomponent
        <div class ="goals-Figures">
            <div class="goals-tab" id="goals-tab">
                <button class="tablinks nun-text goal_1 active" onclick="openCity(event, this.id)" id="goal_1">01</button>
                <button class="tablinks nun-text goal_2" onclick="openCity(event, this.id)" id="goal_2">02</button>
                <button class="tablinks nun-text goal_3" onclick="openCity(event, this.id)" id="goal_3">03</button>
                <button class="tablinks nun-text goal_4" onclick="openCity(event, this.id)" id="goal_4">04</button>
                <button class="tablinks nun-text goal_5" onclick="openCity(event, this.id)" id="goal_5">05</button>
                <button class="tablinks nun-text goal_6" onclick="openCity(event, this.id)" id="goal_6">06</button>
            </div>
        </div>
    </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 7])
        </div>
    </div>
</div>
</body>
</html>
<script>
    function openCity(evt, elementId) {
        // console.log(elementId);
        divName = elementId + "-div";
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("goals-tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(divName).style.display = "block";
        evt.currentTarget.className += " active";  }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("goal_1").click();

</script>