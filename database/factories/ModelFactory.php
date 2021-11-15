<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * Con ayuda de Faker/generator, genera datos random para llenarlos en el fillable de la clase Author.
 * Este define se llama desde la class DatabaseSeeder
 * @params class Faker\generator
 * @return array
 */
$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'gender'    => $gender = $faker->randomElement(['male', 'female']),
        'name'      => $faker->name($gender),
        'country'   => $faker->country,
    ];
});
