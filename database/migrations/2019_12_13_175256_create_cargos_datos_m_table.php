<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosDatosMTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_datos_m', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('datos_m_id')->unsigned();
            $table->integer('cargo_id')->unsigned();



            $table->foreign('datos_m_id')->references('id')->on('datos_m');
            $table->foreign('cargo_id')->references('id')->on('cargos');
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
        Schema::dropIfExists('cargos_datos_m');
    }
}
