<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCancellationPolicy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancellation_policy', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('bus_id')->unsigned();
            $table->string('time_to_depart');//define duration in hours like 24hrs,48hrs
            $table->integer('percentage');// %  to deduct from refund as per remaining time
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
        Schema::dropIfExists('cancellation_policy');
    }
}
