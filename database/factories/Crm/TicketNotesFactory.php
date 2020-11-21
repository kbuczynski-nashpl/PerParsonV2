<?php

namespace Database\Factories\Crm;

use App\Models\Crm\TicketNotes;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketNotesFactory extends Factory
{
    protected $model = TicketNotes::class;

    public function definition()
    {
        return [
            'text'        => $this->faker->realText(250),
            'acknowledge' => $this->faker->boolean(),
        ];
    }
}
