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
            $table->string('first_name');
            $table->string('last_name');
            $table->char('gender');
            $table->string('email');
            $table->bigInteger('mobile_no');
            $table->string('password');
            $table->longtext('avatar');
            $table->boolean('status')->default(0);
            $table->rememberToken();
            $table->string('token')->nullable();
            $table->integer('otp')->nullable();
            $table->string('forget_token')->nullable();
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
