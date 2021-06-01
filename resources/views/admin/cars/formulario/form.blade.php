<div>
  <div class="row">
    <div class="col">
      <div class="form-group">
        {!! Form::label('marca', 'Marca') !!}
        {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'Marca del vehiculo']) !!}

        @error('marca')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        {!! Form::label('modelo', 'Modelo') !!}
        {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Modelo del vehiculo']) !!}

        @error('modelo')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        {!! Form::label('anio_vehiculo', 'Año del vehiculo') !!}
        {!! Form::text('anio_vehiculo', null, ['class' => 'form-control']) !!}

        @error('anio_vehiculo')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        {!! Form::label('color', 'Color del vehículo') !!}
        {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Color del vehiculo']) !!}

        @error('color')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="form-group">
        {!! Form::label('placa', 'Numero de placa') !!}
        {!! Form::text('placa', null, ['class' => 'form-control', 'placeholder' => '23423-345345']) !!}

        @error('placa')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        {!! Form::label('capacidad', 'Capacidad de pasajeros') !!}
        {!! Form::number('capacidad', null, ['class' => 'form-control']) !!}

        @error('capacidad')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>

  <div class="form-group">
    <p class="font-weigth-bold">Accesorios</p>
    @foreach ($accesories as $accesory)
      <label class="mr-4">
        {!! Form::checkbox('accesories[]', $accesory->id, null) !!}
        {{$accesory->nombre}}
      </label>
    @endforeach
    @error('accesories')
      <small class="text-danger">{{$message}}</small>
    @enderror
  </div>

  <div class="row mb-3">
    <div class="col">
      <div class="image-wrapper">
        @isset ($car->image)
          <img id="car-image" src="{{Storage::url($car->image->url)}}" alt="">
        @else
          <img id="car-image" src="https://www.revistaturbo.com/sites/default/files/ram_comercial.jpg" alt="">
        @endisset
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        {!! Form::label('file', 'Cargar imagen para este vehículo') !!}
        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
      </div>
      <p>Seleccione una imagen con una buena resolución en formato jpg/png/jpeg</p>
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('observacion', 'Observacón sobre el vehículo') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}

    @error('nombre')
      <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
</div>