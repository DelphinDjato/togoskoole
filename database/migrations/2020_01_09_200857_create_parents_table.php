<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->integer('user_id');
            $table->string('nom_parent1');
            $table->string('nom_parent2');
            $table->string('prenoms_parent1');
            $table->string('prenoms_parent2');
            $table->string('type_parente_parent1');
            $table->string('type_parente_parent2');
            $table->string('adresse_parent1');
            $table->string('adresse_parent2');
            $table->string('email_parent1');
            $table->string('email_parent2');
            $table->json('telephone_parent1');
            $table->json('telephone_parent2');
            $table->integer('profession_parent1');
            $table->integer('profession_parent2');
            $table->string('code_postal_parent1');
            $table->string('code_postal_parent2');
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
        Schema::dropIfExists('parents');
    }
}
