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
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('bus_type_id')->references('id')->on('bus_types')->onDelete('cascade');
            $table->foreign('amenities_id')->references('id')->on('amenities')->onDelete('cascade');
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
        Schema::dropIfExists('buses');
    }
}
