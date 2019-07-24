<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentificationPhotosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('identification_photos', function (Blueprint $table) {

      $table->bigIncrements('id');
      $table->unsignedBigInteger('user_id');
      $table->string('id1_path');
      $table->string('id2_path');
      $table->foreign('user_id')->references('id')->on('users');
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
    Schema::dropIfExists('identification_photos');
  }
}
