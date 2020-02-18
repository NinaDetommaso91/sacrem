<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNiveusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveus', function (Blueprint $table) {
   $table->increments('id');
   $table->integer('usuario')->unsigned();
   $table->foreign('usuario')->references('id')->on('users');
    $table->integer('nivel')->unsigned();
   $table->foreign('nivel')->references('id')->on('niveles');



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
        Schema::dropIfExists('niveus');
    }
}
