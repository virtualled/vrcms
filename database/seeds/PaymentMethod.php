<?php

use Illuminate\Database\Seeder;

class PaymentMethod extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Наличные'],
            [ 'name' => 'Карта'],
            [ 'name' => 'Сайт'],
            [ 'name' => 'Сертификат']
        ];


        DB::table('payment_methods')->insert($data);
    }
}
