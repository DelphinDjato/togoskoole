<?php

use App\Models\Cycle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
            'libelle' => 'Trimestre 1',
        ]);

        DB::table('cycles')->insert([
            'libelle' => 'Trimestre 2',
        ]);

        DB::table('cycles')->insert([
            'libelle' => 'Trimestre 3',
        ]);

        DB::table('cycles')->insert([
            'libelle' => 'Semestre 1',
        ]);

        DB::table('cycles')->insert([
            'libelle' => 'Semestre 2',
        ]);
    }
}
