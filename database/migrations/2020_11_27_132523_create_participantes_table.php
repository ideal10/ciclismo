<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20);           // Nombre del participante.
            $table->integer('identificacion');      // Identificacion personal del participante.
            $table->date('fechaNacimiento');        // Fecha de nacimiento del participante.
            $table->integer('edad')                 // Edad del participante.
                ->nullable(true);
            $table->integer('valorInscripcion');    // Valor de la inscripcion del participante.
            $table->integer('numeroAsignado');      // Numero unico de identificacion asignado para el participante.
            $table->integer('idCategoria')          // Categoria del participante.
                ->nullable(true);
            $table->timestamp('tiempoSalida', 0)    // Momento en el que salio el participante.
                ->nullable(true);
            $table->timestamp('tiempoLlegada', 0)   // Momento en el que llego el participante.
                ->nullable(true);
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
        Schema::dropIfExists('participantes');
    }
}
