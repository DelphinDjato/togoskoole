<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploisTempsClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois_temps_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sous_classe_id');
            $table->bigInteger('matiere_id');
            $table->bigInteger('enseignant_id');
            $table->bigInteger('heure_id');
            $table->bigInteger('jour_id');
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
        Schema::dropIfExists('emplois_temps_classes');
    }
}
