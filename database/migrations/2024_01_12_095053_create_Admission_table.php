<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Course')->nullable();
            $table->string('Name')->nullable();
            $table->string('NIC')->nullable();
            $table->date('DOB')->nullable();
            $table->string('Phone_number')->nullable();
            $table->string('Email')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('Location')->nullable();
            $table->string('Days')->nullable();
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
        Schema::dropIfExists('admission');
    }
}
