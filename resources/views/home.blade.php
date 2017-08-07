@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">

        <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <form action="" method="POST" class="margin" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- <input type='hidden' class='tileId' name="title_id" value="">
            <input type='hidden' class='tileId' name="user_id" value=""> -->
            @foreach ($grades as $grade)
            <li>
                <a href="{{ url('curso/id='.$grade->id) }}">{{ $grade->name }}</a>
                <a href="{{ url('editarcurso/id='.$grade->id) }}">
                    <div id="profileImg"style="background-image:url(' ../images/play.png')"></div>
                </a>
            </li>
            @endforeach
        </form>
    </body>
</html>
@endsection
