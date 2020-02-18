<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatemisionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datemisionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->integer('diocesis');
                 $table->foreign('diocesis')->references('id')->on('sangres');
            $table->integer('tipodemision');
            $table->foreign('tipodemision')->references('id')->on('misiones');
            $table->integer('cargo');
            $table->foreign('cargo')->references('id')->on('cargos');s
            $table->string('histomisional');
            $table->date('fechaasig');
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
        Schema::dropIfExists('datemisionales');
    }
}
