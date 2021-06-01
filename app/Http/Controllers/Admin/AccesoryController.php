<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Accesory;

class AccesoryController extends Controller
{
  public function index()
  {
    $accesories = Accesory::all();
    return view('admin.accesories.index', compact('accesories'));
  }

  public function create()
  {
    return view('admin.accesories.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nombre' => 'required',
      'cantidad' => 'required'
    ]);

    Accesory::create($request->all());
    return redirect()->route('admin.accesories.index')->with('info', 'El accesorio fué creado correctamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Accesory $accesory)
  {
    return view('admin.accesories.show', compact('accesory'));
  }

  public function edit(Accesory $accesory)
  {
    return view('admin.accesories.edit', compact('accesory'));
  }

  public function update(Request $request, Accesory $accesory)
  {
    $request->validate([
      'nombre' => 'required',
      'cantidad' => 'required'
    ]);

    $accesory->update($request->all());

    return redirect()->route('admin.accesories.index')->with('info', 'El accesorio fué actualizado correctamente');
  }

  public function destroy(Accesory $accesory)
  {
    $accesory->delete();
    return redirect()->route('admin.accesories.index')->with('info', 'El accesorio fué eliminado correctamente');
  }
}
