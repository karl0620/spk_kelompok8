<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique();
            $table->string('nama');
            $table->string('email');
            $table->integer('jarkom');
            $table->integer('progmob');
            $table->integer('progweb');
            $table->integer('uiux');
            $table->integer('inforsec');
            $table->integer('dataan');
            $table->integer('lebih10');
            $table->integer('kurang10');
            $table->integer('wd1');
            $table->integer('wd2');
            $table->integer('wd3');
            $table->integer('dosen');
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
        Schema::dropIfExists('dosen');
    }
}
