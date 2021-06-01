@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Inicio</h1>
@stop

@section('content')
  <div class="row d-flex justify-content-around">
      @foreach ($cars as $car)
        <div class="card" style="width: 18rem;">

          @if ($car->image)
            <img src="{{Storage::url($car->image->url)}}" class="card-img-top" alt="">
          @else
            <img src="https://www.revistaturbo.com/sites/default/files/ram_comercial.jpg" class="card-img-top" alt="...">
          @endif

          <div class="card-body">
            <h5 class="card-title">{{$car->marca}}</h5>
            <p class="card-text">{{$car->modelo}}</p>
            <p class="card-text">Accesorios
              <ul>
              @foreach ($car->accesories as $accesorio)
                <li>{{$accesorio->nombre}}</li>
              @endforeach
            </ul> 
            </p>
            <a href="#" class="btn btn-primary">Rentar</a>
          </div>
        </div>
        <br>
      @endforeach
  </div>
@stop

@section('css')
  {{-- add your styles css --}}
@stop

@section('js')
  {{-- add your scritp js --}}
@stop