<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
                        $table->string('Company');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('EmailAddress');
            $table->string('JobTitle');
            $table->string('BusinessPhone');
            $table->string('HomePhone');
            $table->string('MobilePhone');
            $table->string('FaxNumber');
            $table->string('Address');
            $table->string('City');
            $table->string('StateProvince');
            $table->string('ZipPostal');
            $table->string('CountryRegion');
            $table->string('WebPage');
            $table->string('Notes');
            $table->string('Attachments');
            $table->string('SupplyName');
            $table->string('FileAs');
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
        Schema::dropIfExists('suppliers');
    }
}
