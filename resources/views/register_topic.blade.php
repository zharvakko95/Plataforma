@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro del Tema</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="../../topic" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre del Tema</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" cols="5" rows="5" required></textarea>

                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_topicFK') ? ' has-error' : '' }}">
                            <label for="id_topicFK" class="col-md-4 control-label">Temas Relacionados</label>

                            <div class="col-md-6">
                                <select id="id_topic1FK" class="form-control" name="id_topic1FK">
                                    <option value="0" selected>Seleccione...</option>
                                    @foreach($topics as $topic)
                                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                    @endforeach
                                </select>
                                
                                <select id="id_topic2FK" class="form-control" name="id_topic2FK">
                                    <option value="0" selected>Seleccione...</option>
                                    @foreach($topics as $topic)
                                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_topicFK'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_topicFK') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                            <label for="video" class="col-md-4 control-label">Video ID</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control" name="video" value="{{ old('video') }}" required>

                                @if ($errors->has('video'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('video') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('id_cursoFK') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="id_cursoFK" type="hidden" class="form-control" name="id_cursoFK" value="{{ $id }}" required>

                                @if ($errors->has('id_cursoFK'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_cursoFK') }}</strong>
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
