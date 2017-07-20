<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('curso')->insert([
          'name' => 'Curso1',
          'logotipo' => 'null',
          'id_areaFK' => '1'
      ]);
    }
}
