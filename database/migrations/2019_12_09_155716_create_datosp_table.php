<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatospTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('datosp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('pasaporte');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('sexo');
                $table->integer('sangre')->unsigned();
                $table->foreign('sangre')->references('id')->on('sangres');
                $table->date('fechanac');
                $table->integer('paisnac')->unsigned();
                $table->foreign('paisnac')->references('id')->on('paises');
               $table->integer('estacivil')->unsigned();
                $table->foreign('estacivil')->references('id')->on('estadocivil');
            $table->string('tel');
            $table->string('telc');
               $table->integer('municipio')->unsigned();
               $table->foreign('municipio')->references('id')->on('municipios');
            $table->string('direccion');
            $table->integer('banco')->unsigned();
            $table->foreign('banco')->references('id')->on('bancos');            
            $table->string('numcta')->unique();
            $table->string('tallac');
            $table->string('tallap');
            $table->string('tallaz');
            $table->string('nombree');
            $table->string('apellidoe');
            $table->string('tele');
            $table->string('telce');


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
        Schema::dropIfExists('datosp');
    }

        
 
    
}
