<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Arizona'],
            [ 'name' => 'Sam'],
            [ 'name' => 'Box box']
        ];

        DB::table('games')->insert($data);
    }
}
