<?php
use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'niveau_id' => 1,
            'libelle' => '6e',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 1,
            'libelle' => '5e',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 1,
            'libelle' => '4e',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 1,
            'libelle' => '3e',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 2,
            'libelle' => 'Seconde',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 2,
            'libelle' => 'Première',
        ]);

        DB::table('classes')->insert([
            'niveau_id' => 2,
            'libelle' => 'Terminale',
        ]);
    }
}
