<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompanyPhone;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrmCompanyPhoneFactory extends Factory
{
    protected $model = CrmCompanyPhone::class;

    public function definition()
    {
        return [
            'phone_number' => $this->faker->e164PhoneNumber,
        ];
    }
}
