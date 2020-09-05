<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompanyAddress;
use Faker\Generator as Faker;

$factory->define(CrmCompanyAddress::class, function (Faker $faker) {
    return [
        'address_line_1' => $faker->streetAddress,
        'address_line_2' => $faker->secondaryAddress,
        'city'           => $faker->city,
        'post_code'      => $faker->postcode,
    ];
});
