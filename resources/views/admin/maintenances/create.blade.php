@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Inicio</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('info')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card">
  <div class="card-body">
    {{$car}}
    {!! Form::open(['route' => 'admin.maintenances.store']) !!}
      <div class="form-group">
        {!! Form::label('descripcion_manto', 'Descripcion del  mantenimiento') !!}
        {!! Form::text('descripcion_manto', null, ['class' => 'form-control', 'placeholder' => 'Describa el mantenimiento']) !!}
        @error('nombre')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-group">
        {!! Form::label('cantidad_dias', 'Días fuera de servicio') !!}
        {!! Form::number('cantidad_dias', null, ['class' => 'form-control']) !!}
        @error('nombre')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-group">
        {!! Form::label('pago_manto', 'Pago del mantenimiento') !!}
        {!! Form::text('pago_manto', null, ['class' => 'form-control']) !!}
        @error('nombre')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-group">
        {!! Form::label('fecha_manto', 'Fecha del mantenimiento') !!}
        {!! Form::date('fecha_manto', null, ['class' => 'form-control']) !!}
        @error('nombre')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-group">
        {!! Form::label('car_id', 'Detalle del vehiculo') !!}
        {!! Form::hidden('car_id', $car->id) !!}
        <input type="text" value="{{$car->marca}}" class="form-control" readonly>
        @error('nombre')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div> 

      {!! Form::submit('Registrar mantenimiento', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
</div>
@stop