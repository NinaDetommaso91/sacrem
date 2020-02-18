<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateacademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dateacademicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->integer('nivelinst');
                 $table->foreign('nivelinst')->references('id')->on('nivelinsts');
            $table->integer('especialidad');
              $table->foreign('especialidad')->references('id')->on('especialidades');
            $table->integer('idioma');
                 $table->foreign('idioma')->references('id')->on('idiomas');s
            $table->string('Cursos/Talleres');
            s
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
        Schema::dropIfExists('dateacademicos');
    }
}
