<?php

use Illuminate\Database\Seeder;

class TypeGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Steam'],
            [ 'name' => 'Our'],
            [ 'name' => 'Ukraine']
        ];

        DB::table('type_games')->insert($data);
    }
}
