<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompanyContacts;
use Faker\Generator as Faker;

$factory->define(CrmCompanyContacts::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->e164PhoneNumber,
        'email'        => $faker->companyEmail,
    ];
});
