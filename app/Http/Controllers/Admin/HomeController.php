<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $cars = Car::all();
    return view('admin.index', compact('cars'));
  }
}
