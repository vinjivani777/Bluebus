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
        Schema::create('bank', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('transaction_id')->unsigned();
            $table->integer('amount');
            $table->date('date_of_transaction');
            $table->string('bank_name');
            $table->integer('cheque_no');
            $table->date('date_of_cheque');
            $table->bigInteger('account_no');
            $table->timestamps();
            //$table->foreign('transaction_id')->references('_id')->on('transaction_history');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank');
    }
}
