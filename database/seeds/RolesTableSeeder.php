<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => 'estudiante',
        ]);
        DB::table('role')->insert([
            'name' => 'profesor',
        ]);
        DB::table('role')->insert([
            'name' => 'administrador'
        ]);
    }
}
