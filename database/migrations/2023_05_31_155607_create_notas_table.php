<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAlumnoNotas');
            $table->string('apellidoPaternoNotas');
            $table->string('apellidoMaternoNotas');
            $table->string('noControlNotas');
            $table->string('carreraNotas');
            $table->string('evento');
            $table->integer('horas');
            $table->date('fecha');
            $table->string('periodo');
            $table->string('grupo');
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
        Schema::dropIfExists('notas');
    }
}
