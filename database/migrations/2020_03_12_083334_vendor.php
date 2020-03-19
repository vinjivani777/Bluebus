<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->char('gender')->nullable();
            $table->string('email');
            $table->bigInteger('mobile_no')->nullable();
            $table->string('password');
            $table->longtext('avatar')->default('vendor\images\vendor.png');
            $table->boolean('status')->default(0);
            $table->rememberToken()->nullable();
            $table->string('token')->nullable();
            $table->integer('otp')->nullable();
            $table->string('forget_token')->nullable();
            $table->dateTime('tokentime')->nullable();
            $table->string('referral_code')->nullable();
            $table->integer('parent_id')->nullable()->default(0);
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
        Schema::dropIfExists('vendors');
    }
}
