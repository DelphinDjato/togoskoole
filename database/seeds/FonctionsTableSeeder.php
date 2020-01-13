<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            'libelle' => 'Directeur',
        ]);

        DB::table('fonctions')->insert([
            'libelle' => 'Secretaire',
        ]);

        DB::table('fonctions')->insert([
            'libelle' => 'Censeur',
        ]);

        DB::table('fonctions')->insert([
            'libelle' => 'Comptable',
        ]);

        DB::table('fonctions')->insert([
            'libelle' => 'Surveillant',
        ]);
    }
}
