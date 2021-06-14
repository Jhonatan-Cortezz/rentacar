<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccesoryController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\MaintenanceController;

Route::get('', [HomeController::class, 'index']);
Route::resource('accesories', AccesoryController::class)->names('admin.accesories');
Route::resource('cars', CarController::class)->names('admin.cars');
Route::resource('maintenances', MaintenanceController::class)->names('admin.maintenances');
Route::get('maintenances/create/{car}', [MaintenanceController::class, 'create'])->name('admin.maintenances.create');