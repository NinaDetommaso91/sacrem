<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosIsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_is', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('cedula')->unique();
            $table->date('FechaIng');
            $table->string('CodCarnet')->unique();;
            $table->integer('ungido');
            $table->date('Fechaung')->nullable();
            $table->string('Lugar')->nullable(); //
            $table->integer('estaof')->nullable();//
             $table->string('Observaciones');
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
        Schema::dropIfExists('datos_is');
    }
}
