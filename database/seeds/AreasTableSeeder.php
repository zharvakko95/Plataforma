<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
