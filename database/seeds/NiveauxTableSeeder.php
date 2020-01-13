<?php

use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveaux')->insert([
            'libelle' => 'Collège',
        ]);

        DB::table('niveaux')->insert([
            'libelle' => 'Lycée',
        ]);
    }
}
