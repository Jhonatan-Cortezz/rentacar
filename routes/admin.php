<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccesoryController;
use App\Http\Controllers\Admin\CarController;

Route::get('', [HomeController::class, 'index']);
Route::resource('accesories', AccesoryController::class)->names('admin.accesories');
Route::resource('cars', CarController::class)->names('admin.cars');