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
            $table->longtext('route_id');
            $table->unsignedBiginteger('bus_type_id');
            $table->longtext('amenities_id')->nullable();
            $table->string('bus_name');
            $table->string('bus_reg_no');
            $table->string('starting_point');
            $table->time('start_time');
            $table->string('ending_point');
            $table->time('ending_time');
            $table->integer('max_seats');
            $table->integer('total_fare');
            $table->boolean('status');
            $table->integer('vendor_id');
            $table->text('dates');
            $table->integer('created_by');
            $table->integer('created_id');
            // $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('bus_type_id')->references('id')->on('bus_types')->onDelete('cascade');
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
