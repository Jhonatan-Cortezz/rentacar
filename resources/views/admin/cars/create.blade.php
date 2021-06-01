@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
  <h1>Registrar vehículos</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::open(['route' => 'admin.cars.store', 'files' => true]) !!}

        {!! Form::hidden('estado', 1) !!}
        
        @include('admin.cars.formulario.form')

        {!! Form::submit('Registrar vehículo', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
  <style>
    .image-wrapper{
      position: relative;
      padding-bottom: 56.25%;
    }

    .image-wrapper img{
      position: absolute;
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
@endsection

@section('js')
  <script>
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event){
      var file = event.target.files[0];

      var reader = new FileReader();
      reader.onload = (event) => {
        document.getElementById("car-image").setAttribute('src', event.target.result); 
      };

      reader.readAsDataURL(file);
    }
  </script>
@endsection