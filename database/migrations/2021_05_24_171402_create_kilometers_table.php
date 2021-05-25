<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKilometersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('kilometers', function (Blueprint $table) {
      $table->id();
      $table->double('kilometraje_inicial');
      $table->double('kilometraje_final');
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
    Schema::dropIfExists('kilometers');
  }
}
