<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOeuvresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id('id_o');
            $table->string('nom');
            $table->text('synopsis');
            $table->string('video');
            $table->string('type');
            $table->string('genre');
            $table->string('dt_sortie');
            $table->string('duree');
            $table->text('description');
            $table->string('acteur1');
            $table->string('acteur2');
            $table->string('acteur3');
            $table->string('acteur4');
            $table->integer('id_r');
            $table->integer('id_cine');
            $table->string('realisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
}
