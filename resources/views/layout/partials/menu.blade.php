<section class="banner">

  <label class="menu-label">MENU</label>
  <label for="menu-control" class="hamburger" >
    <i id="teste_i" class="hamburger__icon"></i>
    <i id="teste_j"  class="hamburger__icon"></i>
    <i class="hamburger__icon"></i>
  </label>

  <input type="checkbox" id="menu-control" class="menu-control" onclick="hideLogo(this.id)">

  <aside class="sidebar">

    <nav class="sidebar__menu">
      <a href="{{ url('/timeline') }}"> {{__('menu/menu.item_1')}} </a>
      <a href="{{ url('/curva-resistencias') }}"> {{__('menu/menu.item_2')}}</a>
      <a href="{{ url('/filme') }}">{{__('menu/menu.item_3')}} </a>
      <a href="{{ url('/campanha/planos-de-aula') }}">{{__('menu/menu.item_4')}} </a>
      <a href="{{ url('/campanha/outros-formatos') }}">{{__('menu/menu.item_5')}}</a>
      <a href="{{ url('/campanha/colabore') }}">{{__('menu/menu.item_6')}} </a>
      <a href="{{ url('/contato') }}">{{__('menu/menu.item_7')}} </a>
    </nav>


  </aside>


</section>

<script>
    function hideLogo(id) {

      const logoId = 'logo-img';
      const headerId = 'header-img';
      let menuElement = document.getElementById(id);
      let logoElement = document.getElementById(logoId);
      let headerElement = document.getElementById(headerId);

      if(menuElement.checked) {
        logoElement.style.backgroundColor = '#262626';
        logoElement.style.width = '2px'
        headerElement.style.backgroundColor = '#262626';
        let icons = document.getElementById("teste_i");
        icons.style.transform = 'rotate(45deg)';
        let icon = document.getElementById("teste_j");
        icon.style.transform = 'rotate(-45deg) translate(7px,-8px)';
      }
      else {
        let icons = document.getElementById("teste_i");
        icons.style.transform = 'rotate(0deg)';
        let icon = document.getElementById("teste_j");
        icon.style.transform = 'rotate(0deg)';
        headerElement.style.backgroundColor = '#fff';
        logoElement.style.width = '100%';
      }



    }

</script>