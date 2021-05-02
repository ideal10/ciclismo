<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_grupo');
            $table->date('fecha_carrera');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('lugar_inicio');
            $table->string('lugar_fin');
            $table->float('kilometros');
            $table->integer('valor_inscripcion');
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
        Schema::dropIfExists('carreras');
    }
}
