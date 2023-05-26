<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCatalogocreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogocreditos', function (Blueprint $table) {
            $table->id();
            $table->string('nameCredito');
            $table->timestamps();
        });

        DB::table('catalogocreditos')->insert([
            ['nameCredito' => 'Civico'],
            ['nameCredito' => 'Cultural'],
            ['nameCredito' => 'Deportivo']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogocreditos');
    }
}
