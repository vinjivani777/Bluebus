<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('user_id')->unsigned();
            $table->ipAddress('ip_address');
            $table->string('device_type');
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('status');
            //$table->foreign('user_id')->references('_id')->on('user');
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
        Schema::dropIfExists('devices');
    }
}
