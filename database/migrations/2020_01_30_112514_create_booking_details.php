<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('route_id');
            $table->unsignedBiginteger('board_point_id');
            $table->unsignedBiginteger('drop_point_id');
            $table->string('ticket_no');
            $table->integer('seat_no');
            $table->foreign('bus_id')->references('_id')->on('bus');
            $table->foreign('route_id')->references('_id')->on('route');
            $table->foreign('board_point_id')->references('_id')->on('board_point');
            $table->foreign('drop_point_id')->references('_id')->on('drop_point');
            $table->integer('total_fare');
            $table->string('note');
            $table->boolean('insurance_policy');
            $table->boolean('booking_status');
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
        Schema::dropIfExists('booking_details');
    }
}
