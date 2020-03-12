<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocodeTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocode_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('promocode_id');
            $table->integer('amount_used');
            $table->integer('limit');//max amount to be used in redeeming in promocode
            $table->integer('remaining_balance');
            $table->foreign('promocode_id')->references('id')->on('promocodes')->onDelete('cascade');
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
        Schema::dropIfExists('promocode_transactions');
    }
}
