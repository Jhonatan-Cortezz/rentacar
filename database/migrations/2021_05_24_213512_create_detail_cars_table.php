<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('detail_cars', function (Blueprint $table) {
      $table->id();
      $table->string('descripcion');
      $table->string('nivel_observacion');
      $table->string('coordenada_x');
      $table->string('coordenada_y');
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
    Schema::dropIfExists('detail_cars');
  }
}
