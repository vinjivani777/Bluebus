<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->unsignedBiginteger('route_id');
            $table->unsignedBiginteger('bus_type_id');
            $table->unsignedBiginteger('amenities_id');
            $table->string('bus_name');
            $table->string('bus_reg_no');
            $table->string('starting_point');
            $table->time('start_time');
            $table->string('ending_point');
            $table->time('ending_time');
            $table->integer('max_seats');
            $table->boolean('status');
            $table->integer('vendor_id');
            $table->foreign('route_id')->references('_id')->on('route');
            $table->foreign('bus_type_id')->references('_id')->on('bus_type');
            $table->foreign('amenities_id')->references('_id')->on('amenities');
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
        Schema::dropIfExists('bus');
    }
}
