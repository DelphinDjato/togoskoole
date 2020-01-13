<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->bigInteger('parent_id');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenoms');
            $table->char('sexe');
            $table->string('pays_naissance');
            $table->string('ville_naissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('email');
            $table->string('telephone');
            $table->string('photo');
            $table->json('infos_complementaires');
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
        Schema::dropIfExists('eleves');
    }
}
