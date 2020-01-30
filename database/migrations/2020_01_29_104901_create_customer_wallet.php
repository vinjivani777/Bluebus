<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerWallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_wallet', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('amount');
            $table->integer('wallet_balance');
            $table->string('description');
            $table->foreign('user_id')->references('_id')->on('user');
            $table->foreign('transaction_id')->references('_id')->on('transaction');
            $table->string('status');
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
        Schema::dropIfExists('customer_wallet');
    }
}
