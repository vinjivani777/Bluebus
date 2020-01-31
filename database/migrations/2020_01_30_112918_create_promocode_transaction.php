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
        Schema::create('promocode_transaction', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->unsignedBiginteger('promocode_id');
            $table->integer('amount_used');
            $table->integer('limit');//max amount to be used in redeeming in promocode
            $table->integer('remaining_balance');
            $table->foreign('promocode_id')->references('_id')->on('promocode');
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
        Schema::dropIfExists('promocode_transaction');
    }
}
