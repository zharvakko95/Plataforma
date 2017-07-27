<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alan',
            'last_name' => 'Rincón',
            'email' => 'alan.rnca@gmail.com',
            'password' => bcrypt('secret'),
            'code' => '9876',
            'id_areaFK' => '1',
            'id_roleFK' => '3',
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos',
            'last_name' => 'Aguirre',
            'email' => 'carlos.pre20@gmail.com',
            'password' => bcrypt('secret'),
            'code' => '9876',
            'id_areaFK' => '1',
            'id_roleFK' => '3',
        ]);
    }
}
