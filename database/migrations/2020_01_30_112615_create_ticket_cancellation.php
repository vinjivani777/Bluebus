<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketCancellation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_cancellations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('ticket_id');
            $table->integer('total_fare');
            $table->integer('cancellation_charges');
            $table->integer('refund_amount');
            $table->string('refund_type');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('booking_details')->onDelete('cascade');
            $table->string('note');
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
        Schema::dropIfExists('ticket_cancellations');
    }
}
