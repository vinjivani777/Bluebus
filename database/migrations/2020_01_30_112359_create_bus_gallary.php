<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusGallary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_gallary', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->unsignedBiginteger('bus_id');
            $table->string('slug');
            $table->string('image_path');
            $table->string('created_by');
            $table->foreign('bus_id')->references('_id')->on('bus');
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
        Schema::dropIfExists('bus_gallary');
    }
}
