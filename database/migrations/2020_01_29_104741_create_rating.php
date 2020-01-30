<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('user_id')->unsigned();
            $table->integer('bus_id')->unsigned();
            $table->integer('rate');
            $table->string('description');
            $table->string('type');
            //$table->foreign('user_id')->references('_id')->on('user');
            //$table->foreign('bus_id')->references('_id')->on('bus');
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
        Schema::dropIfExists('rating');
    }
}
