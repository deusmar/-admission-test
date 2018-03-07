<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Lane::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(1,2))
    ];
});
