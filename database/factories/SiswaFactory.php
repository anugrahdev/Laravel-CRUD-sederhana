<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'firstname' => faker->name,
        'lastname' => faker->name,
        'gender' => faker->randomElement(['Pria','Wanita']),
        'alamat' => faker->address
    ];
});
