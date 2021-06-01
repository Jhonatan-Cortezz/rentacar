<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithPagination;

class CarsIndex extends Component
{
  use WithPagination;

  protected $paginationTheme = "bootstrap";

  public $search;

  /* cuando la paginacion esta en un numero != 1
    resetear el buscador para q encuentre el registro buscado
  */
  public function updatingSearch(){
    $this->resetPage();
  }

  public function render()
  {
    $cars = Car::where('marca', 'LIKE', '%' . $this->search . '%')
            ->paginate();
    return view('livewire.admin.cars-index', compact('cars'));
  }
}
