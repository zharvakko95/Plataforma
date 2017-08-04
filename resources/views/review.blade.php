@extends('layouts.app')

@section('content')
<div class="contenido">
    @if(!$noQuestions)
    <div class="row">
        <div class="col-md-12">
            <p>Sección de preguntas</p>
            @foreach($questions as $q)
            <p>{{ $q->description }}</p>
                @foreach($answers as $a)
                <input type="radio" name="answer" value="{{ $a->description }}">{{ $a->description }}<br>
                @endforeach
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/question/id='.$id) }}">Añadir preguntas</a>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/question/id='.$id) }}">Añadir preguntas</a>
        </div>
    </div>
    @endif
</div>
@endsection
