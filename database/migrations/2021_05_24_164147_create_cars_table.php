<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('marca');
      $table->string('modelo');
      $table->string('anio_vehiculo');
      $table->string('color');
      $table->string('placa');
      $table->string('capacidad');
      $table->string('observacion');
      $table->enum('estado', [1, 2, 3]);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cars');
  }
}
