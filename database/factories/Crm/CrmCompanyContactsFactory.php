<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompanyContacts;
use Illuminate\Database\Eloquent\Factories\Factory;


class CrmCompanyContactsFactory extends Factory
{
    protected $model = CrmCompanyContacts::class;

    public function definition()
    {
        return [
            'phone_number' => $this->faker->e164PhoneNumber,
            'email'        => $this->faker->companyEmail,
        ];
    }
}
