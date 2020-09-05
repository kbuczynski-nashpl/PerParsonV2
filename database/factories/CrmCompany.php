<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompany;
use Faker\Generator as Faker;

$factory->define(CrmCompany::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
    ];
});
