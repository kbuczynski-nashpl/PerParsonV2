<?php

namespace Database\Factories\Crm;

use App\Models\Crm\CrmCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class CrmCompanyFactory
 *
 * @package Database\Factories
 */
class CrmCompanyFactory extends Factory
{
    protected $model = CrmCompany::class;

    public function definition()
    {
        return [
          'company_name' => $this->faker->company,
        ];
    }
}
