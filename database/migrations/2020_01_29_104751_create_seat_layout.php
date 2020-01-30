<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatLayout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_layout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bus_id')->unsigned();
            $table->integer('total_seat');
            $table->string('layout');
            $table->string('layout_type');
            $table->integer('no_of_seat_at_last');
            $table->string('created_by');
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
        Schema::dropIfExists('seat_layout');
    }
}
