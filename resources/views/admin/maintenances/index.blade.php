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
  <table class="table table-stripe">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Días fuera de servicion</th>
        <th>Fecha del mantenimiento</th>
        <th>Vehiculo</th>
        <th colspan="2"></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($maintenances as $maintenance)
        <tr>
          <td>{{$maintenance->id}}</td>
          <td>{{$maintenance->descripcion_manto}}</td>
          <td>{{$maintenance->cantidad_dias}}</td>
          <td>{{$maintenance->fecha_manto}}</td>
          <td>{{$maintenance->car->marca}} - {{$maintenance->car->modelo}}</td>
          <td width="10px">
            <a class="btn btn-primary btn-sm" href="{{route('admin.accesories.edit', $maintenance)}}"><i class="fas fa-edit"></i></a>
          </td>
          <td width="10px">
            <form action="{{route('admin.accesories.destroy', $maintenance)}}" method="POST">
              @csrf
              @method('delete')

              <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@stop

@section('css')
  {{-- add your styles css --}}
@stop

@section('js')
  {{-- add your scritp js --}}
@stop