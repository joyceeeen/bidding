<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->unsignedBigInteger('product_id');
             $table->unsignedBigInteger('user_id');
             $table->string('title');
             $table->integer('rate');
             $table->text('comment');
             $table->timestamps();
             $table->softDeletes();

             $table->foreign('user_id')->references('id')->on('users');
             $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
