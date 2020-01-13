<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetardsElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retards_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('eleve_id');
            $table->date('date_retard');
            $table->time('heure_normale');
            $table->time('heure_retard');
            $table->string('motif');
            $table->boolean('jusitifie');
            $table->bigInteger('classe_id');
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
        Schema::dropIfExists('retards_eleves');
    }
}
