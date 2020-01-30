<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentTheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_theme', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('theme_id')->unsigned();
            $table->integer('theme_title')->unsigned();
            $table->string('name');
            //$table->foreign('theme_id')->references('_id')->on('themes');
            //$table->foreign('theme_title')->references('titles')->on('themes');
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
        Schema::dropIfExists('current_theme');
    }
}
