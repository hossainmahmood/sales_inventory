<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OrderID');
            $table->string('ProductID');
            $table->string('Quantity');
            $table->string('UnitPrice');
            $table->string('Discount');
            $table->string('ExtendedPrice');
            $table->string('StatusID');
            $table->string('InsufficientInventory');
            $table->string('IsProductAllocated');
            $table->string('IsInvoiced');
            $table->string('IsShipped');
            $table->string('IsBackOrdered');
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
        Schema::dropIfExists('order_details');
    }
}
