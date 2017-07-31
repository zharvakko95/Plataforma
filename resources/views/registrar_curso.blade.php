@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro del Curso</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="store" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre del Curso</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="logotipo" class="col-md-4 control-label">Logotipo</label>

                            <div class="col-md-6">
                                <input id="logotipo" type="file" accept="image/*" class="form-control" name="logotipo"  required>

                                @if ($errors->has('logotipo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('logotipo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_areaFK') ? ' has-error' : '' }}">
                            <label for="id_areaFK" class="col-md-4 control-label">Área Asignada</label>

                            <div class="col-md-6">
                                <select id="id_areaFK" class="form-control" name="id_areaFK">
                                    <option value="1">Vendedor</option>
                                    <option value="2">Cliente</option>
                                    <option value="3">Colaborador</option>
                                </select>

                                @if ($errors->has('id_areaFK'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_areaFK') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('home') }}">
                                    <button type="button" class="btn btn-danger">
                                        Cancelar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
