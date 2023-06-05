<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficiosLiberacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficios_liberacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEstudiante');
            $table->string('apellidoPatEstudiante');
            $table->string('apellidoMatEstudiante');
            $table->string('noControlEstudiante');
            $table->string('carreraEstudiante');
            $table->string('creditoEstudiante');
            $table->string('periodoEstudiante');
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
        Schema::dropIfExists('oficios_liberacion');
    }
}
