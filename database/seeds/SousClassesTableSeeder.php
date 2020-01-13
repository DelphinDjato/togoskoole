<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SousClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sous_classes')->insert([
            'classe_id' => 1,
            'libelle' => '6A',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 1,
            'libelle' => '6B',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 1,
            'libelle' => '6C',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 2,
            'libelle' => '5A',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 2,
            'libelle' => '5B',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 2,
            'libelle' => '5C',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 3,
            'libelle' => '4A',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 3,
            'libelle' => '4B',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 3,
            'libelle' => '4C',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 4,
            'libelle' => '3A',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 4,
            'libelle' => '3B',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 4,
            'libelle' => '3C',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde S1',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde S2',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde S3',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde A41',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde A42',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 5,
            'libelle' => 'Seconde A43',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Première A41',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere A42',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere A43',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Première C1',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere C2',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere C3',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Première D1',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere D2',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 6,
            'libelle' => 'Premiere D3',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale A41',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale A42',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale A43',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale C1',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale C2',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale C3',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale D1',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale D2',
        ]);

        DB::table('sous_classes')->insert([
            'classe_id' => 7,
            'libelle' => 'Terminale D3',
        ]);
    }
}
