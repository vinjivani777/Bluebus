<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('role_id')->unsigned();
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
            $table->date('dob');
            $table->string('token');
            $table->integer('otp');
            $table->string('forget_token');
            $table->string('referral_code');
            $table->integer('parent_id');
            //$table->foreign('role_id')->references('_id')->on('user_role');
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
        Schema::dropIfExists('user');
    }
}
