<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenoms');
            $table->char('sexe');
            $table->string('pays_naissance');
            $table->string('ville_naissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('email');
            $table->json('telephone');
            $table->string('diplome');
            $table->string('photo');
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
        Schema::dropIfExists('enseignants');
    }
}
