<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusCancellation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_cancellation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('cancellation_date');
            $table->time('cancellation_time');
            $table->string('note');
            $table->integer('compensation_amount');
            $table->date('date_of_cancel');
            $table->foreign('bus_id')->references('_id')->on('bus');
            $table->foreign('route_id')->references('_id')->on('route');
            $table->timestamps();

            // $table->string('last_name');
            // $table->time('ending_time');
            // $table->integer('vendor_id');
            // $table->char('gender');
            // $table->string('email');
            // $table->boolean('status');
            // $table->bigInteger('mobile_no');
            // $table->foreign('role_id')->references('_id')->on('user_role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_cancellation');
    }
}
