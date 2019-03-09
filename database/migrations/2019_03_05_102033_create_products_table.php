<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductCode');
            $table->string('ProductName');
            $table->string('StandardCost');
            $table->string('ListPrice');
            $table->string('QuantityPerUnit');
            $table->string('Discontinued');
            $table->string('Attachments');
            $table->string('Description'); 
            $table->string('SupplierID'); 
            $table->string('CategoryID');
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
        Schema::dropIfExists('products');
    }
}
