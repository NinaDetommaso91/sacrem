<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAsIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_as_idiomas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idiomas_id')->unsigned();
            $table->integer('datos_as_id')->unsigned();



            $table->foreign('idiomas_id')->references('id')->on('idiomas');
            $table->foreign('datos_as_id')->references('id')->on('datos_as');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_as_idiomas');
    }
}
