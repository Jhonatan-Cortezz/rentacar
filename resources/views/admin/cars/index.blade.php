@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
  <a class="btn btn-secondary float-right" href="{{route('admin.cars.create')}}"><span><i class="fas fa-plus-square"></i></span> Registrar Vehículo</a>
  <h1>Flota de vehículos</h1>
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
  {{-- include car componet livewire --}}
  @livewire('admin.cars-index')
@stop