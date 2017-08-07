@extends('layouts.app')

@section('content')
<div class="contenido">
    @if(!$noQuestions)
    <form method="POST" action="../review" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <h3>Evaluación de {{ $topic[0]->name }}</h3>
                <p>Responde de forma correcta las siguientes preguntas</p>
                @foreach($questions as $q)
                <fieldset>
                <p>{{ $q->description }}</p>
                @foreach($answers as $a)
                <input type="radio" name="answer{{ $q->id }}" value="{{ $a->id }}">{{ $a->description }}<br>
                @endforeach
                </fieldset>
                @endforeach
                <input type="hidden" name="id_userFK" value="{{ Auth::user()->id }}">
                <input type="hidden" name="id_topicFK" value="{{ $id }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/question/id='.$id) }}">Añadir preguntas</a>
            </div>
        </div>
    </form>
    @else
    <div class="row">
            <div class="col-md-12">
                <h3>Evaluación de {{ $topic[0]->name }}</h3>
                <p>No se han registrado preguntas todavía</p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/question/id='.$id) }}">Añadir preguntas</a>
        </div>
    </div>
    @endif
</div>
@endsection
