<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNacionalidadesDatospTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nacionalidades_datosp_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nacionalidades_id')->unsigned();
            $table->integer('datosp_id')->unsigned();



            $table->foreign('nacionalidades_id')->references('id')->on('nacionalidades');
            $table->foreign('datosp_id')->references('id')->on('datosp');

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
        Schema::dropIfExists('nacionalidades_datosp_tables');
    }
}
