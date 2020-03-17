<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->char('gender');
            $table->string('email')->nullable();
            $table->bigInteger('mobile_no');
            $table->string('password');
            $table->longtext('avatar');
            $table->boolean('status')->default(1);
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable()->default('india');
            $table->rememberToken();
            $table->date('dob')->nullable();
            $table->string('token')->nullable();
            $table->integer('otp')->nullable();
            $table->string('forget_token')->nullable();
            $table->string('referral_code')->nullable();
            $table->boolean('email_verification_status')->default(0);
            $table->boolean('mobileno_verification_status')->default(0);
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
        Schema::dropIfExists('customers');
    }
}
