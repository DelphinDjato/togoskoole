<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_enseignants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('enseignant_id');
            $table->date('date_absence');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('motif');
            $table->boolean('jusitifie');
            $table->bigInteger('cycle_id');
            $table->bigInteger('annee_scolaire_id');
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
        Schema::dropIfExists('absences_enseignants');
    }
}
