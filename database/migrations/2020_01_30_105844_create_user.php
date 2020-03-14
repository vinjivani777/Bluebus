<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('role_id');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->char('gender');
            $table->string('email');
            $table->bigInteger('mobile_no');
            $table->string('password');
            $table->string('avatar');
            $table->boolean('status');
            $table->rememberToken();
            $table->date('dob')->nullable();
            $table->string('token')->nullable();
            $table->integer('otp')->nullable();
            $table->string('forget_token')->nullable();
            $table->string('referral_code')->nullable();
            $table->integer('parent_id')->nullable();
            $table->foreign('role_id')->references('id')->on('user_roles')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
