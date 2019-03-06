<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductID');
            $table->string('ReorderLevel');
            $table->string('TargetLevel');
            $table->string('MinimumReorderQuantity');
            $table->string('Received');
            $table->string('OnOrder');
            $table->string('Shrinkage');
            $table->string('Shipped');
            $table->string('Allocated');
            $table->string('BackOrdered');
            $table->string('InitialLevel');
            $table->string('OnHand');
            $table->string('Available');
            $table->string('CurrentLevel');
            $table->string('BelowTargetLevel');
            $table->string('ReorderQuantity');
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
        Schema::dropIfExists('inventories');
    }
}
