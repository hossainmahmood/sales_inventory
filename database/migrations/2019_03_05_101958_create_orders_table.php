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
            $table->increments('OrderId')->primarykey;
            $table->string('OrderDate');
            $table->string('CustomerID');
            $table->string('EmployeeID');
            $table->string('ShippedDate');
            $table->string('ShipName');
            $table->string('ShipperID');                      
            $table->string('ShipAddress');
            $table->string('ShipCity');
            $table->string('ShipStateProvince');
            $table->string('ShipZIPPostal');
            $table->string('ShipCountryRegion');
            $table->string('ShippingFee');
            $table->string('Tax');
            $table->string('PaymentType');
            $table->string('PaymentDate');
            $table->string('Notes');
            $table->string('TaxRate');
            $table->string('OrderSubTotal');
            $table->string('OrderTotal');
            $table->string('ClosedDate');
            $table->string('OrderQuarter');
            $table->string('StatusID');
            $table->string('IsNew');
            $table->string('IsCompleted');
            $table->string('IsInvoiced');
            $table->string('IsShipped');
            $table->string('IsActive');  
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
