<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompanyTicket;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrmCompanyTicketFactory extends Factory
{
    protected $model = CrmCompanyTicket::class;

    public function definition()
    {
        return [
            'name' => $this->faker->text,
        ];
    }
}
