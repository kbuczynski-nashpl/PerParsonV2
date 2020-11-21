<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompanyStaff;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrmCompanyStaffFactory extends Factory
{
    protected $model = CrmCompanyStaff::class;

    public function definition()
    {
        return [
            'title'     => $this->faker->title,
            'firstname' => $this->faker->firstName,
            'lastname'  => $this->faker->lastName,
        ];
    }
}
