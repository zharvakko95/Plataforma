@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Preguntas</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="../../question" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-3 control-label">Pregunta</label>

                            <div class="col-md-7">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('answer1') ? ' has-error' : '' }}">
                            <label for="answer1" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-6">
                                <input id="answer1" type="text" class="form-control" name="answer1" value="{{ old('answer1') }}" required>
                                
                                @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('answer2') ? ' has-error' : '' }}">
                            <label for="answer2" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-6">
                                <input id="answer2" type="text" class="form-control" name="answer2" value="{{ old('answer2') }}" required>

                                @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('answer3') ? ' has-error' : '' }}">
                            <label for="answer3" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-6">
                                <input id="answer3" type="text" class="form-control" name="answer3" value="{{ old('answer3') }}" required>

                                @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer3') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('answer4') ? ' has-error' : '' }}">
                            <label for="answer4" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-6">
                                <input id="answer4" type="text" placeholder="Opcional" class="form-control" name="answer4" value="{{ old('answer4') }}">

                                @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer4') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('id_topicFK') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="id_topicFK" type="hidden" class="form-control" name="id_topicFK" value="{{ $id }}" required>

                                @if ($errors->has('id_topicFK'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_topicFK') }}</strong>
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
