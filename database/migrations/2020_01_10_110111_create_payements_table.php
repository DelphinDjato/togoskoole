<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('eleve_id');
            $table->double('inscription');
            $table->boolean('inscription_paye');
            $table->double('tranche_a');
            $table->boolean('a_paye');
            $table->double('tranche_b');
            $table->boolean('b_paye');
            $table->double('tranche_c');
            $table->boolean('c_paye');
            $table->double('tranche_d');
            $table->boolean('d_paye');
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
        Schema::dropIfExists('payements');
    }
}
