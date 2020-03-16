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
            $table->bigIncrements('id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('vendor_id');
            $table->unsignedBiginteger('route_id');
            $table->unsignedBiginteger('board_point_id');
            $table->unsignedBiginteger('drop_point_id');
            $table->string('ticket_no');
            $table->integer('seat_no');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('board_point_id')->references('id')->on('board_points')->onDelete('cascade');
            $table->foreign('drop_point_id')->references('id')->on('drop_points')->onDelete('cascade');
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
