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
            $table->bigIncrements('id');
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('ticket_id');
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->date('date_of_journey');
            $table->boolean('insurance_status');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('booking_details')->onDelete('cascade');

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
