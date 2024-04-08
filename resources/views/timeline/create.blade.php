@extends('layout.mainlayout')

@section('head')

@endsection

@section('content')
        <!DOCTYPE html>
<html >


<div class="dashboard-container">
        <h2 class="white-subtitle">Criar Evento da Linha do Tempo</h2>
            <div class="" data-wow-delay="0.5s">
                <form id="rec-form" method="POST" action="{{url('timeline')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="title" >{{ __('Título') }}</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                    </div>

                    <div class="form-group row">
                        <label for="subtitle" >{{ __('Subtítulo') }}</label>
                        <input id="title" type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{ old('subtitle') }}"  autocomplete="subtitle" autofocus>
                    </div>

                    <div class="form-group row">
                        <label for="thumbnail" >{{ __('Imagem') }}</label>
                        <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') }}"  autocomplete="thumbnail" autofocus>
                    </div>

                    <div class="form-group row">
                        <label for="type" >{{ __('Selecione o tipo') }}</label>
                        <label for="type_law" >{{ __('Decreto de Lei') }}</label>
                        <input id="type_law" type="radio" class="@error('type') is-invalid @enderror" name="timeline_type" value="law" required autocomplete="type" >
                        <label for="type_event">{{ __('Momento de Resistência') }}</label>
                        <input id="type_event" type="radio" class="@error('type') is-invalid @enderror" name="timeline_type" value="event" required autocomplete="type" >
                    </div>

                    <div class="form-group row">
                        <label for="type" >{{ __('Defina a data do evento') }}</label>
                        <input id="event_date" type="date" class="@error('event_date') is-invalid @enderror" name="event_date" value="1800-01-01" required autocomplete="type" >
                    </div>

                    <div class="form-group row">
                        <label for="content">{{ __('Conteúdo') }}</label>
                        <input id="content" type="text" class="text-box form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>
                    </div>

                    <div class="col-12">
                        <button type="submit">Salvar Post</button>
                    </div>
                </form>
            </div>
        </div>


</html>
@endsection
