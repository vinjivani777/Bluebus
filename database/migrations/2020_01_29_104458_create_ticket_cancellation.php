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
        Schema::create('ticket_cancellation', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('bus_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->integer('total_fare');
            $table->integer('cancellation_charges');
            $table->integer('refund_amount');
            $table->string('refund_type');
            //$table->foreign('bus_id')->references('_id')->on('bus');
            //$table->foreign('ticket_id')->references('_id')->on('booking_details');
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
        Schema::dropIfExists('ticket_cancellation');
    }
}
