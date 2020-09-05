<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\CrmCompanyTicket;
use Faker\Generator as Faker;

$factory->define(CrmCompanyTicket::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
    ];
});
