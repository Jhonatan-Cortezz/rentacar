<div class="card">
  <div class="card-header">
    <input wire:model="search" class="form-control" placeholder="Buscar vehiculos">
  </div>

  @if ($cars->count())
    <div class="card-body">
      <table class="table table-stripe">

        <thead>
          <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Placa</th>
            <th>Estado</th>
            <th>Capacidad</th>
            <th colspan="2"></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($cars as $car)
            <tr>
              <td>{{$car->id}}</td>
              <td>{{$car->marca}}</td>
              <td>{{$car->modelo}}</td>
              <td>{{$car->anio_vehiculo}}</td>
              <td>{{$car->color}}</td>
              <td>{{$car->placa}}</td>
              <td>
                @if ($car->estado == 1)
                  <p class="text-success">Disponible</p>
                @endif
                @if ($car->estado == 2)
                  <p class="text-danger">Alquilado</p>
                @endif 
                @if ($car->estado == 3)
                  <p class="text-warning">En mantenimiento</p>
                @endif  
              <td>{{$car->capacidad}}</td>
              <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.cars.edit', $car)}}"><i class="fas fa-edit"></i></a>
              </td>
              <td width="10px">
                <form action="{{route('admin.cars.destroy', $car)}}" method="POST">
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
    <div class="card-footer">
      {{$cars->links()}}
    </div>

  @else
    <div class="card-body">
      <strong class="text-center">No hay registros para su busqueda</strong>
    </div>
  @endif
</div>
