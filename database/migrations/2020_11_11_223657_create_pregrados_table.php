<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregrados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique;
            $table->string('slug');
            $table->string('jefe');
            $table->string('titulo')->unique;
            $table->string('gradoAcademico');
            $table->string('area');
            $table->string('subarea');
            $table->unsignedTinyInteger('duracion');
            $table->string('acreditacion');
            $table->text('perfilEgresado');
            $table->string('url')->nullable;
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
        Schema::dropIfExists('pregrados');
    }
}
