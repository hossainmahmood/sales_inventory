<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('office_address');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('mobile');
            $table->string('email');
            $table->date('dob');
            $table->string('designation');
            $table->date('bank_join_date');
            $table->dateTime('forum_join_date');            
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
        Schema::dropIfExists('members');
    }
}
