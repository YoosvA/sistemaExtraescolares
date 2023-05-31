<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();

            $table->string('nombreAlumnosCreditos');
            $table->string('apellidoPaternoCreditos');
            $table->string('apellidoMaternoCreditos');

            $table->string('nombreCredito');
            $table->string('mooc')->nullable();
            $table->string('constancia')->nullable();
            $table->string('oficioLiberacion')->nullable();
            $table->string('evidencia')->nullable();
            $table->string('carpeta');
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('creditos');
    }
}
