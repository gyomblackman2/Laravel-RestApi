<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker -> word,
        'detail'=> $faker -> paragraph,
        'price' => $faker -> randomFloat(2,100, 1000),
        'stock' => $faker -> randomFloat(2, 100, 400),
        'discount' => $faker -> randomFloat(2,2,30)
    ];
});
