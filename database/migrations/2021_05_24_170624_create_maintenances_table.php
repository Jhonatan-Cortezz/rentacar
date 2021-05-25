<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('maintenances', function (Blueprint $table) {
      $table->id();
      $table->string('descripcion_manto');
      $table->integer('cantidad_dias');
      $table->double('pago_manto');
      $table->date('fecha_manto');
      $table->unsignedBigInteger('car_id');
      $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
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
    Schema::dropIfExists('maintenances');
  }
}
