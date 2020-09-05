<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crm\TicketNotes;
use Faker\Generator as Faker;

$factory->define(TicketNotes::class, function (Faker $faker) {
    return [
        'text'        => $faker->realText(250),
        'acknowledge' => $faker->boolean(),
    ];
});
