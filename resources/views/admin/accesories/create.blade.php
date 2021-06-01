@extends('adminlte::page')

@section('title', 'Registrar accesorio')

@section('content_header')
  <h1>Registrar nuevo accesorio</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      
      {!! Form::open(['route' => 'admin.accesories.store']) !!}
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

        {!! Form::submit('Guardar accesorio', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop