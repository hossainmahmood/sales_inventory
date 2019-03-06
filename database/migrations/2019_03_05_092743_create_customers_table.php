<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FullName');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('EmailAddress');
            $table->string('Company');
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
        Schema::dropIfExists('customers');
    }
}
