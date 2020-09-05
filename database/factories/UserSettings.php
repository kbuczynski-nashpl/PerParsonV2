<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserSettings;
use Faker\Generator as Faker;

$factory->define(UserSettings::class, function (Faker $faker) {
    return [
        'timezone' => $faker->timezone,
    ];
});
