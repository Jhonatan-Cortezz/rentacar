@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
  <h1>Editar vehículo</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      {!! Form::model($car, ['route' => ['admin.cars.update', $car], 'files' => true, 'method' => 'put']) !!}
        
        @include('admin.cars.formulario.form')

        {!! Form::submit('Editar vehículo', ['class' => 'btn btn-primary']) !!}
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