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
        Schema::create('drop_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('bus_id');
            $table->unsignedBiginteger('route_id');
            $table->string('drop_point');
            $table->integer('drop_point_position');
            $table->time('drop_time');
            $table->string('address');
            $table->string('landmark');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('drop_points');
    }
}
