@extends('layouts.app')

@section('content')
<div class="contenido">
    <div class="row">
        <div class="col-md-12">
            <div>
                @foreach ($datas as $data)
                <h3>{{ $data->name }}</h3>
                <h3>Resumen del tema</h3>
                <p>{{ $data->description }}</p>
                <h3>Temas relacionados</h3>
                @foreach ($related as $r)
                <a href="">{{ $r->name }}</a><br>
                @endforeach
                <a href="{{ url('/review/id='.$id) }}"><h3>Evaluación</h3></a>
                <h3>Lo que aprendí</h3>
                <form>
                    <textarea id="description" name="description" cols="5" rows="5" required></textarea><br>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $data->video }}" frameborder="0" allowfullscreen></iframe>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
