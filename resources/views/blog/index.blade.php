@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
<!DOCTYPE html>
<html lang="pt">


    <div class="container py-5">
        @foreach($posts as $post)
            @component('blog.post',['post' => $post])
            @endcomponent
        @endforeach
    </div>

</html>
@endsection
