<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->integer('registrationNumber');
            $table->string('homePort');
            $table->string('registrationStatus');
            $table->integer('grossRegisterTonnage');
            $table->integer('grossTonnage');
            $table->integer('length');
            $table->integer('buildYear');
            $table->string('buildYard');
            $table->string('companyName');
            $table->integer('socialnumber');
            $table->integer('share');
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
        Schema::dropIfExists('ships');
    }
}
