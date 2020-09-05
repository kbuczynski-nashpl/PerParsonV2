<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompanyPhone;
use Faker\Generator as Faker;

$factory->define(CrmCompanyPhone::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->e164PhoneNumber,
    ];
});
