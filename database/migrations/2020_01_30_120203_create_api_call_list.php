<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiCallList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_call_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('device_id');
            $table->string('url');
            $table->time('call_time');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
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
        Schema::dropIfExists('api_call_lists');
    }
}
