<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OrderDate');
            $table->string('SupplierID');
            $table->string('CreatedById');
            $table->string('CreationDate');
            $table->string('ExpectedDate');
            $table->string('ShippingFee');
            $table->string('Taxes');
            $table->string('PaymentDate');
            $table->string('PaymentAmount');
            $table->string('PaymentMethod');
            $table->string('Notes');
            $table->string('OrderSubTotal');
            $table->string('OrderTotal');
            $table->string('SubmittedById');
            $table->string('SubmittedDate');
            $table->string('ClosedById');
            $table->string('ClosedDate');
            $table->string('IsCompleted');
            $table->string('IsSubmitted');
            $table->string('IsNew');
            $table->string('StatusText');
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
        Schema::dropIfExists('purchase_orders');
    }
}
