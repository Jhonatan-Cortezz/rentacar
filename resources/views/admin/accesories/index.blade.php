@extends('adminlte::page')

@section('title', 'Listado de accesorios')

@section('content_header')

  <a class="btn btn-secondary float-right" href="{{route('admin.accesories.create')}}"><span><i class="fas fa-plus-square"></i></span> Nuevo accesorio</a>

  <h1>Accesorios del vehículo</h1>
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
            <th>Nombre</th>
            <th>Cantidad</th>
            <th colspan="2"></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($accesories as $accesory)
            <tr>
              <td>{{$accesory->id}}</td>
              <td>{{$accesory->nombre}}</td>
              <td>{{$accesory->cantidad}}</td>
              <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.accesories.edit', $accesory)}}"><i class="fas fa-edit"></i></a>
              </td>
              <td width="10px">
                <form action="{{route('admin.accesories.destroy', $accesory)}}" method="POST">
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