<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusCancellation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_cancellations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('route_id');
            $table->date('cancellation_date');
            $table->time('cancellation_time');
            $table->string('note');
            $table->integer('compensation_amount');
            $table->date('date_of_cancel');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
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
        Schema::dropIfExists('bus_cancellations');
    }
}
