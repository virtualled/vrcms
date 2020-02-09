<?php

use Illuminate\Database\Seeder;

class BookMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Сайт'],
            [ 'name' => 'Звонок'],
            [ 'name' => 'Мир квестов'],
            [ 'name' => 'Пришли без записи']
        ];

        DB::table('book_methods')->insert($data);
    }
}
