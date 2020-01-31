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
        Schema::create('bus_cancellation', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('route_id');
            $table->date('cancellation_date');
            $table->time('cancellation_time');
            $table->string('note');
            $table->integer('compensation_amount');
            $table->date('date_of_cancel');
            $table->foreign('bus_id')->references('_id')->on('bus');
            $table->foreign('route_id')->references('_id')->on('route');
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
        Schema::dropIfExists('bus_cancellation');
    }
}
