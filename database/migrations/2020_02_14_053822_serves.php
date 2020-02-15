<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Serves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('serves', function (Blueprint $table) {
        $table->bigIncrements('sid');
        $table->string('stitel');
        //$table->foreign('Did')->references('Did')->on('Department');
        $table->integer('Did');
        //$table->foreign('uid')->references('uid')->on('users');
        $table->integer('uid');
        $table->string('description',255);
        $table->string('img');
        $table->string('openWord',255);
        $table->integer('workDay');
        $table->string('infoForSelling',255);
        $table->integer('srate');
        $table->string('active');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
