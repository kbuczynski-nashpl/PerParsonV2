<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompanyStaff;
use Faker\Generator as Faker;

$factory->define(CrmCompanyStaff::class, function (Faker $faker) {
    return [
        'title'     => $faker->title,
        'firstname' => $faker->firstName,
        'lastname'  => $faker->lastName,
    ];
});
