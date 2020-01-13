<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScolaritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scolarites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('classe_id');
            $table->double('inscription');
            $table->double('tranche_a');
            $table->double('tranche_b');
            $table->double('tranche_c');
            $table->double('tranche_d');
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
        Schema::dropIfExists('scolarites');
    }
}
