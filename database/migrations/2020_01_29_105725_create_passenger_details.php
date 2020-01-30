<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengerDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passenger_details', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->foreign('user_id')->references('_id')->on('user');
            $table->foreign('bus_id')->references('_id')->on('bus');
            $table->foreign('ticket_id')->references('ticket_number')->on('booking_details');
            $table->date('date_of_journey');
            $table->boolean('insurance_status');
            $table->boolean('status');
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
        Schema::dropIfExists('passenger_details');
    }
}
