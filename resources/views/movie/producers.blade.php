<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="producers-main">
  @include('layout.partials.logo')
  @include('layout.partials.header')
  <div class="producers-Content">
      <div class="producers-Name-Desc">
        @component(
          'movie.partials.producer',
           [
           'name'=> 'Ngongo' ,
           'id' => 'Ngongo',
           'desc' => __('about/producers.ngongo')
           ]
         )@endcomponent

        @component(
           'movie.partials.producer',
            [
            'name'=> 'Carapia' ,
            'id' => 'Carapia',
            'desc' => __('about/producers.carapia')
            ]
        )@endcomponent

        @component(
         'movie.partials.producer',
          [
              'name'=> 'Fernanda Vidigal' ,
              'id' => 'Vidigal',
              'desc' => __('about/producers.vidigal'),
              'url_1' => __('about/producers.url_1'),
              'url_2' => __('about/producers.url_2'),
              'url_3' => __('about/producers.url_3')
          ]
        )@endcomponent

          @component(
        'movie.partials.producer',
         [
         'name'=> 'Parati Filmes' ,
         'id' => 'Parati',
         'desc' => __('about/producers.parati')
         ]
       )@endcomponent

          @component(
        'movie.partials.producer',
         [
         'name'=> 'Séverine Roinssart' ,
         'id' => 'Roinssart',
         'desc' => __('about/producers.roinssart')
         ]
       )@endcomponent
      </div>
  </div>
    <div class="Sidebar">
        <div class="sidebar-Menu">
            @include('layout.partials.sidebar',['menuSelected' => 4])
        </div>
    </div>
</div>
</body>
</html>