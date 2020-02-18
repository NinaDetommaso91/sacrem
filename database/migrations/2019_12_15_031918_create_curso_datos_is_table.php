<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('curso_datos_is', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->date('FechaRea')->nullable();
            $table->string('lugar')->nullable();
            $table->integer('status')->nullable();


            $table->foreign('curso_id')->references('id')->on('cursos');
   

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
        Schema::dropIfExists('curso_datos_is'); 
    }
}
