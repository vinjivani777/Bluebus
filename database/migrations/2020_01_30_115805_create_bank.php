<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('transaction_id');
            $table->integer('amount');
            $table->date('date_of_transaction');
            $table->string('bank_name');
            $table->integer('cheque_no');
            $table->date('date_of_cheque');
            $table->bigInteger('account_no');
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
        Schema::dropIfExists('banks');
    }
}
