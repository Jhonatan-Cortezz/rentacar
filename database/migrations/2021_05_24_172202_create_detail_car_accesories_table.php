<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCarAccesoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('detail_car_accesories', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('car_id');
      $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
      $table->unsignedBigInteger('accesory_id');
      $table->foreign('accesory_id')->references('id')->on('accesories')->onDelete('cascade');
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
    Schema::dropIfExists('detail_car_accesories');
  }
}
