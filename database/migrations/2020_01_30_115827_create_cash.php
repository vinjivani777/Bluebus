<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('transaction_id');
            $table->integer('amount');
            $table->date('date_of_transaction');
            $table->timestamps();
            $table->foreign('transaction_id')->references('id')->on('transaction_historys')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashs');
    }
}
