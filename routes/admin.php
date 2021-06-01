<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccesoryController;

Route::get('', [HomeController::class, 'index']);
Route::resource('accesories', AccesoryController::class)->names('admin.accesories');