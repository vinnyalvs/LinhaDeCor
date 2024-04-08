@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
		<!DOCTYPE html>


<html >


<!-- Contact Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<h2 class="section-title bg-white text-center text-primary px-3">Editar Postagem</h2>
		</div>
		<div class="row g-12">
			<div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
				<form id="rec-form" method="POST" action="{{url('blog/'. $post->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="form-group row">
						<label for="title" class="col-4 col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
						<div class="col-8 col-md-6">
							<input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->post->title }}" required autocomplete="title" autofocus>

							@error('title')
							<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="subtitle" class="col-4 col-md-4 col-form-label text-md-right">{{ __('Subtítulo') }}</label>
						<div class="col-8 col-md-6">
							<input id="title" type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{ $post->post->subtitle }}" required autocomplete="subtitle" autofocus>

							@error('subtitle')
							<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<img src=" {{url('images/'.$post->post->thumbnail)}}" alt="post image">
					</div>
					<div class="form-group row">
						<label for="thumbnail" class="col-4 col-md-4 col-form-label text-md-right">{{ __('Imagem') }}</label>
						<div class="col-8 col-md-6">
							<input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{$post->post->thumbnail }}" required autocomplete="thumbnail" autofocus>

							@error('thumbnail')
							<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="content" class="col-4 col-md-4 col-form-label text-md-right">{{ __('Conteúdo') }}</label>
						<div class="col-8 col-md-6">
							<input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $post->post->body  }}" required autocomplete="content" autofocus>

							{{--                            <div id="editor-container" style="height: 375px">--}}
							{{--                            </div>--}}

							@error('content')
							<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
							@enderror
						</div>

					</div>

					<div class="col-12">
						<button type="submit">Atualizar Post</button>
					</div>
				</form>

				<form id="form-delete" method="POST" action="{{url('blog/'. $post->id)}}" enctype="multipart/form-data">
					@csrf
					@method('DELETE')
					<div class="col-8 col-md-6">
						<div class="col-12">
							<button type="submit">Apagar post</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

</html>
@endsection

@section('scripts')
	<!-- Core build with no theme, formatting, non-essential modules -->
	<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
	<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
	<!-- Main Quill library -->
	<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
	<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

	<!-- Theme included stylesheets -->
	<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

	<script>
		var quill = new Quill('#editor-container', {
			modules: {
				toolbar: [
					['bold', 'italic'],
					['link', 'blockquote'],
					[{ list: 'ordered' }, { list: 'bullet' }]
				]
			},
			placeholder: 'Coloque aqui o texto',
			theme: 'snow'
		});
	</script>
@endsection