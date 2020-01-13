<?php

use App\Models\ClasseSerie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes_series')->insert([
            'classe_id' => 5,
            'serie_id' => 1,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 5,
            'serie_id' => 2,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 6,
            'serie_id' => 2,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 6,
            'serie_id' => 3,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 6,
            'serie_id' => 4,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 7,
            'serie_id' => 2,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 7,
            'serie_id' => 3,
        ]);

        DB::table('classes_series')->insert([
            'classe_id' => 7,
            'serie_id' => 4,
        ]);
    }
}
