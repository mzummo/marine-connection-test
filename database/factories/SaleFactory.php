<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker)  {
    $saleStatuses =  ['quoted', 'pending', 'delivered-completed']; // move out of in the function?
    return [
        'sale_status' => array_rand($saleStatuses),
        'sale_price' => $faker->randomFloat(2, 10000, 500000)
    ];
});
