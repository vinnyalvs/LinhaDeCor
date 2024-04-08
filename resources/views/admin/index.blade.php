@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
        <!DOCTYPE html>
<html >


<!-- Contact Start -->
<div>
    <a href="{{route('blog.novo')}}" class="btn-link" > Criar Post do Blog</a>
    <a href="{{route('timeline.novo')}}" class="btn-link" > Criar Evento da Linha do tempo</a>
</div>





</html>
@endsection