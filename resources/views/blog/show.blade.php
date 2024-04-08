@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
<!DOCTYPE html>
<html lang="pt">
<!-- Post Thumbnail -->


<div class="post-thumbnail">
	{!! $post->post->thumbnail !!}

</div>
<img src=" {{url('images/'.$post->post->thumbnail)}}" alt="post image">

<div class="col-lg-10 text-center">
	<h1 class="display-3 animated slideInDown">{{$post->post->title }}</h1>
	<h3 class="display-3 animated slideInDown">{{$post->post->subtitle }}</h3>
	<p>{{$post->post->body}}</p>
</div>



</html>
@endsection