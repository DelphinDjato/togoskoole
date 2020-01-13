<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploisTempsEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois_temps_enseignants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('enseignant_id');
            $table->bigInteger('sous_classe_id');
            $table->bigInteger('matiere_id');
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
        Schema::dropIfExists('emplois_temps_enseignants');
    }
}
