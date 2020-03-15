<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('promocode');
            $table->date('start_date')->default((date('Y-m-d')));
            $table->date('expiry_date')->nullable();
            $table->string('description')->nullable();
            $table->string('discount_type')->nullable();
            $table->integer('amount')->default(0);
            $table->integer('max_amount')->nullable();//maximum amount of discount avail at one time
            $table->integer('usage_count')->nullable();//how many times we want to make this promocode use
            $table->integer('indivisual_use')->nullable();//how many times one user can avail this promocode
            $table->text('exclude_bus_id')->nullable();
            $table->text('include_bus_id')->nullable();
            $table->string('promocode_image')->nullable();
            $table->string('t_and_c')->nullable();
            $table->integer('min_order_amount')->nullable();
            // $table->unsignedBiginteger('include_bus_id')->nullable();
            // $table->unsignedBiginteger('exclude_bus_id')->nullable();
            $table->string('created_by')->nullable();
            $table->boolean('status')->default(1);
            // $table->foreign('exclude_bus_id')->references('id')->on('buses')->onDelete('cascade');
            // $table->foreign('include_bus_id')->references('id')->on('buses')->onDelete('cascade');
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
        Schema::dropIfExists('promocodes');
    }
}
