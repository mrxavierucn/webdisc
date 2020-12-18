<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicoPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_publicacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academico_id');
            $table->unsignedBigInteger('publicacion_id');
            $table->foreign('academico_id')->references('id')->on('academicos')->onDelete('cascade');
            $table->foreign('publicacion_id')->references('id')->on('publicacions')->onDelete('cascade');
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
        Schema::dropIfExists('academico_publicacion');
    }
}
