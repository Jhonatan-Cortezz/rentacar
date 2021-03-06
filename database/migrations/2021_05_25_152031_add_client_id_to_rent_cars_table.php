<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientIdToRentCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('rent_cars', function (Blueprint $table) {
      $table->unsignedBigInteger('client_id');
      $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('rent_cars', function (Blueprint $table) {
      $table->dropColumn('client_id');
    });
  }
}
