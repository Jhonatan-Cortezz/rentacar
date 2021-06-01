<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Accesory;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
  
  public function index()
  {
    return view('admin.cars.index');
  }

  public function create()
  {
    $accesories = Accesory::all();
    return view('admin.cars.create', compact('accesories'));
  }

  public function store(Request $request)
  {    
    if (!Storage::exists('cars')) {
      Storage::makeDirectory('cars');
    }

    $request->validate([
      'marca' => 'required',
      'modelo' => 'required',
      'anio_vehiculo' => 'required',
      'color' => 'required',
      'placa' => 'required|unique:cars',
      'accesories' => 'required',
      'capacidad' => 'required'
    ]);

    $car = Car::create($request->all());

    /* guardar imagen con el facade de Storage
      mas info en https://laravel.com/docs/8.x/filesystem
    */
    if ($request->file('file')) {
      $url = Storage::put('cars', $request->file('file'));

      $car->image()->create([
        'url' => $url
      ]);
    }

    if ($request->accesories) {
      $car->accesories()->attach($request->accesories);
    }
    return redirect()->route('admin.cars.index')->with('info', 'El vehículo ha sido guardado');
  }

  public function show(Car $car)
  {
    return view('admin.cars.show', compact('car'));
  }

  public function edit(Car $car)
  {
    $accesories = Accesory::all();
    return view('admin.cars.edit', compact('car', 'accesories'));
  }

  public function update(Request $request, Car $car)
  {
    $request->validate([
      'marca' => 'required',
      'modelo' => 'required',
      'anio_vehiculo' => 'required',
      'color' => 'required',
      'placa' => 'required',
      'accesories' => 'required',
      'capacidad' => 'required'
    ]);

    $car->update($request->all());

    if ($request->file('file')) {
      $url = Storage::put('cars', $request->file('file'));

      if ($car->image) {
        Storage::delete($car->image->url);

        $car->image()->update([
          'url' => $url
        ]);
      } else {
        $car->image()->create([
          'url' => $url
        ]);
      }
    }

    if ($request->accesories) {
      $car->accesories()->sync($request->accesories);
    }
    
    return redirect()->route('admin.cars.index')->with('info', 'El vehículo ha sido actualizado correctamente');
  }

  public function destroy(Car $car)
  {
    if ($car->image) {
      $car->image()->delete();
      Storage::delete($car->image->url);
    }

    $car->delete();

    return redirect()->route('admin.cars.index')->with('info', 'El vehículo ha sido eliminado');
  }
}
