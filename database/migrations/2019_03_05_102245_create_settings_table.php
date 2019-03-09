<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company');
            $table->string('BusinessPhone');
            $table->string('Address');
            $table->string('City');
            $table->string('StateProvince');
            $table->string('ZipPostal');
            $table->string('CountryRegion');
            $table->string('ShowStartupScreen');
            $table->string('WebPage');
            $table->string('Email');
            $table->string('BusinessFax');
            $table->string('Build');
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
        Schema::dropIfExists('settings');
    }
}
