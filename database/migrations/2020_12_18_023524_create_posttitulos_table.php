<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosttitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posttitulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('slug');
            $table->string('coordinador');
            $table->string('malla');
            $table->unsignedTinyInteger('duracion');
            $table->text('descripcion');
            $table->text('cuerpo');
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
        Schema::dropIfExists('posttitulos');
    }
}
