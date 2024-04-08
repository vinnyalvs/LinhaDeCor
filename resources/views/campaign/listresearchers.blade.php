<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="researchers-main">
    @include('layout.partials.logo')
    @include('layout.partials.header')
    <div class="Sidebar">
        <div class="Menu">
            @include('campaign.partials.sidebar',['menuSelected' => 3])
        </div>
    </div>
    <div class="researchers-Content">
{{--        <div>--}}
            @component('campaign.researchers')
            @endcomponent
{{--        </div>--}}
        <div class ="researchers-Figures">
            <div class="researchers-tab" id="researchers-tab">
                <button class="tablinks researchers-img Ana active" onclick="openCity(event, this.id)" id="Ana"></button>
                <button class="tablinks researchers-img Bruna" onclick="openCity(event, this.id)" id="Bruna"></button>
                <button class="tablinks researchers-img Fernanda" onclick="openCity(event, this.id)" id="Fernanda"></button>
                <button class="tablinks researchers-img Itan" onclick="openCity(event, this.id)" id="Itan" ></button>
                <button class="tablinks researchers-img Mateus" onclick="openCity(event, this.id)" id="Mateus"></button>
                <button class="tablinks researchers-img Stephanie" onclick="openCity(event, this.id)" id="Stephanie"></button>
                <button class="tablinks researchers-img Thula" onclick="openCity(event, this.id)" id="Thula"></button>
            </div>
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
        tabcontent = document.getElementsByClassName("researchers-tabcontent");
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
    document.getElementById("Ana").click();

</script>