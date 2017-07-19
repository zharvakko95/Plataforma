@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registro</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nombre</label>

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
              <label for="last_name" class="col-md-4 control-label">Apellido</label>

              <div class="col-md-6">
                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                @if ($errors->has('last_name'))
                <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Contraseña</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
              <label for="area_id" class="col-md-4 control-label">Área Asignada</label>

              <div class="col-md-6">
                <select id="area_id" class="form-control" name="area_id">
                  <option value="1">vendedor</option>
                  <option value="2">cliente</option>
                  <option value="3">colaborador</option>
                </select>

                @if ($errors->has('area_id'))
                <span class="help-block">
                  <strong>{{ $errors->first('area_id') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
              <label for="role" class="col-md-4 control-label">Rol</label>

              <div class="col-md-6">
                <p class="">
                  <input id="role" type="radio" name="role" value="estudiante" checked> Estudiante<br>
                  <input id="role" type="radio" name="role" value="profesor" > Profesor
                </p>

                @if ($errors->has('role'))
                <span class="help-block">
                  <strong>{{ $errors->first('role') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
              <label for="code" class="col-md-4 control-label">Código</label>

              <div class="col-md-6">
                <input id="code" type="number" class="form-control" name="code" min="1000" max="9999" value="{{ old('code') }}" required>

                @if ($errors->has('code'))
                <span class="help-block">
                  <strong>{{ $errors->first('code') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Registrar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
