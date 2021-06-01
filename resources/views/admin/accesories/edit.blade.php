@extends('adminlte::page')

@section('title', 'Editar accesorios')

@section('content_header')
  <h1>Editar accesorio</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::model($accesory, ['route' => ['admin.accesories.update', $accesory], 'method' => 'put']) !!}
        <div class="form-group">
          {!! Form::label('nombre', 'Nombre') !!}
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del accesorio']) !!}
          @error('nombre')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
          {!! Form::label('cantidad', 'Cantidad') !!}
          {!! Form::number('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad de accesorio']) !!}
          @error('cantidad')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        {!! Form::submit('Editar accesorio', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop