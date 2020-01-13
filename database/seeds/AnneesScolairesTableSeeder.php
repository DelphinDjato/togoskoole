<?php

use App\Models\AnneeScolaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnneesScolairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annees_scolaires')->insert([
            'libelle' => '2019-2020',
            'active' => true,
        ]);

        DB::table('annees_scolaires')->insert([
            'libelle' => '2020-2021',
            'active' => false,
        ]);

        DB::table('annees_scolaires')->insert([
            'libelle' => '2021-2022',
            'active' => false,
        ]);
    }
}
