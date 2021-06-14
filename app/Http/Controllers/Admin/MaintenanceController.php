<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
  public function index()
  {
    $maintenances = Maintenance::all();
    return view('admin.maintenances.index', compact('maintenances'));
  }
  
  public function create(Car $car)
  {
    return view('admin.maintenances.create', compact('car'));
  }

  public function store(Request $request)
  {

    $request->validate([
      'descripcion_manto' => 'required',
      'cantidad_dias' => 'required',
      'pago_manto' => 'required',
      'pago_manto' => 'required',
      'fecha_manto' => 'required',
    ]);
    /* cambiar el estado del vehiculo a 3 para registrarlo como mantenimiento */
    $car = Car::where('id', '=', $request->car_id)->firstOrFail();
    $car->estado=3;
    $car->save();

    Maintenance::create($request->all());
    return redirect()->route('admin.maintenances.index')->with('info', 'Se registro el mantenimiento correctamente correctamente');
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
