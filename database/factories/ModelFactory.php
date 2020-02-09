<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Session::class, function (Faker $faker) {
    return [


        'user_id' => 1,
        'type_game_id' => $faker->numberBetween(1, 3),
        'date_booking' => $faker->date('Y-m-d'),
        'date_visit' => $faker->date('Y-m-d'),
        'time_visit' => $faker->time('H:i:s'),
        'game_id' => $faker->numberBetween(1, 3),
        'book_method_id' => $faker->numberBetween(1, 4),
        'amount_visitors' => $faker->numberBetween(1, 6),
        'price_start' => $faker->numberBetween(400, 12000),
        'promocode' => $faker->colorName,
        'sertificate' => $faker->hexColor,
        'price_final' => $faker->numberBetween(400, 12000),
        'prepaid' => $faker->randomElement(['Нет предоплаты', 'Полная оплата с сайта']),
        'local_payment' => $faker->numberBetween(400, 12000),
        'payment_method_id' => $faker->numberBetween(1, 3),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'found_us' => $faker->sentence(7, 11),
        'reason_visit' => $faker->sentence(7, 11),
        'comment' => $faker->paragraph(4, true),
        'staff' => $faker->randomElement(['Антон', 'Паша', 'Аня']),
        'created_at' => $faker->dateTime('now')


    ];

});
