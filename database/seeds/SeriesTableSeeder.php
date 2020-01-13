<?php

use App\Models\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'libelle' => 'S',
        ]);

        DB::table('series')->insert([
            'libelle' => 'A4',
        ]);

        DB::table('series')->insert([
            'libelle' => 'C',
        ]);

        DB::table('series')->insert([
            'libelle' => 'D',
        ]);

        DB::table('series')->insert([
            'libelle' => 'E',
        ]);

        DB::table('series')->insert([
            'libelle' => 'F1',
        ]);

        DB::table('series')->insert([
            'libelle' => 'F2',
        ]);

        DB::table('series')->insert([
            'libelle' => 'F3',
        ]);

        DB::table('series')->insert([
            'libelle' => 'F4',
        ]);

        DB::table('series')->insert([
            'libelle' => 'G1',
        ]);

        DB::table('series')->insert([
            'libelle' => 'G2',
        ]);

        DB::table('series')->insert([
            'libelle' => 'G3',
        ]);
    }
}
