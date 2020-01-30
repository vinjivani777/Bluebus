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
        Schema::create('promocode', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('promocode');
            $table->date('expiry_date');
            $table->string('description');
            $table->string('discount_type');
            $table->integer('amount');
            $table->integer('max_amount');//maximum amount of discount avail at one time
            $table->integer('usage_count');//how many times we want to make this promocode use
            $table->integer('indivisual_use');//how many times one user can avail this promocode
            $table->text('exclude_bus_id');
            $table->text('include_bus_id');
            $table->integer('min_order_amount');
            $table->string('created_by');
            $table->boolean('status');
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
        Schema::dropIfExists('promocode');
    }
}
