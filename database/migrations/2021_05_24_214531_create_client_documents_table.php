<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDocumentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('client_documents', function (Blueprint $table) {
      $table->id();
      $table->string('imagen_frontal');
      $table->string('imagen_posterior');
      $table->string('observacion');
      $table->unsignedBigInteger('type_document_id');
      $table->foreign('type_document_id')->references('id')->on('type_documents')->onDelete('cascade');
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
    Schema::dropIfExists('client_documents');
  }
}
