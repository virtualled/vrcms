<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('games')->truncate();
//
//        factory(App\Game::class)
//            ->create();

       $this->call(GameTableSeeder::class);
       $this->call(BookMethodSeeder::class);
       $this->call(TypeGameSeeder::class);
       $this->call(TypeGameSeeder::class);
       $this->call(PaymentMethod::class);

        DB::table('sessions')->truncate();

        factory(App\Session::class, 40)
            ->create();

    }
}
