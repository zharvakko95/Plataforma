@extends('layouts.app')

@section('content')
<div class="contenido">
    <div class="row">
        <div class="col-md-12">
            <div>
                <ul>
                    @foreach ($topics as $topic)
                    <li><a href="{{ url('topic/id='.$topic->id) }}">{{ $topic->name }}<a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
