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

      <form action="../updateData" method="POST" class="margin" enctype="multipart/form-data">
          {{ csrf_field() }}

                  @foreach ($grades as $grade)
                  <div id="profileImg" style="background-image:url(' ../{{ $grade->logotipo}} ')"></div>
                  <input type="hidden" name="id" value="{{ $grade->id }}">
                    <input name="name"  type="text" value="{{ $grade->name}}">
                    <label for="profilePic">Selecciona una imagen</label>
                    <input id="profilePic" name="logotipo" class="hidden" type="file" required>
                      <input type="submit" value="Guardar perfil">
                      @endforeach
              </form>
    </body>
</html>
@endsection
