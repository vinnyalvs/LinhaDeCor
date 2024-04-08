@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
        <!DOCTYPE html>
<html >


<div class="container">
    <div class ="director-active-box">
        @component('about.director',['title' => __('about/director.title'), ])
        @endcomponent
    </div>
    @component('about.producers')
    @endcomponent
    @component('about.sheet')
    @endcomponent
    @component('about.paths')
    @endcomponent
</div>


</html>
@endsection