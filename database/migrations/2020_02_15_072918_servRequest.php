<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ServRequest', function (Blueprint $table) {
        $table->bigIncrements('rid');
        //$table->foreign('uid')->references('uid')->on('users');
        $table->integer('uid');
        //$table->foreign('sid')->references('sid')->on('serves');
        $table->integer('sid');
        $table->integer('state');
        $table->integer('rrate');
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
