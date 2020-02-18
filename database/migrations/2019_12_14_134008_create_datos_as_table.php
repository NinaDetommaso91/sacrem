<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_as', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->integer('nivel')->unsigned();
            $table->foreign('nivel')->references('id')->on('nivelints');
            $table->integer('especialidad')->unsigned();
            $table->foreign('especialidad')->references('id')->on('especialidads');
            $table->string('Curtal');
            $table->string('habilidades');

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
        Schema::dropIfExists('datos_as');
    }
}
