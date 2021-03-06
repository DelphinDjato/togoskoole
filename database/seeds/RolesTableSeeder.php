<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'libelle' => 'Superuser',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Administrateur',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Enseignant',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Parent',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Eleve',
        ]);
    }
}
