@extends('layouts.app')

@section('content')
<div class="contenido">
    <div class="row">
        <div class="col-md-12">
            <div id="carrousel" style="display: none;">
                <div id="carrousel-content1"></div>
                <div id="carrousel-content2"></div>
                <div id="carrousel-content3"></div>
            </div>
            <div>
                <ul>
                    @foreach ($grades as $grade)
                    <li><a href="{{ url('/curso?'.$grade->id) }}">{{ $grade->name }}<a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
