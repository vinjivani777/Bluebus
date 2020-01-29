<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drop_point', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('drop_point');
            $table->time('drop_time');
            $table->string('address');
            $table->string('landmark');
            $table->boolean('status');
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
        Schema::dropIfExists('drop_point');
    }
}
