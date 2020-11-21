<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompanyAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrmCompanyAddressFactory extends Factory
{
    protected $model = CrmCompanyAddress::class;

    public function definition()
    {
        return [
            'address_line_1' => $this->faker->streetAddress,
            'address_line_2' => $this->faker->secondaryAddress,
            'city'           => $this->faker->city,
            'post_code'      => $this->faker->postcode,
        ];
    }
}
