<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
 Schema::create('datos_m', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('cedula')->unique();
            $table->integer('nombre')->unsigned();
            $table->foreign('nombre')->references('id')->on('diocesis');
            $table->integer('mision')->unsigned();
            $table->foreign('mision')->references('id')->on('misiones');
            $table->string('HistorialMisional');
            $table->string('observaciones');
            $table->date('FechaAsig');
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
        Schema::dropIfExists('datos_m');
    }
}
