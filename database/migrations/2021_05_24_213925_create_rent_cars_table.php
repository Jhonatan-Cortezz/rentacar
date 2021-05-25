<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('rent_cars', function (Blueprint $table) {
      $table->id();
      $table->date('fecha_inicio');
      $table->date('fecha_fin');
      $table->time('hora_inicio');
      $table->time('hora_fin');
      $table->double('pago');
      $table->string('estado');
      $table->unsignedBigInteger('car_id');
      $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
    Schema::dropIfExists('rent_cars');
  }
}
