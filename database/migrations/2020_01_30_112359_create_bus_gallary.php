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
        Schema::create('bus_gallarys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('bus_id');
            $table->string('slug')->nullable();
            $table->string('image_path');
            $table->string('created_by');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
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
        Schema::dropIfExists('bus_gallarys');
    }
}
