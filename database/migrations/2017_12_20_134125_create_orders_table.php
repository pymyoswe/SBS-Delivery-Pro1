<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('bill_to_customer');
            $table->string('warehouse');
            $table->string('destination');
            $table->string('order_series_no');
            $table->string('region_to');
            $table->string('dispatch_date_warehouse');
            $table->string('delivery_complete_date');
            $table->string('order_item');
            $table->string('item_description');
            $table->string('quantity');
            $table->string('weight');
            $table->string('total_weight');
            $table->string('full');
            $table->string('loose');
            $table->string('Pcs');
            $table->string('remark');
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
        Schema::dropIfExists('orders');
    }
}
