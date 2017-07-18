<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->insert([
            'name' => 'colaborador',
        ]);
        DB::table('area')->insert([
            'name' => 'vendedor',
        ]);
        DB::table('area')->insert([
            'name' => 'cliente',
        ]);
    }
}
