<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosEcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('datos_ecs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->integer('ocupacion')->unsigned();
            $table->foreign('ocupacion')->references('id')->on('ocupacions');
            $table->string('pdep');
            $table->string('ingresom');
            $table->integer('vehiculo')->unsigned();
            $table->foreign('vehiculo')->references('id')->on('tipovehiculos');
            $table->integer('condicionesVe');
            $table->integer('vivienda');
            $table->integer('condicionesVi');
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
        Schema::dropIfExists('datos_ecs');
    }
}
